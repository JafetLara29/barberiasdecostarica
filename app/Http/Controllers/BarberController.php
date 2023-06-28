<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Barbershop;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Throwable;

class BarberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barbers = Barber::all();

        return view('dashboards.barbercontrol')->with(['barbers' => $barbers]);
    }
    // Ruta de perfil barber
    public function profile()
    {

        return view('dashboards.forms.barberprofile');
    }
    // ruta de calendario Barber
    public function schedule()
    {

        return view('dashboards.forms.barberschedule');
    }

    public function getBarbersPublicSite($barbershop)
    {
        /*
        // Extraemos la barberia y sus datos
        $barbershop = Barbershop::findOrFail($barbershop);
        // Extraemos la lista de barberos deacuerdo a la barbería
        $barbers = $barbershop->barbers();
        */
        return view('public.barbers')->with([
            'barbers' => '1'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function verifyBarber(Request $request)
     {
         try {
             $nombreBarbero = $request->input('name');

             $barbero = barber::where('name', $nombreBarbero)->first();

             if ($barbero) {
                 return [
                     'existe' => true,
                     'user_id' => $barbero->id
                 ];
             } else {
                 return [
                     'existe' => false
                 ];
             }
         } catch (\Throwable $th) {
             return [
                 'error' => 'Error al verificar el barbero: ' . $th->getMessage()
             ];
         }
     }


    public function create()
    {
        return view('dashboards.forms.addbarbersinformationform'); //
    }

    /**
     * * Create a new user barber
     */
    public function createUser()
    {
        $users = DB::table('role_user')
            ->join('users', 'users.id', '=', 'role_user.user_id')
            ->select('users.id', 'users.name', 'users.email')
            ->where('role_user.role_id', '=', '2')
            ->get();
        return view('dashboards.forms.addusersform')->with(['users' => $users]);
    }

    /**
     * * Store user barber
     */

    public function storeUser(Request $request)
    {
        // try{
        $rule = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . Auth::user()->id],
            'password' => ['required', 'string', 'min:8'],
        ];

        $message = [
            'required' => 'El input :attribute es requerido',
            'email' => 'El input :attribute debe tener un formato válido',
            'email.unique' => 'Email ya registrado en el sistema',
        ];

        $this->validate($request, $rule, $message);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        $role = Role::where('name', 'barber')->first();

        DB::table('role_user')->insert([
            'user_id' => User::latest('id')->first()->id,
            'role_id' => $role->id,
            'parent_id' => Auth::user()->id
        ]);

        $user->role = $role->id;

        return redirect()->route('barbers.createUser')->with('status', '¡Usuario agregado correctamente!');
        // } catch (\Throwable $th) {
        //     return redirect()->route('barbers.createUser')->withErrors($th->getMessage());
        // }
    }

    /**
     * Store a new barber.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $barbers = new Barber();
        $barbers->barbershop_id = Barbershop::latest('id')->first()->id;
        $barbers->name = $request->name;

        // Obtener el usuario autenticado y sus roles asociados
        $role = Role::where('name', 'barber')->first();
        // Verificar si el usuario tiene un rol asociado
        if ($role) {
            // Obtener el ID del rol
            $roleId = $role->id;

            // Asignar el ID del rol al campo user_id
            $barbers->user_id = $roleId;

            // Proceso de guardado de imagen:
            $fileName = $request->file('image')->hashName();        // Creamos un nombre unico para el archivo
            $fileType = $request->file('image')->getMimeType();     // Verificamos que tipo de archivo estamos guardando (image/jpg)

            // Verificamos el tipo de archivo
            if (str_contains($fileType, 'image') == true) {
                $path = $request->file('image')->storeAs('barbers', $fileName, 'public'); // Esto va almacenar el archivo en la carpeta storage/app/public/barbers
            } else {
                // An error response
                return response()->json([
                    'errors' => true,
                ]);
            }
            // Guardamos el path y el tipo de archivo en el modelo
            $barbers->image = '/storage/' . $path; // Se va a guardar en la db -> "/storage/images/nombreFoto.extension";
            $barbers->save();

            return response()->json([
                'success' => true,
                'id' => $barbers->id,
            ]);
        }

        // Si el usuario no tiene un rol asociado, devuelve una respuesta de error
        return response()->json([
            'error' => true,
            'message' => 'El usuario autenticado no tiene un rol asociado.',
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function show(Barber $barber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function edit(Barber $barber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'image' => 'required',
    ]);

    $barber = Barber::findOrFail($id);
    $barber->name = $request->name;

    // Proceso de guardado de imagen:
    $fileName = $request->file('image')->hashName();
    $fileType = $request->file('image')->getMimeType();

    if (str_contains($fileType, 'image')) {
        $path = $request->file('image')->storeAs('barbers', $fileName, 'public');
    } else {
        return response()->json([
            'errors' => true,
        ]);
    }

    $barber->image = '/storage/' . $path;
    $barber->save();

    return response()->json([
        'success' => true,
        'id' => $barber->id,
    ]);
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barber $barber)
    {
        $barber->delete();

        $barbers = Barber::all();

        return view('dashboards.barbercontrol')->with(['barbers' => $barbers]);
    }

    // Metodo para la consulta de informacion basada en barber_id o auth()->user_id
}
