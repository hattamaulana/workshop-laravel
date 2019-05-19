<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    protected $table = 'crew';
    protected $fillable = [
      'name', 'email', 'phonenumber', 'position'
    ];
}
