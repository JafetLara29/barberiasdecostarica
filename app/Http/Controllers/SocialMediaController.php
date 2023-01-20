<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
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
        try {
                // Validate the request data
                $request->validate([
                    'type' => 'required',
                    'data' => 'required',
                    'barber_id'=>'required',
                ]);


            //requesting the info by array from frontend
                $dataInfo = array_filter($request->data);
                $typeInfo = array_filter($request->type);
                //making a temp function to remove the spaces and restart the keys from twice arrays

                $dataInfo = array_merge($dataInfo);

                if(sizeof($dataInfo)==0){
                        return response()->json([
                            'errors' => true,
                        ]);
                } else {
                //Based in the quantity of checkboxes typed in frontend add the info in db

                    for ($i = 0; $i < sizeof($dataInfo); $i++) {

                        $socialMedia = new SocialMedia();
                        $socialMedia->barbershop_barber_id = $request->barber_id;
                        $socialMedia->data = $dataInfo[$i];
                        $socialMedia->type = $typeInfo[$i];
                        $socialMedia->save();

                    }
                    // Return a JSON response
                    return response()->json([
                        'success' => true,

                    ]);
            }
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'errors' => true,

            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function show(SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMedia $socialMedia)
    {
        //
    }
}
