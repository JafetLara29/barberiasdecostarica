<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Barbershop;
use App\Models\Citation;
use App\Models\Schedule;
use Illuminate\Http\Request;

class CitationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'barbers', 'getHoursByBarber', 'form', 'getBarbersToSelect', 'getWeekByBarber']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.week')->with([
            'barbershop' => '1'
        ]);
    }

    /**
     * Display a listing of the barbershop's barbers.
     *
     * @return \Illuminate\Http\Response
     */
    public function getWeekByBarber(Barber $barber){
        
        // Extraemos la lista de barberos deacuerdo a la barbería
        $schedules = $barber->schedules;
        
        // Vamos llenando los datos de la citation en variables session
        // session(['barber_id' => $barber]);

        return view('public.week')->with([
            'schedules' => $schedules,
        ]);
    }

    /**
     * Display a listing of the barbershop's barbers.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBarbersToSelect(Barbershop $barbershop){
        
        // Extraemos la barberia y sus datos
        // $barbershop = Barbershop::findOrFail($barbershop);
        // Extraemos la lista de barberos deacuerdo a la barbería
        $barbers = $barbershop->barbers;
        
        // Vamos llenando los datos de la citation en variables session
        // session(['barbershop_id' => $barbershop]);
        return view('public.barbers')->with([
            'barbers' => $barbers
        ]);
    }

    /**
     * Display a listing of citations for the citation inbox.
     *
     * @return \Illuminate\Http\Response
     */
    public function inbox()
    {
        // Obtenemos todas las citas
        $citations = Citation::all();

        return view('dashboards.citationinbox')->with([
            'citations' => $citations
        ]);
    }

    public function getHoursByBarber(Schedule $schedule)
    {
        // Vamos llenando los datos de la citation en variables session
        // session(['schedule_id' => $schedule]);
        // Sacamos las horas de acuerdo al rango del horario escogido
        $hours = intervaloHora($schedule->start_time, $schedule->end_time);
        
        return view('public.hours')->with([
            'hours' => $hours
        ]);
    }

    public function form(Barber $barber)
    {
        $services = $barber->services;
        return view('public.citationform')->with([
            'services' => $services
        ]);
    }

//   Citations recieve , send , display methods

public function sendCitationForm(Request $request)
    {
        // Validate the request data
        $request->validate([
            'barber_id' => 'required|exists:users,id',
            'service_id' => 'required',
        ]);

        // Create a new citation based in the input in the form
        $citation = new Citation();
        $citation->sender = $request->auth()->id();
        $citation->barber_id = auth()->id();
        $citation->service_id = $request->citation;
        $citation->save();

        // Return a JSON response
        return response()->json([
            'success' => true,
            'message' => 'Message sent successfully',
        ]);
    }
    public function getCitation()
    {
        // Retrieve all unread citations for the authenticated user
        $citation = Citation::where('read', false)
            ->get();
        // Return a JSON response
        return response()->json([
            'success' => true,
            'citation' => $citation,
        ]);
    }
    public function acceptCitation(Request $request)
{
    // Retrieve the message
    $citation = Citation::findOrFail($request->id);

    // Mark the message as read
    $citation->read = true;
    $citation->save();

    // Return a JSON response
    return response()->json([
        'success' => true,
    ]);
}
public function rejectCitation(Request $request)
{
    // Retrieve the message
    $citation = Citation::findOrFail($request->id);

    // Delete the message of citation
        $citation->delete();


    // Return a JSON response
    return response()->json([
        'success' => true,
    ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Citation  $citation
     * @return \Illuminate\Http\Response
     */
    public function show(Citation $citation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Citation  $citation
     * @return \Illuminate\Http\Response
     */
    public function edit(Citation $citation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Citation  $citation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citation $citation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Citation  $citation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citation $citation)
    {
        //
    }
}
