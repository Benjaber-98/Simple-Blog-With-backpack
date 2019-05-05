<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PostRequest as StoreRequest;
use App\Http\Requests\PostRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class PostCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class PostCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Post');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/post');
        $this->crud->setEntityNameStrings('post', 'posts');

        $this->crud->addButtonFromModelFunction('line', 'open_google', 'openGoogle', 'end');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns

        $this->crud->addColumn([
            'name' => 'title',
            'label' => "Title"
        ]);

        $this->crud->addColumn([
            'name' => 'description',
            'label' => "Description"
        ]);

        $this->crud->addColumn([
            'name' => 'category_id',
            'label' => "Category name",
            'type' => 'select',
            'entity' => 'category',
            'attribute' => 'name',
            'model' => "App\Models\Category"
        ]);

        $this->crud->addField([
            'name' => 'title',
            'label' => "Post name",
            'type' => 'text'
        ]);

        $this->crud->addField([
            'name' => 'description',
            'label' => "Post Description",
            'type' => 'textarea',
        ]);

        $this->crud->addField([
            'name' => 'category_id',
            'label' => "Category name",
            'type' => 'select2',
            'entity' => 'category',
            'attribute' => 'name',
            'model' => "App\Models\Category"
        ]);

        // add asterisk for fields that are required in PostRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
