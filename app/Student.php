<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     *
     * The database table used by the model.
     *
     * @var string
     *
     *
     */

    protected $table = 'students';

    /**
     * A students belows to a 1 school
     *
     * Get the school that owns the student.
     * The name of the function is the SAME name as the
     * table
     */
    public function school()
    {
        return $this->belongsTo('App\School');
    }
}
