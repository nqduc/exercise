<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = [
        'name', 'description', 'start_time', 'finishe_time', 'project_status_id', 'customer_id', 'leader_id',
    ];

    public function customers()
    {
        return $this->belongsTo('Customer::class');
    }

    public function members()
    {
        return $this->belongsToMany('Member::class');
    }

    public function tasks()
    {
        return $this->hasMany('Task::class');
    }

    public function projectstatus()
    {
        return $this->belongsTo('ProjectStatus::class');
    }
}
