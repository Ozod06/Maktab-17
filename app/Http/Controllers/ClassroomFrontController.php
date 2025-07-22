<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomFrontController extends Controller
{
    public function show($id)
    {
        $class = Classroom::findOrFail($id);
        return view('section.classSchedule', compact('class'));
    }
}
