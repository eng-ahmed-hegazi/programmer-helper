<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'name', 'description', 'category_id'
    ];
    public function resources(){
        return $this->hasMany('App\Resource');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
    public function articles(){
        return $this->hasMany('App\Contact');
    }
    public function interviews(){
        return $this->hasMany('App\Interview');
    }

}
