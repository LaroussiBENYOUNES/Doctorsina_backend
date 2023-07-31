<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department_user extends Model
{
    protected $fillable = [
        'department_id','user_id'
    ];
    protected $table = 'department_user';
    
    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function doctors(){
        return $this->belongsToMany(User::class)->Doctor();
    }

    public function patients(){
        return $this->belongsToMany(User::class)->Patient();
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function beds(){
        return $this->hasMany(Bed::class);
    }
}
