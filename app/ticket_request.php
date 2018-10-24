<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket_request extends Model
{
    protected $fillable = ['departure','destination','depDate','desDate','trip','name','email','phone','person'];
}
