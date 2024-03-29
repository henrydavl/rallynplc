<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizPlay extends Model
{
    protected $fillable = [
        'quiz_id','user_id','try','is_right'
    ];

    public function quiz(){
        return $this->belongsTo('App\Quiz');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
