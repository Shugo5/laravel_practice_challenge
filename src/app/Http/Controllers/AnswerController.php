<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Age;
use App\Answer;

class AnswerController extends Controller
{
    public function index(){
        // 以下はページ表示確認の為
        // $ages = Age::orderBy('sort','asc')->get();
        // return view('system/answer/index',['ages' => $ages]);

        $answers = Answer::table('answers')->paginate(3);

        return view('system/answer/index', ['answers' => $answers]);

    }
}
