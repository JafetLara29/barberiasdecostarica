<?php

namespace App\Http\Controllers;

use App\Models\Barbershop;
use Illuminate\Http\Request;

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
        $query = $request->input('query');
        $results = Barbershop::where('name', 'like', '%'.$query.'%')->get();
        //dd($request);
        return response()->json($results);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.forms.addbarbershopinformationform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
            'barbershop' => $barbershop
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
        //
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
