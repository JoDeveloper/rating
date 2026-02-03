<?php

namespace Jodeveloper\Rating\Test\Models;

use Illuminate\Database\Eloquent\Model;
use Jodeveloper\Rating\Contracts\Rating;
use Jodeveloper\Rating\Traits\CanBeRated;
use Jodeveloper\Rating\Traits\CanRate;

class Page extends Model implements Rating
{
    use CanRate, CanBeRated;

    protected $fillable = [
        'name',
    ];
}
