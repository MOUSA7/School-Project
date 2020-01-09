<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{

    protected $fillable=['user_id','FullName','age','address','father_ID','photo_id','class_id'];

    public function subject(){
        return $this->belongsToMany(Subjects::class);
    }

    public function classes(){
        return $this->belongsTo('App\classes','class_id');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function photo(){
        return $this->belongsTo('App\photo');
    }
    public function std_details(){
        return $this->hasMany(StudentDetails::class);
    }
    //
}
