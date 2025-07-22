<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Post;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /* ======  R  ====== */
    public function index()
    {
        $classrooms = Classroom::all();
        return view('admin.classroom.index', compact('classrooms'));
    }

    /* ======  C  ====== */
    public function create()
    {
        return view('admin.classroom.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'smena' => 'required|in:1,2,3',
            'schedule_img' => 'required|file|max:20480', // 20MB
        ]);

        $file = $request->file('schedule_img');
        $smena = $request->smena;

        // Fayl turini tekshirish
        if ($smena == '3') {
            // Qo‘shimcha darslar – faqat rasm
            if (!in_array($file->getClientOriginalExtension(), ['jpg', 'jpeg', 'png'])) {
                return back()->withErrors(['schedule_img' => 'Qo‘shimcha darslar uchun faqat rasm yuklang']);
            }
        } else {
            // 1/2-smena – faqat PDF
            if ($file->getClientOriginalExtension() !== 'pdf') {
                return back()->withErrors(['schedule_img' => '1/2-smena uchun faqat PDF yuklang']);
            }
        }

        // Faylni saqlash
        $fileName = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('class_schedules', $fileName, 'public');

        Classroom::create([
            'name' => $request->name,
            'smena' => $smena,
            'schedule_img' => $path,
        ]);

        return redirect()->route('admin.classroom.index')->with('success', 'Sinf saqlandi');
    }



    /* ======  R (bitta)  ====== */
    public function show($id)
    {
//        $classroom = Classroom::findOrFail($id);
//        return view('admin.classroom.show', compact('classroom'));
    }

    /* ======  U  ====== */
    public function edit($id)
    {
        $classroom = Classroom::findOrFail($id);
        return view('admin.classroom.edit', compact('classroom'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'smena' => 'required|in:1,2',
            'schedule_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $classroom = Classroom::findOrFail($id);

        if ($request->hasFile('schedule_img')) {
            // eski rasmni o‘chirib tashlash (ixtiyoriy)
            if ($classroom->schedule_img &&
                file_exists(public_path('admin/images/' . $classroom->schedule_img))) {
                unlink(public_path('admin/images/' . $classroom->schedule_img));
            }

            $filename = time() . '_' . $request->file('schedule_img')->getClientOriginalName();
            $request->file('schedule_img')
                ->move(public_path('admin/images'), $filename);
            $validated['schedule_img'] = $filename;
        }

        $classroom->update($validated);

        return redirect()->route('admin.classroom.index')->with('success', 'Sinf yangilandi');
    }

    /* ======  D  ====== */
    public function destroy($id)
    {
        $class = Classroom::findOrFail($id);

        // Fayl mavjud bo‘lsa – uni o‘chirib tashlaymiz
        if ($class->schedule_img && file_exists(public_path('admin/images/' . $class->schedule_img))) {
            unlink(public_path('admin/images/' . $class->schedule_img));
        }

        // O‘chirish
        $class->delete();

        return redirect()->route('admin.classroom.index')->with('success', 'Sinf o‘chirildi');
    }


}
