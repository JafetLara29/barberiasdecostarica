<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use Illuminate\Http\Request;
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
        $barbers=Barber::all();

        return view('dashboards.barbercontrol')->with(['barbers'=>$barbers]);
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
    public function create()
    {
        return view('dashboards.forms.addbarbersinformationform'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            // Validate the request data
            $request->validate([
                'name' => 'required',
                'image' => 'required',
            ]);

            // Create a new barber based in the input in the form
            $barbers = new Barber();
            $barbers->id = $request->barber_id;
            $barbers->barbershop_id = auth()->user()->id; //Polimorphic relationship
            $barbers->name = $request->name;
            $barbers->image = $request->image;
            $barbers->save();

            // Return a JSON response
            return response()->json([
                'success' => true,
                'id' => $barbers->id,
            ]);
        } catch (Throwable $th) {
            dd($th);
            // An error response
            return response()->json([
                'errors' => true,

            ]);
            //throw $th;
        }
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
    public function update(Request $request, Barber $barber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barber $barber)
    {
        //
    }
}
