<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = ['name'];

    // Relaciones
    
    // Un curso es dictado por un [usuario] profesor
    public function teacher()
    {
    	return $this->belongsTo(User::class);
    }
}
