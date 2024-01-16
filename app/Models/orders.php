<?php

namespace App\models;
use Illuminate\Database\Eloquent\model;



class orders extends model
{
    protected $primaryKey = 'order_id';
    protected $table = 'orders';
    protected $fillable = [
        'order_id','table_number','order_date','total_amount','payment_status','restaurant_id'
    ];
    protected $hidden = [];

}