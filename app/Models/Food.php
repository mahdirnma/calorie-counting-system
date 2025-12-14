<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'name',
        'calories',
        'is_active',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot(['date','weight']);
    }

}
