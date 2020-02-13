<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $fillable = [
        'name', 'emaill', 'password', 'phone', 'address','image',
    ];

    public function tasks()
    {
        return $this->hasMany(Tasks::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Projects::class, 'member_project');
    }
}
