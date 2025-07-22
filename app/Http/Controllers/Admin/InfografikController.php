<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Infografik;
use App\Models\Post;
use Illuminate\Http\Request;

class InfografikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infografiks = Infografik::all();
        return view('admin.infografik.index', compact('infografiks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.infografik.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $data = $request->all();
        // Image yuklash
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/admin/images'), $filename);
            $data['image'] = $filename;
        }

        Infografik::create($data);

        return redirect()->route('admin.infografik.index')->with('success', 'Infografika muvaffaqiyatli yaratildi.');
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
        $infografik = Infografik::findOrFail($id);
        return view('admin.infografik.edit', compact('infografik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $infografik = Infografik::findOrFail($id);
        $data = $request->all();
        // Image yuklash
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/admin/images'), $filename);
            $data['image'] = $filename;
        }

        $infografik->update($data);

        return redirect()->route('admin.infografik.index')->with('success', 'Infografika muvaffaqiyatli yangilandi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Infografik::destroy($id);
        return redirect()->route('admin.infografik.index')->with('success', 'Infografika deleted successfully.');
    }
}
