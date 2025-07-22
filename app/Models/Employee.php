<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name_uz', 'name_ru', 'email', 'phone', 'img',
        'work_time', 'emp_category_id', 'position_id',
    ];


    public function empcategory()
    {
        return $this->belongsTo(Empcategory::class, 'emp_category_id');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
}
