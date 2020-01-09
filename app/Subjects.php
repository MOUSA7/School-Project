<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{

    protected $table = 'subjects';

    protected $fillable = ['name','user_id'];
    //

    public function student()
    {
        return $this->belongsToMany(Students::class);

    }
    //
}
