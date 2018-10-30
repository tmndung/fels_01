<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Lesson;
use App\Models\Category;

class Course extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'rank',
        'picture',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_course', 'course_id', 'users_id');
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class, 'course_lesson', 'course_id', 'lessons_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
