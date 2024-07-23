<?php

namespace App\Http\Controllers\Admin;

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
            'label' => 'Questions',
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
        //CRUD::setFromDb(); // set columns from db columns.

        CRUD::column('title')->type('text');
        CRUD::column('description')->type('text');
        CRUD::column('active_from')->type('date');
        CRUD::column('active_to')->type('date');

        CRUD::addColumn([
            'name' => 'questions',
            'label' => 'Questions',
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
}
