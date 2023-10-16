<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AboutRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AboutCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AboutCrudController extends CrudController
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
        CRUD::setModel(\App\Models\About::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/about');
        CRUD::setEntityNameStrings('Tentang Kami', 'Tentang Kami');
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
        CRUD::setValidation(AboutRequest::class);
        CRUD::setFromDb(); // set fields from db columns.

        CRUD::field([
            'label'         => 'Detail Penjelasan',
            'name'          => 'details',
            'type'          => "relationship",
            'subfields'   => [
                [
                    'label' => 'Judul',
                    'name' => 'title',
                    'type' => 'text',
                    'wrapper' => [
                        'class' => 'form-group col-md-6',
                    ],
                ],
                [
                    'label' => 'Deskripsi',
                    'name' => 'description',
                    'type' => 'text',
                    'wrapper' => [
                        'class' => 'form-group col-md-6',
                    ],
                ],
            ],
        ]);

        CRUD::field([
            'label' => 'Gambar',
            'name' => 'file',
            'type' => 'image',
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 0, // omit or set to 0 to allow any aspect ratio
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

        CRUD::field([
            'name'          => 'details',
            'type'          => "relationship",
            'subfields'   => [
                [
                    'name' => 'title',
                    'type' => 'text',
                    'wrapper' => [
                        'class' => 'form-group col-md-6',
                    ],
                ],
                [
                    'name' => 'description',
                    'type' => 'text',
                    'wrapper' => [
                        'class' => 'form-group col-md-6',
                    ],
                ],
            ],
        ]);

        CRUD::setColumnDetails('file', [
            'name'      => 'file', // The db column name
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
