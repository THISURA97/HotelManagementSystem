<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model

{
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'phoneNumber',
        'date',
        'month',
        'year',
        'gender',
    ];
}
