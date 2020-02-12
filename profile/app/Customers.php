<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [
        'name', 'email', 'image', 'phone','address',
    ];

    public function projects()
    {
        return $this->hasMany('Projects::class');
    }
}
