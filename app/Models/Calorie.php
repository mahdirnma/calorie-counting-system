<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calorie extends Model
{
    protected $fillable=[
        'user_id',
        'number_of_calories',
        'bmi'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
