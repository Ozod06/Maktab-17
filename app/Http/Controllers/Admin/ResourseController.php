<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Resourse;
use Illuminate\Http\Request;

class ResourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resourses = Resourse::all();
        return view('admin.resourse.index', compact('resourses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.resourse.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'body_uz' => 'required|string',
            'body_ru' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('admin/images/'), $filename);
            $data['image'] = $filename;
        }

        Resourse::create($data);

        return redirect()->route('admin.resourse.index')->with('success', 'Resourse muvaffaqiyatli yaratildi.');
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
    public function edit(string $id)
    {
        $resourse = Resourse::findOrFail($id);
        $categories = Category::all();
        return view('admin.resourse.edit', compact('resourse', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'body_uz' => 'required|string',
            'body_ru' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        $resourse = Resourse::findOrFail($id);
        $data = $request->all();
        // Image yuklash
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/admin/images'), $filename);
            $data['image'] = $filename;
        }

        $resourse->update($data);

        return redirect()->route('admin.resourse.index')->with('success', 'Resourse muvaffaqiyatli yangilandi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Resourse::destroy($id);
        return redirect()->route('admin.resourse.index')->with('success', 'Resourse deleted successfully.');
    }
}
