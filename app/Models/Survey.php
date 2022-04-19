<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $guarded  = [  ];

    public function users(){
        return $this->belongsToMany('App\Models\User', 'users_surveys' , 'user_id', 'survey_id');
    }

    public function questions(){
        return $this->hasMany('App\Models\Question');
    }

    public function diseases(){
        return $this->belongsTo('App\Models\Disease');
    }
}
