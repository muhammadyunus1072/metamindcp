<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ServiceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ServiceCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Service::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/service');
        CRUD::setEntityNameStrings('Service', 'Services');
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
            'name' => 'title', // The db column name
            'label' => "Judul", // Table column heading
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
        CRUD::setValidation(ServiceRequest::class);

        CRUD::field([
            'name'      => 'title', // The db column name
            'label'     => 'Judul', // Table column heading
            'type'      => 'text',
        ]);

        CRUD::field([
            'label'     => 'Deskripsi', // Table column heading
            'name'      => 'description', // The db column name
            'type'      => 'ckeditor',
            'custom_build' => [
                resource_path('assets/ckeditor/ckeditor.js'),
                resource_path('assets/ckeditor/ckeditor-init.js'),
            ],
        ]);

        CRUD::field([
            'name'      => 'description_banner', // The db column name
            'label'     => 'Deskripsi Pada Banner', // Table column heading
            'type'      => 'textarea',
            'attributes' => [
                'rows' => 4,
            ],
        ]);

        CRUD::field([
            'label'     => 'URL Informasi Konten', // Table column heading
            'name'      => 'url_service_content', // The db column name
            'type'      => 'textarea',
        ]);

        CRUD::field([
            'label' => 'Banner',
            'name' => 'file',
            'type' => 'image',
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 2, // omit or set to 0 to allow any aspect ratio
            'withFiles' => true
        ]);


        CRUD::field([
            'label' => 'Thumbnail',
            'name' => 'thumbnail',
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
            'label'     => 'Banner Image', // Table column heading
            'type'      => 'image',
            'prefix' => 'storage/',
            'height' => '150px',
            'width'  => '150px',
        ]);

        CRUD::setColumnDetails('thumbnail', [
            'label'     => 'Thumbnail', // Table column heading
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
