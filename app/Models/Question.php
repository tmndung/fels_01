<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Test;
use App\Models\Answer;

class Question extends Model
{
    protected $fillable = [
        'test_id',
        'content',
        'answers',
    ];

    public function test()
    {
        return $this->belongsTo(Test::class, 'lessons_id', 'id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_id', 'id');
    }
}
