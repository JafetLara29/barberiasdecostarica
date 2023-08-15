<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
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
        $user = Auth::user();
        $barber = $user->barber;
        return view('dashboards.barbercontrol')->with(['barbers' => $barber]);
    }

    // Ruta de perfil barber
    public function profile($userId)
    {

        return view('dashboards.forms.barberprofile', ['userId' => $userId]);
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
            $idBarbero = $request->id;

            // Buscar el barbero por ID
            $barbero = Barber::where('id', $idBarbero)->first();

            if ($barbero) {
                // Si se encuentra un barbero con el ID proporcionado, devolver el user_id y name del barbero en el response
                return [
                    'existe' => true,
                    'user_id' => $barbero->id,
                    'name' => $barbero->name,
                ];
            } else {
                return [
                    'existe' => false,
                ];
            }
        } catch (\Throwable $th) {
            return [
                'error' => 'Error al verificar el barbero: ' . $th->getMessage(),
            ];
        }
    }




    public function create($userId = null)
    {
        return view('dashboards.forms.addbarbersinformationform', compact('userId'));
    }


    /**
     * Create a new user barber
     */
    public function createUser()
    {
        $users = DB::table('role_user')
            ->join('users', 'users.id', '=', 'role_user.user_id')
            ->select('users.id', 'users.name', 'users.email')
            ->where('role_user.role_id', '=', '2')
            ->where('role_user.parent_id', '=', Auth::user()->id)
            ->get();

        return view('dashboards.forms.addusersform')->with(['users' => $users, 'status']);
    }

    /**
     * * Store user barber
     */

    public function storeUser(Request $request)
    {
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

        $validator = Validator::make($request->all(), $rule, $message);

        if ($validator->fails()) {
            return redirect()->route('barbers.createUser')->withErrors($validator)->withInput();
        }

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

        return redirect()->route('barbers.createUser')->with('success', '¡Usuario agregado correctamente!');

    }
    function updateUser(Request $request)
    {
        $rule = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $request->user_id],
            'password' => ['required', 'string', 'min:8'],
        ];

        $message = [
            'required' => 'El input :attribute es requerido',
            'email' => 'El input :attribute debe tener un formato válido',
            'email.unique' => 'Email ya registrado en el sistema',
        ];

        $this->validate($request, $rule, $message);

        $user = User::find($request->user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();

        return redirect()->route('barbers.createUser')->with('success', '¡Usuario actualizado correctamente!');

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
        $user = Auth::user();
        $parentId = DB::table('role_user')
            ->where('user_id', $user->id)
            ->whereNotNull('parent_id')
            ->pluck('parent_id');
        $barber = new Barber();
        $barber->user_id = $user->id;
        $barber->name = $request->name;

        // Obtener el usuario autenticado y sus roles asociados
        //$role = Role::where('name', 'barber')->first();
        // Verificar si el usuario tiene un rol asociado
        //if ($role) {
            // Obtener el ID del rol
            //$roleId = $role->id;

            // Asignar el ID del rol al campo user_id

            // Proceso de guardado de imagen:
        $fileName = $request->file('image')->hashName();        // Creamos un nombre unico para el archivo
        $fileType = $request->file('image')->getMimeType();     // Verificamos que tipo de archivo estamos guardando (image/jpg)

        // Verificamos el tipo de archivo
        if (str_contains($fileType, 'image') == true) {
            $path = $request->file('image')->storeAs('barbers', $fileName, 'public'); // Esto va almacenar el archivo en la carpeta storage/app/public/barbers
        } else {
            return response()->json([
                'errors' => true,
            ]);
        }
        $barber->image = '/storage/' . $path; // Se va a guardar en la db -> "/storage/images/nombreFoto.extension";
        $barber->barbershop_id = $parentId[0];

        $barber->save();
        return response()->json([
            'success' => true,
            'id' => $barber->id,
        ]);

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

        return redirect()->route('dashboards.barbercontrol')->with(['barbers' => $barbers]);
    }
}
