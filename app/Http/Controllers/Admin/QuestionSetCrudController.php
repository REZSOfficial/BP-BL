<?php

namespace App\Http\Controllers\Admin;

use App\Models\Answer;
use App\Models\Question;
use App\Models\QuestionSet;
use App\Http\Requests\QuestionSetRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class QuestionSetCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class QuestionSetCrudController extends CrudController
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
        CRUD::setModel(\App\Models\QuestionSet::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/question-set');
        CRUD::setEntityNameStrings('question set', 'question sets');

        CRUD::setListView('vendor.backpack.crud.questionset.list');
        CRUD::setShowView('vendor.backpack.crud.questionset.show');
    }

    protected function setupShowOperation()
    {
        $this->autoSetupShowOperation();

        CRUD::addColumn([
            'name' => 'questions',
            'label' => 'Kérdések',
            'type' => 'custom_question_table',
        ]);
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('title')->type('text')->label('Név');
        CRUD::column('description')->type('text')->label('Leírás');
        CRUD::column('active_from')->type('date')->label('Aktív ettől');
        CRUD::column('active_to')->type('date')->label('Aktív eddig');

        CRUD::addColumn([
            'name' => 'questions',
            'label' => 'Kérdések',
            'type' => 'custom_question_column',
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(QuestionSetRequest::class);

        CRUD::field('title')->label('Cím');
        CRUD::field('description')->label('Leírás');
        CRUD::field('active_from')->label('Aktív ettől')->type('date');
        CRUD::field('active_to')->label('Aktív eddig')->type('date');

        CRUD::addField([
            'name' => 'questions',
            'type' => 'questions',
            'label' => 'Kérdések'
        ]);

        CRUD::setValidation(QuestionSetRequest::class);
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

        $request = app(QuestionSetRequest::class);
        $request = $this->crud->getRequest();

        $questionsData = $request->get('questions', []);

        // Create question set
        $questionSet = QuestionSet::create([
            'title' => $request->title,
            'description' => $request->description,
            'active_from' => $request->active_from,
            'active_to' => $request->active_to,
        ]);

        // Create questions and answers
        $this->saveQuestions($questionSet->id, $questionsData);

        return $this->crud->performSaveAction('create');
    }

    protected function saveQuestions($questionSetId, $questionsData)
    {
        // Create new questions and answers
        foreach ($questionsData as $questionData) {
            $question = Question::create([
                'question_set_id' => $questionSetId,
                'question' => $questionData['question'],
            ]);

            foreach ($questionData['answers'] as $answerData) {
                Answer::create([
                    'question_id' => $question->id,
                    'answer' => $answerData['answer'],
                    'is_correct' => isset($answerData['is_correct']) ? 1 : 0,
                ]);
            }
        }
    }
}
