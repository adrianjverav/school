<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = ['name'];

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
