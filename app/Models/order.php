<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = "order";


    public function order_detail(){
        return $this->hasMany('App\order_detail', 'order_id', 'order_id');
    }

    public function users(){
        return $this->belongsTo('App\users', 'email', 'order_id');
    }
}
