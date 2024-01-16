<?php

namespace App\models;
use Illuminate\Database\Eloquent\model;



class restaurant extends model
{
    protected $primaryKey = 'restaurant_id';
    protected $table = 'restaurant';
    protected $fillable = [
        'restaurant_id','restaurant_name','address','phone_number','owner_id'
    ];
    protected $hidden = [];

}