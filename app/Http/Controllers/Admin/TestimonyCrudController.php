<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TestimonyRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TestimonyCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TestimonyCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Testimony::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/testimony');
        CRUD::setEntityNameStrings('testimony', 'testimonies');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column([
            'name' => 'name', // The db column name
            'label' => "Nama", // Table column heading
            'type' => 'Text'
        ]);

        CRUD::column([
            'name' => 'description', // The db column name
            'label' => "Deskripsi", // Table column heading
            'type' => 'Text'
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
        CRUD::setValidation(TestimonyRequest::class);
        CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */

        CRUD::field([
            'name'      => 'name', // The db column name
            'label'     => 'Name', // Table column heading
            'type'      => 'text',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::field([
            'name'      => 'description', // The db column name
            'label'     => 'Description', // Table column heading
            'type'      => 'textarea',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::field('photo')
            ->type('upload')
            ->withFiles([
                'disk' => 'public', // the disk where file will be stored
                'path' => 'files', // the path inside the disk where file will be stored
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

        CRUD::setColumnDetails('photo', [
            'name'      => 'photo', // The db column name
            'label'     => 'Image', // Table column heading
            'type'      => 'image',
            'prefix' => 'storage/',
            'height' => '150px',
            'width'  => '150px',
        ]);
    }

    protected function setupDeleteOperation()
    {
        $this->setupCreateOperation();

        // Alternatively, if you are not doing much more than defining fields in your create operation:
        // $this->setupCreateOperation();
    }
}
