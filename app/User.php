<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Relaciones
    
    // Un usuario [teacher] dicta varios cursos
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    // Un usuario [student] puede estar inscrito en uno o varios cursos
    public function inscriptions()
    {
        return $this->belongsToMany(Course::class)->withPivot('qualification');
    }
}
