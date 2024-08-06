<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataRequest;
use App\Models\Answer;
use App\Models\Question;
use App\Models\GivenAnswer;
use App\Models\QuestionSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function index()
    {
        $question_set = QuestionSet::where('active_from', '<=', now())->where('active_to', '>=', now())->first();

        return view('kviz.index', [
            'question_set' => $question_set
        ]);
    }

    public function data(Request $request)
    {
        /**
         * Request:
         * [answer: 'answer_id']
         * all requests are required
         */

        $validated = $request->validate([
            'question' => 'required',
        ]);

        $all_correct = false;

        foreach ($validated['question'] as $question_id => $answer_id) {
            $question = Question::find($question_id);
            $given_answer = Answer::find($answer_id);

            foreach ($question->answers as $answer) {
                if ($answer->is_correct && $answer->id == $given_answer->id) {
                    $all_correct = true;
                }
            }
        }

        Session::put('vote_data', $request->all());
        Session::put('all_correct', $all_correct);

        return view('kviz.data');
    }

    public function vote(DataRequest $request)
    {
        $vote_data = Session::get('vote_data');
        $all_correct = Session::get('all_correct');

        Session::forget('vote_data');
        Session::forget('all_correct');

        $validated = $request->validated();

        if (GivenAnswer::where('name', $validated['name'])->where('email', $validated['email'])->exists()) {
            return view('kviz.result', [
                'all_correct' => $all_correct,
                'already_submitted' => true,
            ]);
        }

        foreach ($vote_data['question'] as $question_id => $answer_id) {
            GivenAnswer::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'answer_id' => $answer_id,
                'question_id' => $question_id,
            ]);
        }

        return view('kviz.result', [
            'already_submitted' => false,
            'all_correct' => $all_correct,
        ]);
    }
}
