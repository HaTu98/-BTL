<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criterion extends Model
{
    protected $fillable = [
        'id', 'name','type',
    ];
}
