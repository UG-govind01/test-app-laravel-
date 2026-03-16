<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class registion extends Model
{
    protected $table = 'registions';
protected $fillable = ['name', 'email', 'password'];
}
