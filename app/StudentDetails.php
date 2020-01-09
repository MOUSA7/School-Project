<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentDetails extends Model
{
    protected $fillable = ['IsActive','grade','students_id','subject_id','semester','exam'];

    //

    public function student(){
        return $this->belongsTo(Students::class);
    }

    public function subject(){
        return $this->belongsTo(Subjects::class);
    }
}
