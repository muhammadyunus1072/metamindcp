<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TrainingRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TrainingCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TrainingCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\Pro\Http\Controllers\Operations\BulkDeleteOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Training::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/training');
        CRUD::setEntityNameStrings('training', 'trainings');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */

        CRUD::setColumnDetails('training_group_id', [
            // 1-n relationship
            'label'     => 'Training Group', // Table column heading
            'type'      => 'select',
            'name'      => 'training_group_id', // the column that contains the ID of that connected entity;
            'entity'    => 'training_group', // the method that defines the relationship in your Model
            'attribute' => 'title', // foreign key attribute that is shown to user
            'model'     => "App\Models\TrainingGroup", // foreign key model
        ]);

        // $this->crud->enableBulkActions();

        CRUD::setColumnDetails('file', [
            'name'      => 'file', // The db column name
            'label'     => 'Image', // Table column heading
            'type'      => 'image',
            'prefix' => 'storage/',
            'height' => '150px',
            'width'  => '150px',
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
        CRUD::setValidation(TrainingRequest::class);
        // CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */

        CRUD::field([
            // 1-n relationship
            'label'     => 'Training Group', // Table column heading
            'type'      => 'select2',
            'name'      => 'training_group_id', // the column that contains the ID of that connected entity;
            'entity'    => 'training_group', // the method that defines the relationship in your Model
            'attribute' => 'title', // foreign key attribute that is shown to user
            'model'     => "App\Models\TrainingGroup", // foreign key model
            'allows_null' => false
        ]);

        CRUD::field([
            'name'      => 'title', // The db column name
            'label'     => 'Title', // Table column heading
            'type'      => 'text',
        ]);

        CRUD::field([
            'name'      => 'description', // The db column name
            'label'     => 'Description', // Table column heading
            'type'      => 'textarea',
            'attributes' => [
                'rows' => 4
            ],
        ]);

        CRUD::field([
            'label' => 'Gambar',
            'name' => 'file',
            'type' => 'image',
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 1, // omit or set to 0 to allow any aspect ratio
            'withFiles' => true
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

    protected function setupShowOperation()
    {
        CRUD::setFromDb(); // set fields from db columns.

        CRUD::setColumnDetails('file', [
            'name'      => 'file', // The db column name
            'label'     => 'Image', // Table column heading
            'type'      => 'image',
            'prefix' => 'storage/',
            'height' => '150px',
            'width'  => '150px',
        ]);

        CRUD::setColumnDetails('training_id', [
            // 1-n relationship
            'label'     => 'Training', // Table column heading
            'type'      => 'select',
            'name'      => 'training_id', // the column that contains the ID of that connected entity;
            'entity'    => 'training', // the method that defines the relationship in your Model
            'attribute' => 'title', // foreign key attribute that is shown to user
            'model'     => "App\Models\Training", // foreign key model
        ]);
    }

    protected function setupDeleteOperation()
    {
        $this->setupCreateOperation();

        // Alternatively, if you are not doing much more than defining fields in your create operation:
        // $this->setupCreateOperation();
    }
}
