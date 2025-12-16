<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $fillable=[
        'title',
        'user_id',
        'current_weight',
        'target_weight',
        'activity',
        'age',
        'start_date',
        'days',
        'is_completed',
        'reference_id'
    ];

    public function calorie()
    {
        return $this->belongsTo(Calorie::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function reference()
    {
        return $this->belongsTo(Period::class, 'reference_id');
    }
}
