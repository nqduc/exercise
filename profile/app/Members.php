<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $fillable = [
        'name', 'emaill', 'password', 'phone', 'address','image',
    ];

    public function tasks()

    {
        return $this->hasMany('Task::class');
    }

    public function project()

    {
        return $this->belongsToMany('Project::class', 'member_project');
    }
}
