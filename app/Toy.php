<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    protected $fillable = [
        'name', 'color'
    ];
}
