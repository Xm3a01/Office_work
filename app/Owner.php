<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Owner extends Authenticatable
{
    use Notifiable;


    protected $guard = 'owner';
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
        'phone',
        'visit_count',
        'company_name',
        'company_ar_name',
        'logo',
        'description',
        'ar_description', 
        'role',
        'ar_role',
        'ar_country',
        'company_email'

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


    public function users()
    {
        return $this->hasMany(User::class);
    }
}