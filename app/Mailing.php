<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mailing extends Model
{
    protected $fillable = [
        'name', 'email','cat_id'
    ];
}
