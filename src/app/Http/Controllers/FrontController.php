<?php

namespace App\Http\Controllers;

use App\Age;
use Validator;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){

        $ages = Age::orderBy('sort','asc')->get();

        return view('front/index',['ages' => $ages]);
    }

    public function confirm(Request $request){

        $validator = Validator::make($request->all(),[
            'fullname' => 'required|max:200',
            'gender' => 'required',
            'age_id' => 'required',
            'email' => 'required',
            'is_send_email' => 'max:255',
            'feedback' => 'max:1000'
        ]);

        if ($validator->fails()){
            return redirect('front/index')
                ->withErrors($validator)
                ->withInput();
        }

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
