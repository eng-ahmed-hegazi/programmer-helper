<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['title','slug' ,'body', 'photo','language_id'];

    public function language(){
        return $this->belongsTo('App\Language');
    }
}
