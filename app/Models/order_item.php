<?php

namespace App\models;
use Illuminate\Database\Eloquent\model;



class order_item extends model
{
    protected $primaryKey = 'order_item_id';
    protected $table = 'order_item';
    protected $fillable = [
        'order_item_id','order_id','menu_id','quantity','subtotal'
    ];
    protected $hidden = [];

}