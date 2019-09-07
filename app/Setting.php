<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'site_name',
        'contact_number',
        'contact_email',
        'contact_address',
        'contact_facebook',
        'contact_twitter',
        'contact_youtube',
        'about'
    ];
}
