<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $fillable = ['date', 'total_price', 'qty'];
    // use HasFactory;
    public function Customers()
    {
        return $this->belongsTo('App\Models\Customers', 'customers_id');
    }
    public function product()
    {
        return $this->belongsTo('App\Models\product', 'product_id');
    }
}
