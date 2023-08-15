<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Barbershop;
use App\Models\Citation;
use App\Models\Schedule;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class CitationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'getBarberCitationClientName', 'barbers', 'getHoursByBarber', 'form', 'getBarbersToSelect', 'getCitationCalendar', 'store', 'getBarberCitationSchedule', 'getBarberCitationHours']);
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

    //  Este metodo va ser reemplazado por el calendario de CitationSchedule
    public function getWeekByBarber(Barber $barber)
    {

        // Extraemos la lista de barberos deacuerdo a la barbería
        $schedules = $barber->schedules;

        // Vamos llenando los datos de la citation en variables session
        session(['barber_id' => $barber->id]);

        return view('public.week')->with([
            'schedules' => $schedules,
        ]);
    }

    public function getCitationCalendar(Barber $barber)
    {
        session(['barber_id' => $barber->id]);

        $user_id = $barber->user_id;

        $services = Service::where('serviceable_id', $user_id)->get();

        return view('public.citationschedule')->with([
            'barber' => $barber,
            'services' => $services,
        ]);
    }


    public function getBarberCitationSchedule(Request $request)
    {
        $colors = ['#9A40F4', '#111', '#859F11', '#389D9A', '#7E73EB', '#BC73EB', '#BF2C66', '#C0A339', '#C039BE'];
        if (session('barber_id') != null) {                    // Si tenemos variable de session (Proceso de la parte publica)
            $barber = Barber::find(session('barber_id'));
        } else {
            $barber = Barber::find(Auth::user()->id);
        }
        // Obtenemos las citas ligadas a este barber
        $events = [];
        if ($citations = $barber->citations) {
            foreach ($citations as $key => $citation) {
                $hour = explode(":", $citation->time);
                $hour = $hour[0] . ":" . $hour[1];
                $events[] = [
                    'title' => $hour,
                    'start' => $citation->date,
                    'color' => $colors[rand(0, sizeof($colors) - 1)],
                    'detail' => 'Cita agendada',
                ];
            }

            session(['barber_id' => $barber->id]); // Vamos llenando los datos de la citation en variables session. Esto nos permite acceder a un dato desde otros metodos

            return response()->json([
                'ok'        => true,
                'events'    => $events
            ]);
        } else {
            return response()->json([
                'ok'        => true,
                'events'    => $events
            ]);
        }
    }

    public function getBarberCitationClientName(Request $request)
    {
        $barber = Barber::find(session('barber_id'));
        $citations = $barber->citations()
            ->where('date', $request->date)
            ->where('time', $request->time)
            ->get();
        return response()->json([
            'ok'        => true,
            'sender'    => $citations[0]->sender
        ]);
    }

    /**
     * Display a listing of the barbershop's barbers.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBarbersToSelect(Barbershop $barbershop)
    {

        $barbers = $barbershop->barbers;
        return view('public.barbers')->with([
            'barbers' => $barbers
        ]);
    }

    /**
     * Display a listing of citations for the citation inbox.
     *
     * @return \Illuminate\Http\Response
     */
    // Obtenemos todas las citas para parte de admin

    public function barberCitationsForSchedule(Request $request)
    {
        try {
            $user = auth()->user();

            $user_id = $user->id; // Obtén el ID del usuario autenticado
            $date = $request->input('date');

            // Buscar la cita basada en el user_id del usuario autenticado
            $citation = Citation::select('service_id', 'time', 'date', 'sender')
                ->where('id', $user_id) // Usar el user_id como filtro en la columna id
                ->whereDate('date', '=', $date)
                ->first(); // Usar first() en lugar de get() para obtener solo una cita

            if ($citation) {
                $event = array(
                    'service' => $citation->service_id,
                    'time' => $citation->time,
                    'date' => $citation->date,
                    'sender' => $citation->sender
                );

                return response()->json([
                    'success' => true,
                    'events' => [$event] // Devolver un array con el evento
                ]);
            } else {
                return response()->json([
                    'success' => true,
                    'events' => [] // Sin eventos
                ]);
            }
        } catch (Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving events'
            ]);
        }
    }


    public function inbox()
    {
        $barber = Barber::find(Auth::user()->id);

        if (!isset($barber->citations) || $barber->citations->isEmpty())
            return view('dashboards.citationinbox');
        else
            $barber->citations()->where('read', 0);
        $citations = Citation::all();
        return view('dashboards.citationinbox')->with([
            'citations' => $citations
        ]);
    }

    public function getBarberCitationHours(Request $request)
    {
        try {
            $day = Carbon::parse($request->date)->locale('en')->dayName; // Usamos la libreria carbon para pasar una fecha 00/00/00 a su equivalente dia de la semana (Lunes, martes ...)
            $day = removeAccentMarks($day);                              // Quitamos las tildes con una funcion creada por lara en app/Http/helpers
            $day = ucfirst($day);
            $schedule = [];                                              // Nos aseguramos que la primer letra sea mayuscula para ser consistentes
            // Obtenemos el horario del barbero que coinside con el dia indicado
            $barber     = Barber::find(session('barber_id'));
            $schedule   = $barber->schedules()->where('day', $day)->get();
            if (sizeof($schedule) == 0) {                                     // Si NO hay algun horario registrado para ese dia:
                return response()->json(['ok' => true, 'hours' => 'Empty']); // Retornamos un mensaje "Empty" para atrapar el evento en el front
            } else {
                // Seteamos el horario y fecha escogida:
                session(['schedule_id' => $schedule[0]->id]);
                session(['date'        => $request->date]);
                $hours = intervaloHora($schedule[0]->start_time, $schedule[0]->end_time, 30); // Extraemos las horas entre la hora de inicio y hora final segun el intervalo escogido por el barbero
                // Quitamos las horas que ya se escogieron de las citas agendadas a este barbero:
                $citations = $schedule[0]->citations()->where('date', $request->date)->get();
                if (sizeof($citations) > 0) {
                    foreach ($citations as $key => $citation) {
                        $citationHour = explode(":", $citation->time);
                        $hour = ($citationHour[0][0] == '0' ? $citationHour[0][1] : $citationHour[0]) . ":" . $citationHour[1];
                        for ($i = 0; $i < sizeof($hours); $i++) {
                            if ($hour == $hours[$i]) {
                                $hours[$i] = '-';
                            }
                        }
                    }
                }
                return response()->json(['ok' => true, 'hours' => $hours]);
            }
        } catch (Throwable $th) {
            return response()->json(['ok' => false, 'error' => $th->getMessage()]);
        }
    }

    public function form(Barber $barber, $hour)
    {
        // Vamos llenando los datos de la citation en variables session
        session(['time' => $hour]);
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

    // Retrieve all unread citations for the authenticated user
    public function getCitation()
    {
        session(['barber_id' => 1]);
        // TODO: Hay que implementar una columna para la tabla user que nos permita saber si un usuario es de un barbero o una barberia
        // TODO: if($user->type == Barber::class){}
        $citations = Barber::find(1)->citations()->where('read', false)->get();

        // Return a JSON response
        return response()->json([
            'success' => true,
            'citation' => $citations,
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barber = Barber::find(session('barber_id'));
        try {
            // Guardamos la informacion de la cita
            $citation = new Citation();
            $citation->time = $request->hour;
            $citation->service_id = $request->service_id;
            $citation->barber_id = session('barber_id');
            $citation->schedule_id = session('schedule_id');
            $citation->sender = $request->sender;
            $citation->date = session('date');
            $citation->save();
            return view('public.citationschedule')->with([
                'barber' => $barber,
                'services'  => $barber->services,
                'result'  => 'success'
            ]);
        } catch (\Throwable $th) {
            return view('public.citationschedule')->with([
                'barber' => $barber,
                'services'  => $barber->services,
                'result'  => 'error'
            ]);
        }
    }
}
