<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [];

    public function compony()
    {
        return $this->hasbelongsTo(Company::class);
    }
}
