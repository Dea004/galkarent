<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    
    protected $guarded = [
        'id'
    ];

    public function admin(){
        return $this->belongsToMany(Admin::class, 'skills', 'id', 'admin_id');
    }
}
