<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;
use App\Models\Barber;
use App\Models\Barbershop;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\MorphMany;


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

    public function verifySocial(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);

        try {
            // Obtener el ID del barbero desde la solicitud
            $id = $request->id;

            // Buscar los registros en la tabla "social_media" basados en el social_mediable_id
            $socialMedia = SocialMedia::where('social_mediable_id', $id)->get();

            // Verificar si se encontraron registros
            if ($socialMedia->count() > 0) {
                // Preparar los datos para la respuesta JSON
                $socialMediaInfo = [];
                foreach ($socialMedia as $media) {
                    $socialMediaInfo[] = [
                        'type' => $media->type,
                        'data' => $media->data
                    ];
                }

                // Retornar la respuesta JSON con los datos encontrados
                return response()->json([
                    'success' => true,
                    'data' => $socialMediaInfo
                ]);
            } else {
                // No se encontraron registros, retornar la respuesta JSON indicando eso
                return response()->json([
                    'success' => false,
                    'message' => 'No se encontró información de redes sociales relacionada con el barbero.'
                ]);
            }
        } catch (\Throwable $th) {
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
                'type' => 'required',
                'data' => 'required',
                'barber_id' => 'required',
            ]);


            //requesting the info by array from frontend
            $dataInfo = $request->data;
            $typeInfo = $request->type;
            $result_data = "";
            $result_type = "";


            //making a temp function to remove the spaces and restart the keys from twice arrays

            $dataInfo = array_merge($dataInfo);

            if (sizeof($dataInfo) == 0) {
                return response()->json([
                    'errors' => true,
                ]);
            } else {
                //Based in the quantity of checkboxes typed in frontend add the info in db
                $barber = Barber::findOrFail($request->barber_id);
                foreach ($dataInfo as $key => $data) {
                    if (!empty($data)) {
                        $type = isset($typeInfo[$key]) ? $typeInfo[$key] : '';
                        $socialMedia = new SocialMedia();
                        $socialMedia->social_mediable()->associate($barber);
                        $socialMedia->data = $data;
                        $socialMedia->type = $type;
                        $socialMedia->save();
                    }
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
     * Metodo temporal que almacena la info de redes sociales de una barber, Hay que unificarlo con el metodo store.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSocialMediaForBarbershop(Request $request)
    {
        // Validate the request data
        $request->validate([
            'type' => 'required',
            'data' => 'required'
        ]);


        //requesting the info by array from frontend
        $dataInfo = $request->data;
        $typeInfo = $request->type;
        $result_data = "";
        $result_type = "";


        //making a temp function to remove the spaces and restart the keys from twice arrays

        $dataInfo = array_merge($dataInfo);

        if (sizeof($dataInfo) == 0) {
            return response()->json([
                'errors' => true,
            ]);
        } else {
            //OBTENEMOS A LA BARBERSHOP ACTUALMENTE LOGUEADA
            $barbershop = Barbershop::findOrFail(Auth::user()->id);
            foreach ($dataInfo as $key => $data) {
                if (!empty($data)) {
                    $type = isset($typeInfo[$key]) ? $typeInfo[$key] : '';
                    $socialMedia = new SocialMedia();
                    $socialMedia->social_mediable()->associate($barbershop);
                    $socialMedia->data = $data;
                    $socialMedia->type = $type;
                    $socialMedia->save();
                }
            }

            // Return a JSON response
            return response()->json([
                'success' => true,

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
    public function update(Request $request, $id)
    {
        try {
            // Validate the request data
            $request->validate([
                'data' => 'required',
                'type' => 'required',
            ]);

            // Requesting the info by array from frontend
            $dataInfo = $request->data;
            $typeInfo = $request->type;

            // Run the array and save/update the corresponding social media information
            foreach ($dataInfo as $key => $data) {
                if (!empty($data)) {
                    $type = isset($typeInfo[$key]) ? $typeInfo[$key] : '';

                    $socialMedia = SocialMedia::where('social_mediable_id', $id)
                        ->where('social_mediable_type', 'App\Models\Barber')
                        ->where('type', $type)
                        ->first();

                    if ($socialMedia) {
                        $socialMedia->data = $data;
                        $socialMedia->save();
                    } else {
                        $newSocialMedia = new SocialMedia();
                        $newSocialMedia->social_mediable_type = "App\Models\Barber";
                        $newSocialMedia->social_mediable_id = $id;
                        $newSocialMedia->data = $data;
                        $newSocialMedia->type = $type;
                        $newSocialMedia->save();
                    }
                }
            }

            // Return a JSON response
            return response()->json([
                'success' => true,
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
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMedia $socialMedia)
    {
        //
    }
}
