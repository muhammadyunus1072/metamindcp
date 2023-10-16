<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EventDetailRequest;
use App\Models\EventDetail;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class EventDetailCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class EventDetailCrudController extends CrudController
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
        CRUD::setModel(\App\Models\EventDetail::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/event-detail');
        CRUD::setEntityNameStrings('Event Content', 'Event Content');
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
            // 1-n relationship
            'label'     => 'Event', // Table column heading
            'name'      => 'event_id', // the column that contains the ID of that connected entity;
            'entity'    => 'event', // the method that defines the relationship in your Model
            'attribute' => 'title', // foreign key attribute that is shown to user
            'model'     => "App\Models\Event", // foreign key model
        ]);

        CRUD::column([
            'name'  => 'position',
            'label'  => 'Posisi',
        ]);

        CRUD::column([
            'name'  => 'title',
            'label'  => 'Judul',
        ]);

        CRUD::column([
            'name'  => 'subtitle',
            'label'  => 'Sub Judul',
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
        CRUD::setValidation(EventDetailRequest::class);

        CRUD::field([
            // 1-n relationship
            'label'     => 'Event', // Table column heading
            'type'      => 'select2',
            'name'      => 'event_id', // the column that contains the ID of that connected entity;
            'entity'    => 'event', // the method that defines the relationship in your Model
            'attribute' => 'title', // foreign key attribute that is shown to user
            'model'     => "App\Models\Event", // foreign key model
        ]);

        CRUD::field([
            'name'  => 'position',
            'type'  => 'number',
            'label' => 'Posisi',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::field([
            'name'  => 'bg_color',
            'type'  => 'color',
            'label' => 'Warna Background',
            'default' => '#ffffff',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::field([
            'name'      => 'title', // The db column name
            'label'     => 'Judul', // Table column heading
            'type'      => 'text',
            'wrapper' => ['class' => 'form-group col-md-8'],
        ]);
        CRUD::field([
            'name'  => 'title_color',
            'type'  => 'color',
            'label' => 'Warna Tulisan Judul',
            'default' => '#000000',
            'wrapper' => ['class' => 'form-group col-md-4'],
        ]);

        CRUD::field([
            'name'      => 'subtitle', // The db column name
            'label'     => 'Sub Judul', // Table column heading
            'type'      => 'text',
            'wrapper' => ['class' => 'form-group col-md-8'],
        ]);
        CRUD::field([
            'name'  => 'subtitle_color',
            'type'  => 'color',
            'label' => 'Warna Tulisan Sub Judul',
            'default' => '#000000',
            'wrapper' => ['class' => 'form-group col-md-4'],
        ]);

        CRUD::field([
            'name'      => 'description', // The db column name
            'label'     => 'Deskripsi', // Table column heading
            'type'      => 'textarea',
            'attributes' => [
                'rows' => 4,
            ],
            'wrapper' => ['class' => 'form-group col-md-8'],
        ]);
        CRUD::field([
            'name'  => 'description_color',
            'type'  => 'color',
            'label' => 'Warna Tulisan Deskripsi',
            'default' => '#000000',
            'wrapper' => ['class' => 'form-group col-md-4'],
        ]);

        CRUD::field([
            'name'  => 'poin_color',
            'type'  => 'color',
            'label' => 'Warna Tulisan Poin',
            'default' => '#000000',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::field([
            'label' => 'Total Kolom Poin Penjelasan',
            'name' => 'total_col',
            'type' => 'select_from_array',
            'options' => EventDetail::SELECT_COL_CHOICE,
            'default' => 1,
            'allows_null' => false,
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);

        CRUD::field([
            'label' => 'Poin-Poin Penjelasan',
            'name' => 'event_detail_cols',
            'type' => 'relationship',
            'subfields' => [
                [
                    'label' => 'Judul',
                    'name' => 'title',
                    'type' => 'text',
                ],
                [
                    'label' => 'Deskripsi',
                    'name' => 'content',
                    'type' => 'textarea',
                    'attributes' => [
                        'rows' => 4,
                    ],
                ],
            ],
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

        CRUD::setColumnDetails('event_id', [
            // 1-n relationship
            'label'     => 'Event', // Table column heading
            'type'      => 'select',
            'name'      => 'event_id', // the column that contains the ID of that connected entity;
            'entity'    => 'event', // the method that defines the relationship in your Model
            'attribute' => 'title', // foreign key attribute that is shown to user
            'model'     => "App\Models\Event", // foreign key model
        ]);

        CRUD::setColumnDetails('bg_color', [
            'name'  => 'bg_color',
            'type'  => 'color',
            'label' => 'Background Color',
            // OPTIONALS
            'showColorHex' => true //show or hide hex code
        ]);

        CRUD::setColumnDetails('total_col', [
            'name'  => 'total_col',
            'type'  => 'number',
            'label' => 'Total Column',
        ]);
    }

    protected function setupDeleteOperation()
    {
        $this->setupCreateOperation();

        // Alternatively, if you are not doing much more than defining fields in your create operation:
        // $this->setupCreateOperation();
    }
}
