<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exp extends Model
{
    protected $fillable = [];

    function user() {
        return $this->belongsTo(User::class);
    }
}
