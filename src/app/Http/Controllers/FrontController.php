<?php

namespace App\Http\Controllers;

use App\Age;
use App\Answer;
use Validator;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){

        $ages = Age::orderBy('sort','asc')->get();
        return view('front/index',['ages' => $ages]);

    }

    // public function index_second(Request $request){

    //     $validator = Validator::make($request->all(),[
    //         'fullname' => 'required|max:200',
    //         'gender' => 'required',
    //         'age_id' => 'required',
    //         'email' => 'required',
    //         'is_send_email' => 'max:255',
    //         'feedback' => 'max:1000'
    //     ]);

    //     if ($validator->fails()){
    //         return redirect('front/index')
    //             ->withInput()
    //             ->withErrors($validator);
    //     }

    //     return view('front/index',[
    //         'fullname' => $request->fullname,
    //         'gender' => $request->gender,
    //         'age_id' => $request->age_id,
    //         'email' => $request->email,
    //         'is_send_email' => $request->is_send_email,
    //         'feedback' => $request->feedback
    //     ]);

    // }
    public function index_second(Request $request, Answer $answer){

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
                ->withInput()
                ->withErrors($validator);
        }

        // 以下で入力値を、answerテーブルに保存する。
        $answer = new Answer;
        $answer->fullname = $request->fullname;
        $answer->gender = $request->gender;
        $answer->age_id = $request->age_id;
        $answer->email = $request->email;
        $answer->is_send_email = $request->is_send_email;
        $answer->feedback = $request->feedback;
        $answer->save();
        return redirect('front/index');

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
                ->withInput()
                ->withErrors($validator);
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
