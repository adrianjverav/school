<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = ['name'];

    // Métodos
    
    public static function getCourses($user)
    {
        if ($user->role == 'admin') {
            return Course::all();
        } else if ($user->role == 'student') {
            return $user->inscriptions;
        } else {
            return $user->courses;
        }
    }

    // Relaciones
    
    // Un curso es dictado por un [student] profesor
    public function teacher()
    {
    	return $this->belongsTo(User::class);
    }

    // Un curso tiene inscrito a muchos usuarios [student]
    public function students()
    {
    	return $this->belongsToMany(User::class);
    }
}
