<?php

namespace App\models;
use Illuminate\Database\Eloquent\model;



class owner extends model
{
    protected $primaryKey = 'owner_id';
    protected $table = 'owner';
    protected $fillable = [
        'owner_id','owner_name','email','phone_number'
    ];
    protected $hidden = [];

}