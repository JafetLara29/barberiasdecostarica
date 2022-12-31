<?php

namespace App\Http\Controllers;

use App\Models\Barbershop;
use App\Models\Citation;
use Illuminate\Http\Request;

class CitationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($barbershop)
    {
        return view('public.week')->with([
            'barbershop' => $barbershop
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

    public function barbers($barbershop)
    {
        return view('public.barbers')->with([
            'barber' => '1'
        ]);
    }

    public function hours($barber)
    {
        return view('public.hours')->with([
            'barber' => $barber
        ]);
    }

    public function form($barber)
    {
        return view('public.citationform')->with([
            'barber' => $barber
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
