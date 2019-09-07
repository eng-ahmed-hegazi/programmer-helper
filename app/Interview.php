<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $fillable=[
        'question',
        'answer',
        'language_id'
    ];

    public function language(){
        return $this->belongsTo('App\Language');
    }
}
