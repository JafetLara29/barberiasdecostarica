<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Barbershop;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource that we are searching.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $query = $request->get('term');
        $results = Barbershop::where('name', 'like', '%'.$query.'%')->get();
        return response()->json($results);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $barbershop = $user->barbershop;
        $socialMedia = $barbershop->socialMedias;
        return view('dashboards.forms.addbarbershopinformationform')->with([
            'barbershop' => $barbershop,
            'socialMedia' => $socialMedia
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
        return view('public.barbershopinfo')->with([
            'barbershop' => $barbershop,
            'schedule'   => $barbershop->schedules,
            'barbers'    => $barbershop->barbers,
            'services'   => $barbershop->services
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
        $barbershop->name = $request->name;
        $barbershop->address = $request->address;
        $barbershop->canton = $request->canton;

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
        $barbershop->save();
        return response()->json([
            'success' => true,
            'id' => Barber::latest('id')->first()->id,
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
}
