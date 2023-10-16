<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EventRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class EventCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class EventCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Event::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/event');
        CRUD::setEntityNameStrings('event', 'events');
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

        CRUD::column([
            'label'     => 'Training', // Table column heading
            'name'      => 'training_id', // the column that contains the ID of that connected entity;
            'entity'    => 'training', // the method that defines the relationship in your Model
            'attribute' => 'title', // foreign key attribute that is shown to user
            'model'     => "App\Models\Training", // foreign key model
        ]);

        CRUD::column([
            // 1-n relationship
            'label'     => 'Trainer', // Table column heading
            'name'      => 'trainer_id', // the column that contains the ID of that connected entity;
            'entity'    => 'trainer', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "App\Models\Trainer", // foreign key model
        ]);

        CRUD::column([
            'name' => 'date_start', // The db column name
            'label' => "Tanggal Mulai", // Table column heading
            'type' => 'date'
        ]);
        CRUD::column([
            'name' => 'date_end', // The db column name
            'label' => "Tanggal Selesai", // Table column heading
            'type' => 'date'
        ]);


        CRUD::column([
            'name' => 'time_start', // The db column name
            'label' => "Waktu Mulai", // Table column heading
            'type' => 'date'
        ]);
        CRUD::column([
            'name' => 'time_end', // The db column name
            'label' => "Waktu Selesai", // Table column heading
            'type' => 'date'
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
        CRUD::setValidation(EventRequest::class);
        // CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */

        CRUD::field([
            // 1-n relationship
            'label'     => 'Training', // Table column heading
            'type'      => 'select2',
            'name'      => 'training_id', // the column that contains the ID of that connected entity;
            'entity'    => 'training', // the method that defines the relationship in your Model
            'attribute' => 'title', // foreign key attribute that is shown to user
            'model'     => "App\Models\Training", // foreign key model
            'wrapper' => ['class' => 'form-group col-md-6'],
            'allows_null' => false
        ]);

        CRUD::field([
            // 1-n relationship
            'label'     => 'Trainer', // Table column heading
            'type'      => 'select2',
            'name'      => 'trainer_id', // the column that contains the ID of that connected entity;
            'entity'    => 'trainer', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "App\Models\Trainer", // foreign key model
            'wrapper' => ['class' => 'form-group col-md-6'],
            'allows_null' => false
        ]);

        CRUD::field([
            'name'      => 'title', // The db column name
            'label'     => 'Judul', // Table column heading
            'type'      => 'text',
            'wrapper' => ['class' => 'form-group col-md-12'],
        ]);

        CRUD::field([
            'name'      => 'subtitle', // The db column name
            'label'     => 'Sub Judul', // Table column heading
            'type'      => 'text',
            'wrapper' => ['class' => 'form-group col-md-12'],
        ]);

        CRUD::field([
            'name'      => 'venue', // The db column name
            'label'     => 'Lokasi', // Table column heading
            'type'      => 'text',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::field([
            'name'      => 'quota', // The db column name
            'label'     => 'Quota', // Table column heading
            'type'      => 'number',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::field([
            'name'      => 'date_start', // The db column name
            'label'     => 'Tanggal Mulai', // Table column heading
            'type'      => 'date',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::field([
            'name'      => 'date_end', // The db column name
            'label'     => 'Tanggal Selesai', // Table column heading
            'type'      => 'date',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::field([
            'name'      => 'time_start', // The db column name
            'label'     => 'Waktu Mulai', // Table column heading
            'type'      => 'time',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::field([
            'name'      => 'time_end', // The db column name
            'label'     => 'Waktu Selesai', // Table column heading
            'type'      => 'time',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::field([
            'name'      => 'description', // The db column name
            'label'     => 'Description', // Table column heading
            'type'      => 'textarea',
            'wrapper' => ['class' => 'form-group col-md-12'],
        ]);

        CRUD::field([
            'name'      => 'btn_text', // The db column name
            'label'     => 'Tombol Registrasi (Tulisan)', // Table column heading
            'type'      => 'text',
            'default'    => 'Registrasi',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::field([
            'name'      => 'btn_url', // The db column name
            'label'     => 'Tombol Registrasi (URL)', // Table column heading
            'type'      => 'text',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::field([   // CustomHTML
            'name'  => 'separator',
            'type'  => 'custom_html',
            'value' => "<a class='btn btn-info text-white' target='_blank' href='https://join.chat/en/whatsapp-link/'>Klik Disini Untuk Membuat Link WA</a>"
        ]);

        CRUD::field([
            'label' => 'Gambar',
            'name' => 'file',
            'type' => 'image',
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 2, // omit or set to 0 to allow any aspect ratio
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

        CRUD::setColumnDetails('trainer_id', [
            // 1-n relationship
            'label'     => 'Trainer', // Table column heading
            'type'      => 'select',
            'name'      => 'trainer_id', // the column that contains the ID of that connected entity;
            'entity'    => 'trainer', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "App\Models\Trainer", // foreign key model
        ]);
    }

    protected function setupDeleteOperation()
    {
        $this->setupCreateOperation();

        // Alternatively, if you are not doing much more than defining fields in your create operation:
        // $this->setupCreateOperation();
    }
}
