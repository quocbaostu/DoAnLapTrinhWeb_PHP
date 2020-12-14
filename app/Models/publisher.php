<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
    protected $table = "publisher";
    protected $primaryKey = 'pub_id';

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function book(){
        return $this->hasMany('App\book', 'pub_id', 'pub_id');
    }
}
