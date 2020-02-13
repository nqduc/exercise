<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Members extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'address','image',
    ];

    public function tasks()
    {
        return $this->hasMany(Tasks::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Projects::class, 'member_project');
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
