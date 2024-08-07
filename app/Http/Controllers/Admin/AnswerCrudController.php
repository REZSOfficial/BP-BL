<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AnswerRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AnswerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AnswerCrudController extends CrudController
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
        if (!backpack_user()->hasRole('admin')) {
            abort(403);
        }

        CRUD::setModel(\App\Models\Answer::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/answer');
        CRUD::setEntityNameStrings('válasz', 'válaszok');
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
            'name' => 'question_id',
            'type' => 'text',
            'label' => 'Kérdés',
            'entity' => 'question',
            'attribute' => 'question',
            'model' => "App\Models\Question",
        ]);

        CRUD::addColumn([
            'name' => 'answer',
            'type' => 'text',
            'label' => 'Válasz',
        ]);

        CRUD::addColumn([
            'name' => 'is_correct',
            'type' => 'checkbox',
            'label' => 'Helyes',
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
        CRUD::setValidation(AnswerRequest::class);

        CRUD::addField([
            'name' => 'question_id',
            'type' => 'select',
            'label' => 'Kérdés',
            'entity' => 'question',
            'model' => "App\Models\Question",
            'attribute' => 'question',
            'options'   => (function ($query) {
                return $query->orderBy('question', 'ASC')->get();
            }),
        ]);

        CRUD::addField([
            'name' => 'answer',
            'type' => 'text',
            'label' => 'Válasz',
        ]);

        CRUD::addField([
            'name' => 'is_correct',
            'type' => 'checkbox',
            'label' => 'Helyes',
            'options' => [
                '1' => 'Igen',
                '0' => 'Nem',
            ],
        ]);
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
}
