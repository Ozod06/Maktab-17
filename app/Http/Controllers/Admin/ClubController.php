<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = Club::all();
        return view('admin.club.index', compact('clubs'));
    }

    public function create()
    {
        return view('admin.club.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'teacher_firstname_uz' => 'required|string|max:255',
            'teacher_lastname_uz' => 'required|string|max:255',
            'teacher_firstname_ru' => 'nullable|string|max:255',
            'teacher_lastname_ru' => 'nullable|string|max:255',
            'days' => 'nullable|string|max:255',
            'time' => 'nullable|string|max:255',
            'grade' => 'nullable|string|max:255', // Bu text bo'lsa, grade ga map qilinsin
            'image' => 'nullable|image|max:2048',
            'title_uz' => 'nullable|string|max:255',
            'title_ru' => 'nullable|string|max:255',

        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imagename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/admin/images'), $imagename);
            $validated['image'] = $imagename;
        }

        // Agar formda 'text' bo'lsa, lekin bazada 'grade' bo‘lsa:
        if ($request->has('text')) {
            $validated['grade'] = $request->input('text');
        }

        Club::create($validated);

        return redirect()->route('admin.club.index')->with('success', "To'garak muvaffaqiyatli qo‘shildi.");
    }


    public function show($id)
    {
        $detail = Club::findOrFail($id);
        return view('section.educationDetail', compact('detail'));
    }


    public function edit($id)
    {
        $club = Club::findOrFail($id);
        return view('admin.club.edit', compact('club'));
    }

    public function update(Request $request, $id)
    {
        $club = Club::findOrFail($id);

        $validated = $request->validate([
            'teacher_firstname_uz' => 'required|string|max:255',
            'teacher_lastname_uz' => 'required|string|max:255',
            'teacher_firstname_ru' => 'nullable|string|max:255',
            'teacher_lastname_ru' => 'nullable|string|max:255',
            'days' => 'nullable|string|max:255',
            'time' => 'nullable|string|max:255',
            'grade' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
            'title_uz' => 'nullable|string|max:255',
            'title_ru' => 'nullable|string|max:255',

        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('admin/images'), $imageName);
            $validated['image'] = $imageName;
        }

        $club->update($validated);

        return redirect()->route('admin.club.index')->with('success', "To‘garak ma’lumotlari yangilandi.");
    }

    public function destroy($id)
    {
        Club::destroy($id);
        return redirect()->route('admin.club.index')->with('success', "To‘garak o‘chirildi.");
    }

}
