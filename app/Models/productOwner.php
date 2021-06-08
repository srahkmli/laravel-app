<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productOwner extends Model
{
    protected $fillable = ['owner_name', 'phone', 'email'];

    // use HasFactory;

    public function product()
    {
        return $this->hasMany('App\Models\product', 'owner_id');
    }
}
