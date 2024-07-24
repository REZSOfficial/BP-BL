<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\QuestionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class QuestionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class QuestionCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Question::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/question');
        CRUD::setEntityNameStrings('question', 'questions');

        CRUD::setCreateView('vendor.backpack.crud.question.create');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn([
            'label' => "Kérdéssor",
            'type' => "select",
            'name' => 'quesiton_set_id',
            'entity' => 'questionSet',
            'attribute' => "title",
            'model' => "App\Models\QuestionSet",
        ]);

        CRUD::addColumn([
            'name' => 'question',
            'type' => 'Kérdés',
            'label' => 'Question',
        ]);

        CRUD::addColumn([
            'name' => 'answers',
            'label' => 'Válaszok',
            'type' => 'custom_answer_column',
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
        CRUD::setValidation(QuestionRequest::class);

        CRUD::addField([
            'name' => 'question_set_id',
            'type' => 'select',
            'label' => 'Question Set',
            'entity' => 'questionset',
            'model' => "App\Models\QuestionSet",
            'attribute' => 'title',
            'options'   => (function ($query) {
                return $query->orderBy('title', 'ASC')->get();
            }),
        ]);

        CRUD::field([
            'name' => 'question',
            'type' => 'text',
            'label' => 'Question',
        ]);
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
}
