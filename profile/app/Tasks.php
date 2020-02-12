<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $fillable = [
        'name', 'description', 'start_time', 'finishe_time', 'project_id', 'task_status_if', 'member_id',
    ];

    public function member()
    {
        return $this->belongsTo('Customer::class');
    }

    public function project()
    {
        return $this->belongsTo('Project::class');
    }

    public function taskstatus()
    {
        return $this->belongsTo('TaskStatus::class');
    }
}
