<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{

    protected $fillable = ['pname', 'price'];

    // use HasFactory;

    public function Orders()
    {
        return $this->hasMany('App\Models\Orders');
    }
    public function productOwner()
    {
        return $this->belongsTo('App\Models\productOwner', 'owner_id');
    }
}
