<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Admin extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function information()
    {
        return $this->belongsToMany(Information::class, 'admins', 'id');
    }

    public function skill()
    {
        return $this->hasMany(Skill::class);
    }

    public function education()
    {
        return $this->hasMany(Education::class);
    }

    protected $fillable = [
        'name', 
        'username',
        'password',
        'status',
        'country',
        'information_id',
        'skill_id',
        'education_id',
        'image'
    ];

    // public static function findByUsername($username)
    // {
    //     return self::where('username', $username)->first();
    // }
}
