<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\Lesson;

class Test extends Model
{
    protected $fillable = [
        'lesson_id',
        'time',
        'point_need_pass',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class, 'test_id', 'id');
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'lessons_id', 'id');
    }
}
