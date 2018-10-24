<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    protected $fillable = ['pName','mName','mEmail','fLink','image'];
}
