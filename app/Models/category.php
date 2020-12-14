<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = "category";
    protected $primaryKey = 'cat_id';

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function book(){
        return $this->hasMany('App\book', 'cat_id', 'cat_id');
    }
}
