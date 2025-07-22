<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Director;
use App\Models\Employee;
use App\Models\Statistic;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statistics = Statistic::all();
        return view('admin.statistic.index', compact('statistics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('admin.statistic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'class_count'    => 'required|integer',
            'student_count'  => 'required|integer',
            'graduate_count' => 'required|integer',
        ]);

        // Faqat 'O‘qituvchi' lavozimiga ega xodimlar soni
        $teacherCount = Employee::whereHas('position', function ($q) {
            $q->where('name_uz', 'like', '%O\'qituvchi%');
        })->count();

        Statistic::create([
            'class_count'    => $request->class_count,
            'student_count'  => $request->student_count,
            'teacher_count'  => $teacherCount,
            'graduate_count' => $request->graduate_count,
        ]);

        return redirect()->route('admin.statistic.index')->with('success', 'Statistika muvaffaqiyatli qo‘shildi!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statistic $statistic)
    {
        return view('admin.statistic.edit', compact('statistic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Statistic $statistic)
    {
        $request->validate([
            'class_count'    => 'required|integer',
            'student_count'  => 'required|integer',
            'graduate_count' => 'required|integer',
        ]);

        $teacherCount = Employee::whereHas('position', function ($q) {
            $q->where('name_uz', 'like', '%O\'qituvchi%');
        })->count();

        $statistic->update([
            'class_count'    => $request->class_count,
            'student_count'  => $request->student_count,
            'teacher_count'  => $teacherCount,
            'graduate_count' => $request->graduate_count,
        ]);

        return redirect()->route('admin.statistic.index')->with('success', 'Statistika yangilandi!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Statistic::destroy($id);
        return redirect()->route('admin.statistic.index')->with('success', 'Statistic deleted successfully.');
    }
}
