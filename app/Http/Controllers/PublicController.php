<?php

namespace App\Http\Controllers;

use App\Models\Barbershop;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        return view('public.welcome2');
    }
    public function index2(){
        return view('public.welcome');
    }
    public function goToSearch(){
        return view('public.search');
    }
}
