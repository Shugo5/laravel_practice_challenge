<?php

namespace App\Http\Controllers;

use App\Age;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){

        $ages = Age::orderBy('sort','asc')->get();

        return view('front/index',['ages' => $ages]);
    }

    public function confirm(Request $request){

        return view('front/confirm',[
            'fullname' => $request->fullname,
            'gender' => $request->gender,
            'age_id' => $request->age_id,
            'email' => $request->email,
            'is_send_email' => $request->is_send_email,
            'feedback' => $request->feedback
        ]);

    }

}
