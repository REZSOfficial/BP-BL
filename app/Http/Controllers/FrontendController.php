<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\QuestionSet;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $question_set = QuestionSet::where('active_from', '<=', now())->where('active_to', '>=', now())->first();

        return view('kviz.index', [
            'question_set' => $question_set
        ]);
    }

    public function vote(Request $request)
    {
        dd($request->all());
    }
}
