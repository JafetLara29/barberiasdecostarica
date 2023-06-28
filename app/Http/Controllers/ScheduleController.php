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


    public function verifySchedule(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);

        try {
            // Obtener el ID del barbero desde la solicitud
            $id = $request->id;

            // Buscar los registros en la tabla "schedules" basados en el schedulable_id
            $schedules = Schedule::where('scheduleable_id', $id)->get();

            // Verificar si se encontraron registros
            if ($schedules->count() > 0) {
                // Preparar los datos para la respuesta JSON
                $scheduleInfo = [];
                foreach ($schedules as $schedule) {
                    $scheduleInfo[] = [
                        'day' => $schedule->day,
                        'start' => $schedule->start_time,
                        'end' => $schedule->end_time
                    ];
                }

                // Retornar la respuesta JSON con los datos encontrados
                return response()->json([
                    'success' => true,
                    'data' => $scheduleInfo
                ]);
            } else {
                // No se encontraron registros, retornar la respuesta JSON indicando eso
                return response()->json([
                    'success' => false,
                    'message' => 'No se encontró información de horario relacionada con el barbero.'
                ]);
            }
        } catch (\Throwable $th) {
            dd($th);
            return response()->json([
                'errors' => true,
            ]);
        }
    }


    public function store(Request $request)
    {
        try {
            // Validate the request data
            $request->validate([
                'barber_id' => 'required',
                'start' => 'required',
                'end' => 'required',

            ]);

            //requesting an array with the info and parsing it without spaces
            $day = $request->day;
            $endTime = $request->end;
            $startTime = $request->start;
            $result_start = "";
            $result_end = "";

            //run the array and save the corresponding info based in the day of the schedule
            foreach ($day as $key => $value) {
                if (!empty($value)) {
                    $start_time = array_shift($startTime);
                    $end_time = array_shift($endTime);

                    if (!empty($start_time) && !empty($end_time)) {
                        $Schedule = new Schedule();
                        $barber = Barber::findOrFail($request->barber_id);
                        $Schedule->scheduleable()->associate($barber);
                        $Schedule->start_time = $start_time;
                        $Schedule->end_time = $end_time;
                        $Schedule->day = $value;
                        $Schedule->save();
                    }
                }
            }


            // Return a JSON response
            return response()->json([
                'success' => true,
                'id' => $request->barber_id,
            ]);
        } catch (\Throwable $th) {
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
    public function update(Request $request, $id)
{
    try {
        // Validate the request data
        $request->validate([
            'start' => 'required',
            'end' => 'required',
        ]);

        // Requesting an array with the info and parsing it without spaces
        $day = $request->day;
        $endTime = $request->end;
        $startTime = $request->start;

        // Run the array and save/update the corresponding info based on the day of the schedule
        foreach ($day as $key => $value) {
            if (!empty($value)) {
                $start_time = array_shift($startTime);
                $end_time = array_shift($endTime);

                if (!empty($start_time) && !empty($end_time)) {
                    $schedule = Schedule::where('scheduleable_id', $id)
                        ->where('day', $value)
                        ->first();

                    if ($schedule) {
                        $schedule->start_time = $start_time;
                        $schedule->end_time = $end_time;
                        $schedule->save();
                    } else {
                        $newSchedule = new Schedule();
                        $newSchedule->scheduleable_type = "App\Models\Barber"; // Establece el tipo de modelo relacionado
                        $newSchedule->scheduleable_id = $id;
                        $newSchedule->start_time = $start_time;
                        $newSchedule->end_time = $end_time;
                        $newSchedule->day = $value;
                        $newSchedule->save();
                    }
                }
            }
        }

        // Return a JSON response
        return response()->json([
            'success' => true,
            'id' => $id,
        ]);
    } catch (\Throwable $th) {
        dd($th);
        return response()->json([
            'errors' => true,
        ]);
    }
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
