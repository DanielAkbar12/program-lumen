<?php

namespace App\models;
use Illuminate\Database\Eloquent\model;



class menu extends model
{
    protected $primaryKey = 'menu_id';
    protected $table = 'menu';
    protected $fillable = [
        'menu_id','menu_name','description','price','category_id'
    ];
    protected $hidden = [];

}