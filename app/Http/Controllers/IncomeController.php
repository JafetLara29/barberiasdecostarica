<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboards.income');
    }

    public function filter(Request $request)
    {

        $temp_year = null;
        if (isset($request->year)) {
            $temp_year = $request->year;
        } else {
            $temp_year = "vacio!";
        }

        //$anio = 2022;
        // ? El model Book se cambia por Service
        // ? date_book se cambia por date_service
        /*$totalincomes = Book::select(DB::raw(
            'SUM(IF(MONTH(date_book) = 1,  price, 0)) AS Ene,
            SUM(IF(MONTH(date_book) = 2,  price, 0)) AS Feb,
            SUM(IF(MONTH(date_book) = 3,  price, 0)) AS Mar,
            SUM(IF(MONTH(date_book) = 4,  price, 0)) AS Abr,
            SUM(IF(MONTH(date_book) = 5,  price, 0)) AS May,
            SUM(IF(MONTH(date_book) = 6,  price, 0)) AS Jun,
            SUM(IF(MONTH(date_book) = 7,  price, 0)) AS Jul,
            SUM(IF(MONTH(date_book) = 8,  price, 0)) AS Ago,
            SUM(IF(MONTH(date_book) = 9,  price, 0)) AS Sep,
            SUM(IF(MONTH(date_book) = 10, price, 0)) AS Oct,
            SUM(IF(MONTH(date_book) = 11, price, 0)) AS Nov,
            SUM(IF(MONTH(date_book) = 12, price, 0)) AS Dic'
        ))->whereYear('date_book', $temp_year)->get();*/

        // * Se envia por JSON a $totalincomes
        return response()->json($temp_year);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
