<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use HasFactory;

    protected $fillable = [
        'role'
    ];

    public function data(){
        return $this->hasOne('App/Models/datosPersonales');
    }

    public function status(){
        return $this->hasOne('App/Models/estado');
    }

    public function requests()
    {
        return $this->hasMany('App\Models\solicitudes');
    }
}
