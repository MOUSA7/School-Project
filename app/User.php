<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','photo_id','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




    public function Role(){
        return $this->belongsTo('App\Role');
    }
    public function photo(){
        return $this->belongsTo('App\photo');
    }

    public function student(){
        return  $this->hasMany('App\Students');
    }

    public function subject(){
        return $this->belongsTo(Subjects::class);
    }
    public function classes(){
        return $this->belongsTo('App\classes');
    }

    public function notes(){
        return $this->hasMany(Notes::class);
    }
    public function std_details(){
        return $this->hasMany(StudentDetails::class);
    }

    public function isAdmin(){
        if ($this->role_id == 1 || $this->role_id == 2){
            return true;
        }
        return false;
    }



}
