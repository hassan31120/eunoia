<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded  = [  ];

    public function surveys(){
        return $this->belongsTo('App\Models\Survey');
    }

    public function answers(){
        return $this->belongsToMany('App\Models\Answer', 'questions_answers' , 'question_id', 'answer_id');
    }
}
