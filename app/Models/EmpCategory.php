<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpCategory extends Model
{
    protected $guarded = [];

    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}
