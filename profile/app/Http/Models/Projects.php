<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = [
        'name', 'description', 'start_time', 'finishe_time', 'project_status_id', 'customer_id', 'leader_id',
    ];

    public function customers()
    {
        return $this->belongsTo(Customers::class);
    }

    public function members()
    {
        return $this->belongsToMany(Members::class);
    }

    public function tasks()
    {
        return $this->hasMany(Tasks::class);
    }

    public function projectstatus()
    {
        return $this->belongsTo(ProjectStatus::class);
    }
}
