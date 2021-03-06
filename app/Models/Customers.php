<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = ['cname', 'phone', 'email'];
    // use HasFactory;
    public function customerAddress()
    {
        return $this->hasMany('App\Models\customerAddress', 'customers_id');
    }
    public function Orders()
    {
        return $this->hasMany('App\Models\Orders');
    }

}
