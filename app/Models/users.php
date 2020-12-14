<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = "users";
    protected $primaryKey = 'email';

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function order(){
        return $this->hasMany('App\order', 'email', 'email');
    }
}
