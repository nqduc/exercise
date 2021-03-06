<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $fillable = [
        'name', 'description', 'start_time', 'finishe_time', 'project_id', 'task_status_id', 'member_id',
    ];

    public function member()
    {
        return $this->belongsTo(Members::class);
    }

    public function project()
    {
        return $this->belongsTo(Projects::class);
    }

    public function taskStatus()
    {
        return $this->belongsTo(TaskStatus::class);
    }
}
