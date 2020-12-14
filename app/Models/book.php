<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table = "book";
    protected $primaryKey = 'book_id';

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function category(){
        return $this->belongsTo('App\category', 'cat_id', 'book_id');
    }

    public function publisher(){
        return $this->belongsTo('App\publisher', 'pub_id', 'book_id');
    }

    public function order_detail(){
        return $this->hasMany('App\order_detail', 'book_id', 'book_id');
    }


}
