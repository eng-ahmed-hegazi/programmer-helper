<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable=['type'];

    public function resources(){
        return $this->hasMany('App\Resource');
    }
}
