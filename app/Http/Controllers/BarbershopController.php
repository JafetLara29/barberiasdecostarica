<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Barbershop;
use App\Models\Service;
use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BarbershopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['search', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function restoreSession()
    {
        if(!session()->has('user_type')){
            session(['user_type', 'barbershop']);
        }
    }

    /**
     * Display a listing of the resource that we are searching.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $query = $request->get('term');
        $results = Barbershop::where('name', 'like', '%' . $query . '%')->get();
        return response()->json($results);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->restoreSession();
        $user = Auth::user();
        $barbershop = $user->barbershop;
        $socialMedia = $barbershop->socialMedias;
        return view('dashboards.forms.addbarbershopinformationform')->with([
            'barbershop' => $barbershop,
            'socialMedia' => $socialMedia,
            'id' => $barbershop->id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barbershop  $barbershop
     * @return \Illuminate\Http\Response
     */
    public function show(Barbershop $barbershop)
    {
        
        $this->restoreSession();
        return view('public.barbershopinfo')->with([
            'barbershop' => $barbershop,
            'schedule'   => $barbershop->schedules,
            'barbers'    => $barbershop->barbers,
            'services'   => $barbershop->services,
            'id'   => $barbershop->id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barbershop  $barbershop
     * @return \Illuminate\Http\Response
     */
    public function edit(Barbershop $barbershop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barbershop  $barbershop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barbershop $barbershop)
    {
        $this->restoreSession();
        $barbershop->name = $request->name;
        $barbershop->address = $request->address;
        $barbershop->canton = $request->canton;

        if($request->hasFile('image')){
            // Proceso de guardado de imagen:
            $fileName = $request->file('image')->hashName();        // Creamos un nombre unico para el archivo
            $fileType = $request->file('image')->getMimeType();     // Verificamos que tipo de archivo estamos guardando (image/jpg)
            // Verificamos el tipo de archivo
            if (str_contains($fileType, 'image') == true) {
                $path = $request->file('image')->storeAs('barbershops', $fileName, 'public'); // Esto va almacenar el archivo en la carpeta storage/app/public/barbers
            } else {
                // An error response
                return response()->json([
                    'errors' => true,
                ]);
            }
            // Guardamos el path y el tipo de archivo en el modelo
            $barbershop->image = '/storage/' . $path; // Se va a guardar en la db -> "/storage/images/nombreFoto.extension";
        }

        $barbershop->save();

        return response()->json([
            'success' => true,
            'id' => $barbershop->id,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barbershop  $barbershop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barbershop $barbershop)
    {
        //
    }

    public function getBarberUser($userId)
    {
        $this->restoreSession();
        // Buscar el barbero según el user_id
        $barber = Barber::where('user_id', $userId)->first();

        if ($barber) {
            // Obtener el usuario asociado al barbero
            $user = User::find($userId);

            // Obtener el email del usuario
            $email = $user ? $user->email : null;

            // Obtener la dirección de la tabla barbershops
            $barbershop = Barbershop::where('id', $barber->barbershop_id)->first();
            $address = $barbershop ? $barbershop->address : null;

            // Obtener los teléfonos del modelo SocialMedia
            $socialMedia = SocialMedia::where('social_mediable_id', $barber->id)
                ->where('type', 'telefono')
                ->pluck('data')
                ->toArray();

            // Crear un objeto con los datos a devolver en la respuesta JSON
            $data = [
                'name' => $barber->name,
                'barbershop_id' => $barber->barbershop_id,
                'email' => $email,
                'telefono' => $socialMedia,
                'address' => $address,
            ];

            // Retornar los datos en formato JSON
            return response()->json($data);
        } else {
            // Retornar una respuesta de error si no se encuentra el barbero
            return response()->json(['error' => 'Barber not found'], 404);
        }
    }

    // Método futuro para usarlo con la vista llamada barberprofile.blade.php
    // public function updateBarberUser(Request $request, $userId)
    // {
    //     // Obtener el barbero según el user_id
    //     $barber = Barber::where('user_id', $userId)->first();

    //     if ($barber) {
    //         // Actualizar los datos adicionales del barbero
    //         $barber->name = $request->input('name');
    //         $barber->save();

    //         // Obtener el usuario asociado al barbero
    //         $user = User::where('id', $userId)->first();

    //         if ($user) {
    //             // Actualizar el nombre en la tabla users
    //             $user->name = $barber->name;
    //             $user->save();

    //             // Actualizar el email del usuario
    //             $user->email = $request->input('email');
    //             $user->save();
    //         }

    //         // Obtener la barbería asociada al barbero
    //         $barbershop = Barbershop::where('id', $barber->barbershop_id)->first();

    //         if ($barbershop) {
    //             // Actualizar la dirección de la barbería
    //             $barbershop->address = $request->input('address');
    //             $barbershop->save();
    //         }

    //         // Actualizar los teléfonos del modelo SocialMedia
    //         $telefono = $request->input('telefono');
    //         $socialMedia = SocialMedia::where('social_mediable_id', $barber->id)
    //             ->where('type', 'telefono')
    //             ->first();

    //         if ($socialMedia) {
    //             $socialMedia->data = $telefono;
    //             $socialMedia->save();
    //         } else {
    //             // Crear un nuevo registro en la tabla SocialMedia si no existe
    //             $socialMedia = new SocialMedia();
    //             $socialMedia->social_mediable_id = $barber->id;
    //             $socialMedia->social_mediable_type = 'App\Models\Barber';
    //             $socialMedia->type = 'telefono';
    //             $socialMedia->data = $telefono;
    //             $socialMedia->save();
    //         }

    //         // Retornar una respuesta de éxito
    //         return response()->json(['success' => true, 'message' => 'Datos actualizados correctamente']);
    //     } else {
    //         // Retornar una respuesta de error si no se encuentra el barbero
    //         return response()->json(['error' => 'Barber not found'], 404);
    //     }
    // }



    public function updateBarberUser(Request $request, $userId) {
        try {
            $user = User::findOrFail($userId);

            // Validar y actualizar la información del usuario
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $userId,
                'password' => 'nullable|string|min:8', // Permitir el campo de contraseña como opcional
            ]);

            $user->name = $request->name;
            $user->email = $request->email;

            // Verificar si se proporcionó una nueva contraseña y encriptarla
            if (!empty($request->password)) {
                $user->password = Hash::make($request->password);
            }

            $user->save();

            return response()->json(['message' => 'Información del usuario barbero actualizada exitosamente.']);
        } catch (\Exception $e) {
            // Manejar cualquier excepción que ocurra durante el proceso
            return response()->json(['message' => 'Ha ocurrido un error al actualizar la información del usuario barbero.'], 500);
        }
    }



    // Para los servicios de un barber con X user_id
    public function getServiceCards($userId)
    {
        try {
            $barberId = $userId;
            $services = Service::where('serviceable_id', $barberId)->get();

            return response()->json(['services' => $services]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al obtener la lista de servicios'], 500);
        }
    }
    public function actualizarServicio(Request $request)
    {
        try {
            $serviceId = $request->input('serviceId');
            $descripcion = $request->input('descripcion');
            $precio = $request->input('precio');

            // Buscar el servicio en la base de datos
            $servicio = Service::find($serviceId);

            if ($servicio) {
                // Actualizar los campos del servicio
                $servicio->description = $descripcion;
                $servicio->price = $precio;

                // Guardar los cambios en la base de datos
                $servicio->save();

                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false]);
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false]);
        }
    }

}
