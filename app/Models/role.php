<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    /** @use HasFactory<\Database\Factories\RoleFactory> */
    use HasFactory;


    protected $fillable = [
        'stauts',
     
    ];

    public function users() {
        return $this->hasMany(User::class);
    }
}
