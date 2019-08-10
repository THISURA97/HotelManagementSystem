<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'FirstName',
        'LastName',
        'NIC',
        'Mobile',
        'Email',
    ];
}