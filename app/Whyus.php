<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Whyus extends Model
{
    protected $fillable = [];


    public function about()
    {
        return belongsTo(About::class);
    }
}
