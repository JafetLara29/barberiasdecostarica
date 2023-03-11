<?php

namespace App\Http\Controllers;

use App\Models\Service;
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

        $filter_by_year = null;
        if (isset($request->year)) {
            $filter_by_year = $request->year;
        } else {
            $filter_by_year = "vacio!";
        }

        $totalincomes = Service::whereYear('date_service', $filter_by_year)
            ->selectRaw('SUM(IF(MONTH(date_service) = 1,  price, 0)) AS Ene,
                                    SUM(IF(MONTH(date_service) = 2,  price, 0)) AS Feb,
                                    SUM(IF(MONTH(date_service) = 3,  price, 0)) AS Mar,
                                    SUM(IF(MONTH(date_service) = 4,  price, 0)) AS Abr,
                                    SUM(IF(MONTH(date_service) = 5,  price, 0)) AS May,
                                    SUM(IF(MONTH(date_service) = 6,  price, 0)) AS Jun,
                                    SUM(IF(MONTH(date_service) = 7,  price, 0)) AS Jul,
                                    SUM(IF(MONTH(date_service) = 8,  price, 0)) AS Ago,
                                    SUM(IF(MONTH(date_service) = 9,  price, 0)) AS Sep,
                                    SUM(IF(MONTH(date_service) = 10, price, 0)) AS Oct,
                                    SUM(IF(MONTH(date_service) = 11, price, 0)) AS Nov,
                                    SUM(IF(MONTH(date_service) = 12, price, 0)) AS Dic')
            ->get();

        return response()->json($totalincomes);
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
