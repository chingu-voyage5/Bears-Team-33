<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    //
    protected $casts = [
        'questions' => 'array',
    ];
    protected $fillable = ['title', 'questions', 'form_id','user_id'];

}
