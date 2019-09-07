<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fqa extends Model
{
    protected $fillable = ['question','user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
