<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $primaryKey = "id";
    protected $fillable = ['firstname','lastname','email','updated_at','created_at'];
 
}
