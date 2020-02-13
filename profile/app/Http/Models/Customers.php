<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [
        'name', 'email', 'image', 'phone','address',
    ];

    public function project()
    {
        return $this->hasMany(Projects::class);
    }
}
