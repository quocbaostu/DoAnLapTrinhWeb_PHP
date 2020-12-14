<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    protected $table = "order_detail";

    public function book(){
        return $this->belongsTo('App\book', 'book_id', 'order_id');
    }


    public function order(){
        return $this->belongsTo('App\order', 'order_id', 'order_id');
    }
}
