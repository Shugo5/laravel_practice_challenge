<?php

namespace App\Http\Controllers;

use App\Age;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){

        $ages = Age::orderBy('sort','asc')->get();

        return view('index',['ages' => $ages]);
    }

}
