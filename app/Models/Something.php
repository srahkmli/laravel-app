<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Something extends Model
{
    //  use HasFactory;
    public function Customers()
    {
        return $this->belongsTo('App\Models\Customers', 'customers_id');
    }
    public function product()
    {
        return $this->belongsTo('App\Models\product', 'product_id');
    }
}
