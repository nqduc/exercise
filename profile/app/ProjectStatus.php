<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project_status extends Model
{
    protected $fillable = [
        'name'
    ];

    public function projects()
    {
        return $this->hasMany('project::class');
    }
}
