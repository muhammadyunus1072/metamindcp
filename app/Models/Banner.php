<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use CrudTrait;
    use HasFactory;
    use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'banners';
    protected $guarded = ['id'];

    const SELECT_TYPE_HOME = "Home Page";
    const SELECT_TYPE_EVENT = "Event Page";
    const SELECT_TYPE_OUR_SERVICE = "Our Service Page";

    const SELECT_TYPE_CHOICE = [
        self::SELECT_TYPE_HOME => self::SELECT_TYPE_HOME,
        self::SELECT_TYPE_EVENT => self::SELECT_TYPE_EVENT,
        self::SELECT_TYPE_OUR_SERVICE => self::SELECT_TYPE_OUR_SERVICE,
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
