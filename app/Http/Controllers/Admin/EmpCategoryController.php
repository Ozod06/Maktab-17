<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\EmpCategory;
use Illuminate\Http\Request;

class EmpCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empcategories = EmpCategory::all();
        return view('admin.empcategory.index', compact('empcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.empcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_uz' => 'required',
            'name_ru' => 'required',
        ]);

        EmpCategory::create([
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
        ]);

        return redirect()->route('admin.empcategory.index')->with('success', 'EmpCategory created successfully.');
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
        $empcategory = EmpCategory::findOrFail($id);

        return view('admin.empcategory.edit', compact('empcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_uz' => 'required',
            'name_ru' => 'required',
        ]);

        $empcategory = EmpCategory::findOrFail($id);


        $empcategory->update([
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
        ]);

        return redirect()->route('admin.empcategory.index')->with('success', 'EmpCategory updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        EmpCategory::destroy($id);
        return redirect()->route('admin.empcategory.index')->with('success', 'EmpCategory deleted successfully.');
    }
}
