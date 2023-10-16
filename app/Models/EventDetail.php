<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventDetail extends Model
{
    use CrudTrait;
    use HasFactory;
    use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'event_details';
    protected $guarded = ['id'];

    const SELECT_COL_ONE = 1;
    const SELECT_COL_TWO = 2;
    const SELECT_COL_THREE = 3;
    const SELECT_COL_FOUR = 4;

    const SELECT_COL_CHOICE = [
        self::SELECT_COL_ONE => self::SELECT_COL_ONE,
        self::SELECT_COL_TWO => self::SELECT_COL_TWO,
        self::SELECT_COL_THREE => self::SELECT_COL_THREE,
        self::SELECT_COL_FOUR => self::SELECT_COL_FOUR
    ];


    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    protected static function booted(): void
    {
        static::deleted(function (Model $model) {
            foreach ($model->event_detail_cols as $item) {
                $item->delete();
            }
        });
    }

    public function getCol()
    {
        return 12 / $this->total_col;
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }

    public function event_detail_cols()
    {
        return $this->hasMany(EventDetailCol::class, 'event_detail_id', 'id');
    }

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
