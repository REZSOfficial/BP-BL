<?php

namespace App\Http\Controllers\Admin;

use App\Models\GivenAnswer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\GivenAnswerRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class GivenAnswerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class GivenAnswerCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\GivenAnswer::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/given-answer');
        CRUD::setEntityNameStrings('given answer', 'given answers');

        CRUD::setListView('vendor.backpack.crud.givenanswer.list');
    }

    public function showGivenAnswers()
    {
        $data = DB::table('given_answers')
            ->join('questions', 'given_answers.question_id', '=', 'questions.id')
            ->join('question_sets', 'questions.question_set_id', '=', 'question_sets.id')
            ->join('answers', 'given_answers.answer_id', '=', 'answers.id')
            ->select('given_answers.name as username', 'given_answers.phone as phone', 'given_answers.email as email', 'given_answers.created_at as created_at', 'question_sets.id as questionset_id', 'question_sets.title as questionset_title')
            ->selectRaw('COUNT(CASE WHEN answers.is_correct THEN 1 END) as correct_answers')
            ->selectRaw('COUNT(given_answers.id) as total_answers')
            ->groupBy('given_answers.name', 'given_answers.phone', 'given_answers.created_at', 'given_answers.email', 'question_sets.id', 'question_sets.title')
            ->get();

        return view('vendor.backpack.crud.givenanswer.list', ['data' => $data]);
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(GivenAnswerRequest::class);
        CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function store()
    {
        $this->crud->hasAccessOrFail('create');

        $request = app(GivenAnswerRequest::class);

        $request = $this->crud->getRequest();

        $data = [
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'question_id' => $request['question_id'],
            'answer_id' => $request['answer_id'],
            'created_at' => now(),
        ];

        // Create given answer
        GivenAnswer::create($data);

        // Define the path to the JSON file
        $filePath = Storage::disk('local')->path('/public/given_answers.json');

        $json = [];

        // Check if the file exists and read its contents
        if (file_exists($filePath)) {
            $json = json_decode(file_get_contents($filePath), true);
        }

        // Append the new data
        $json[] = $data;
        file_put_contents($filePath, json_encode($json, JSON_PRETTY_PRINT));

        return $this->crud->performSaveAction('create');
    }
}
