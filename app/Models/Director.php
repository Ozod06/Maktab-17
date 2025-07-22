<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    // app/Models/Director.php
    protected $fillable = [
        'first_name_uz',
        'first_name_ru',
        'last_name_uz',
        'last_name_ru',
        'middle_name_uz',
        'middle_name_ru',
        'image',
        'position_id',
        'phone',
        'email',
        'work_time',
        'biography_uz',

    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }


}
