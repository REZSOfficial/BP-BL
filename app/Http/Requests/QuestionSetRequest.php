<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionSetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    protected function prepareForValidation()
    {
        $questions = $this->input('questions', []);

        foreach ($questions as &$question) {
            if (isset($question['answers'])) {
                foreach ($question['answers'] as &$answer) {
                    // Ensure 'is_correct' is always true or false
                    $answer['is_correct'] = !empty($answer['is_correct']);
                }
            }
        }

        // Merge the modified questions back into the request data
        $this->merge(['questions' => $questions]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'active_from' => 'date|nullable',
            'active_to' => 'date|nullable',
            'questions' => 'array',
            'questions.*.question' => 'required|string',
            'questions.*.answers' => 'array',
            'questions.*.answers.*.answer' => 'required|string',
            'questions.*.answers.*.is_correct' => 'boolean',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Cím megadása kötelező.',
            'description.required' => 'Leírás megadása kötelező.',
            'title.max' => 'A cím túl hosszú.',
            'description.max' => 'A cím túl hosszú.',
            'questions.*.question.required' => 'Kérdések megadása kötelező.',
            'questions.*.answers.*.answer.required' => 'Válaszok megadása kötelező.',
        ];
    }
}
