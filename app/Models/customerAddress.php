<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerAddress extends Model
{
  //  use HasFactory;
  protected $fillable = ['city', 'street'];

  public function Customers()
  {
    return $this->belongsTo('App\Models\Customers', 'customers_id');
  }
}
