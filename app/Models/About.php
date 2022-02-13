<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{

    protected $fillable = [
        'name', 'text', 'link', 'image', 'is_visible'
    ];

    protected $hidden = [

    ];
}
