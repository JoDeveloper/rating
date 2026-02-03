<?php

namespace Jodeveloper\Rating\Test\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Jodeveloper\Rating\Contracts\Rating;
use Jodeveloper\Rating\Traits\CanBeRated;
use Jodeveloper\Rating\Traits\CanRate;

class User extends Authenticatable implements Rating
{
    use CanRate, CanBeRated;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
