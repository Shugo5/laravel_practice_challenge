<?php

namespace App\Http\Controllers;

use App\Answer;


class AnswerController extends Controller
{
    public function index(){

        $answers = Answer::orderBy('id','asc')->paginate(3);
        return view('system/answer/index', ['answers' => $answers]);
    }
}
