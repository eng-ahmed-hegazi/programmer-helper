<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = [
        'name',
        'description',
        'url',
        'type_id',
        'slug',
        'language_id'
    ];

    public function language(){
        return $this->belongsTo('App\Language');
    }

    public function rates(){
        return $this->hasMany('App\Rate');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function type(){
        return $this->belongsTo('App\Type');
    }
}
