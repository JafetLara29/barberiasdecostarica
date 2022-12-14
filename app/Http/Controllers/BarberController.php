<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use Illuminate\Http\Request;

class BarberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($route)
    {
        if($route == 'public'){
            return view('public.barbers');
        }else{
            return view('dashboards.barbercontrol');
        }
    }

    public function barbersPublic($barbershop)
    {
        return view('public.barbers')->with([
            'barber' => '1'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.forms.addbarbersinformationform');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // Validate the request data
            $request->validate([
                'name' => 'required',
                'image' => 'required',
            ]);

            // Create a new barber based in the input in the form
            $barbers = new Barber();
            $barbers->name= $request->name;
            $barbers->image= $request->image;
            $barbers->save();

            // Return a JSON response
            return response()->json([
                'success' => true,
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
