<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
        'body',
        'likes',
        'user_id',
        'resource_id'
    ];

    public function resource(){
        return $this->belongsTo('App\Resource');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
