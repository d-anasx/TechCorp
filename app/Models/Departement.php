<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Departement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Departement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Departement query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Departement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Departement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Departement whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Departement whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Departement extends Model
{
    protected $fillable = [
        'title',
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
