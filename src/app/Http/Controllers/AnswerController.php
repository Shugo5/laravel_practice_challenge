<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index(Request $request){

        // $answers = Answer::orderBy('id','asc')->paginate(3);
        // return view('system/answer/index', ['answers' => $answers]);

        //値の取得と検索を分けている
        // 検索条件の値を取得
        $fullname = $request->input('fullname');


        $query = Answer::query();

        // もし$s_titleがあれば
        if(!empty($fullname)) {
            $query->where('fullname', 'like', '%'.$fullname.'%');
        }

        //最後にget
        $answers = $query->get();

        return view('system/answer/index')->with('answer', $answers);

    }
}
