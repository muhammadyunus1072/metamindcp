<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
    use CrudTrait;
    use HasFactory;
    use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'trainings';
    protected $guarded = ['id'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function getNearestEvent()
    {
        $today = Carbon::now()->format('Y-m-d');
        return $this->events()->where('date_end', '>=', $today)->orderBy('date_start', 'asc')->first();
    }


    public function getTitle()
    {
        $explodeString = explode(' ', $this->title);
        $result = [];
        foreach ($explodeString as $str) {
            if (mb_strtoupper($str, 'utf-8') == $str) {
                array_push($result, $str);
            }
        }

        return implode(" ", $result);
    }

    public function getSubtitle()
    {
        $explodeString = explode(' ', $this->title);
        $result = [];
        foreach ($explodeString as $str) {
            if (mb_strtoupper($str, 'utf-8') != $str) {
                array_push($result, $str);
            }
        }

        return implode(" ", $result);
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function training_group()
    {
        return $this->belongsTo(TrainingGroup::class, 'training_group_id', 'id');
    }

    public function events()
    {
        return $this->hasMany(Event::class, 'training_id', 'id');
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
