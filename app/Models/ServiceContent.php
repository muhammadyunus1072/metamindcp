<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceContent extends Model
{
    use CrudTrait;
    use HasFactory;
    use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'service_contents';
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

    const TYPE_IMAGE_WITH_TEXT = 1;
    const TYPE_IMAGE_WITHOUT_TEXT = 2;
    const TYPE_NO_IMAGE_WITH_TEXT_DETAIL = 3;
    const TYPE_NO_IMAGE_WITHOUT_TEXT_DETAIL = 4;

    const IMAGE_POSITION_LEFT = "Left";
    const IMAGE_POSITION_RIGHT = "Right";
    const IMAGE_POSITION_CHOICE = [
        self::IMAGE_POSITION_LEFT => self::IMAGE_POSITION_LEFT,
        self::IMAGE_POSITION_RIGHT => self::IMAGE_POSITION_RIGHT,
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    protected static function booted(): void
    {
        static::deleted(function (Model $model) {
            foreach ($model->service_content_cols as $item) {
                $item->delete();
            }
        });
    }

    public function getCol()
    {
        return 12 / $this->total_col;
    }

    public function getType()
    {
        if (!empty($this->image)) {
            if (!empty($this->title) || !empty($this->description)) {
                return self::TYPE_IMAGE_WITH_TEXT;
            } else {
                return self::TYPE_IMAGE_WITHOUT_TEXT;
            }
        } else {
            if (count($this->service_content_cols) > 0) {
                return self::TYPE_NO_IMAGE_WITH_TEXT_DETAIL;
            } else {
                return self::TYPE_NO_IMAGE_WITHOUT_TEXT_DETAIL;
            }
        }
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    public function service_content_cols()
    {
        return $this->hasMany(ServiceContentCol::class, 'service_content_id', 'id');
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
