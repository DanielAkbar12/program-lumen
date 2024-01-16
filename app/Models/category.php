<?php

namespace App\models;
use Illuminate\Database\Eloquent\model;



class category extends model
{
    protected $primaryKey = 'category_id';
    protected $table = 'category';
    protected $fillable = [
        'category_id','category_name'
    ];
    protected $hidden = [];

}