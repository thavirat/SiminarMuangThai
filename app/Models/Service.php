<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $connection = 'mb2';

    public function Customer(){
        return $this->hasOne('\App\Models\Customer' , 'service_id' , 'id');
    }

    public function OrderDetail(){
        return $this->hasMany('\App\Models\OrderDetail' , 'service_id' , 'id');
    }
}
