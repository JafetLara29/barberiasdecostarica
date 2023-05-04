<?php

namespace App\Http\Controllers;

use App\Models\Barbershop;
use App\Models\Service;
use App\Models\Barber;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboards.servicecontrol');
    }
    public function servicelist()
    {
        return view('dashboards.forms.addbarberservicesform');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function getServices()
     {
         try {
             $services = Service::all();
             return response()->json([
                 'status' => 'success',
                 'message' => 'Services retrieved successfully',
                 'data' => $services
             ], 200);
         } catch (\Exception $e) {
             return response()->json([
                 'status' => 'error',
                 'message' => 'Failed to retrieve services',
                 'error' => $e->getMessage()
             ], 500);
         }
     }



    public function store(Request $request)
    {
        // Validación de datos
        $validatedData = $request->validate([
            'tipo_servicio' => 'required|string|max:255',
            'precio' => 'required|numeric',

        ]);

        // Crear nuevo objeto Service con los datos validados
        $service = new Service;
        $barbershop = auth()->user();
        $service->serviceable()->associate($barbershop);
        $service->description = $validatedData['tipo_servicio'];
        $service->price = $validatedData['precio'];
        // Fecha requerida para el guardado
        $service->date_service = "2023-05-03";

        // Guardar en la base de datos
        if ($service->save()) {
            return response()->json(['success' => true, 'message' => 'Servicio guardado exitosamente']);
        } else {
            return response()->json(['success' => false, 'message' => 'Ha ocurrido un error al guardar el servicio']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function deleteService($id)
    {
        $service = Service::find($id);

        if (!$service) {
            return response()->json(['error' => 'El servicio no existe'], 404);
        }

        try {
            $service->delete();
        } catch (\Exception $e) {
            return response()->json(['error' => 'Ha ocurrido un error al eliminar el servicio'], 500);
        }

        return response()->json(['message' => 'Servicio eliminado exitosamente']);
    }
}
