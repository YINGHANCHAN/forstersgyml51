<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    /*
     * The database table used by the model.
     *
     *@return void
     */

    protected $table = 'schools';

    /**
     * A school has many students
     * The name of the function is the SAME name as the
     * table
     */

    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
