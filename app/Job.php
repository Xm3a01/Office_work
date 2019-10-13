<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
