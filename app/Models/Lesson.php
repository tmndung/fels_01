<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Course;
use App\Models\Test;

class Lesson extends Model
{
    protected $fillable = [
        'course_id',
        'name',
        'content',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'checks', 'lessons_id', 'users_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_lesson', 'lessons_id', 'course_id');
    }

    public function tests()
    {
        return $this->hasMany(Test::class, 'lessons_id', 'id');
    }
}
