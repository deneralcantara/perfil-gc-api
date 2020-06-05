<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserImage extends Authenticatable
{

    protected $table="user_image";

    protected $fillable = [
        'user_id', 'image_url',
    ];

}
