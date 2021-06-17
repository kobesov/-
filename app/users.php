<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
        public $timestamps = false;
    public $fillabel=
    [
        "names",
        "sekond_name",
        "login",
        "password",
    ];

    public $hidden=
    [
        "password",
        "api_token",
    ];
}
