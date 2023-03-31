<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use App\Models\Barber;
use Illuminate\Http\Request;

class ScheduleController extends Controller
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
     * @param  \App\Http\Requests\StoreScheduleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            // Validate the request data
            $request->validate([
                'barber_id'=>'required',
                'start'=>'required',
                'end'=>'required',

            ]);

            //requesting an array with the info and parsing it without spaces
                $day = $request->day;
                $endTime = $request->end;
                $startTime = $request->start;
                $result_start="";
                $result_end="";





            //run the array and save the corresponding info based in the day of the schedule
            for ($i = 0; $i < count($day); $i++) {

                if($day[$i]!=""){
                    for ($j=0; $j<sizeof($startTime) ; $j++) {
                        if($startTime[$j]!=""){
                            $result_start=$startTime[$j];
                            $startTime[$j]="";
                        }
                    }
                    for ($k=0; $k <sizeof($endTime) ; $k++) {
                        if($endTime[$k]!=""){
                            $result_end=$endTime[$k];
                            $endTime[$k]="";
                        }
                    }

                    $Schedule = new Schedule();
                    $barber= Barber::findOrFail($request->barber_id);
                    $Schedule->scheduleable()->associate($barber);
                    // $Schedule->scheduleable()=$barber;
                    $Schedule->start_time = $result_start[$i];
                    $Schedule->end_time = $result_end[$i];
                    $Schedule->day = $day[$i];
                    $Schedule->save();
                }


            }

            // Return a JSON response
            return response()->json([
                'success' => true,
                'id'=>$request->barber_id,
            ]);
        } catch (\Throwable $th) {
            dd($th);
            return response()->json([
                'errors' => true,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateScheduleRequest  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScheduleRequest $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
