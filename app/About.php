<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable =[];

    public function employees()
    {
        return hasMany(Employee::class);
    }

    public function whyuses()
    {
        return hasMany(Whyus::class);
    }

    public function parteners()
    {
        return hasMany(Partener::class);
    }
}
