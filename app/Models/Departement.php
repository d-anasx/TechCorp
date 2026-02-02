<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable = [
        'title',
        'user_id'
    ];

    public function employees()
    {
        return $this->hasMany(User::class)->whereHas('roles', function ($query) {
            $query->where('status', 'employee');
        });
    }
        public function manager()
    {
        return $this->belongsTo(User::class)->whereHas('roles', function ($query) {
            $query->where('status', 'manager');
        });
    }
}
