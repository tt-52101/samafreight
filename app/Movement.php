<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    protected $guarded = [
        'created_at', 'updated_at'
    ];
}
