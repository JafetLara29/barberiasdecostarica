<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Obtenemos el role del usuario actualmente logeado (barber, barbershop)
        $role_id = DB::table('role_user')->select('role_id')->where('user_id', Auth::user()->id)->get();
        $role = Role::where('id', $role_id[0]->role_id)->get();
        session(['user_type' => $role[0]->name]);
        return view('dashboards.home');
    }

    public function income(){
        return view('dashboard.income');
    }
}
