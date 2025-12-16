<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calorie extends Model
{
    protected $fillable=[
        'period_id',
        'number_of_calories',
        'bmr'
    ];
    public function period(){
        return $this->belongsTo(Period::class);
    }
}
