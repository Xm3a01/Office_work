<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'ar_name',
        'email',
        'password',
        'role',
        'ar_role',
        'country',
        'sub_special',
        'ar_sub_special',
        'salary',
        'ar_brith',
        'brith',
        'salary_type',
        'ar_country',
        'city',
        'ar_city',
        'phone',
        'level_of_work',
        'ar_level_of_work',
        'visit_count',
        'available'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function owner()
    {
        return $this->hasbelongsTo(Owner::class);
    }

    public function exps()
    {
        return $this->hasMany(Exp::class);
    }
}
