<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Director;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directors = Director::all();
        return view('admin.director.index', compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $positions = Position::all();
        return view('admin.director.create', compact('positions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name_uz' => 'required|string|max:255',
            'first_name_ru' => 'required|string|max:255',
            'last_name_uz' => 'required|string|max:255',
            'last_name_ru' => 'required|string|max:255',
            'middle_name_uz' => 'nullable|string|max:255',
            'middle_name_ru' => 'nullable|string|max:255',
            'image' => 'nullable|image',
            'position_id' => 'required',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email',
            'work_time' => 'nullable|string|max:255',
            'biography_uz' => 'nullable|string',

        ]);

        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imagename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/admin/images'), $imagename);
            $requestData['image'] = $imagename;
        }

        Director::create($requestData);
        return redirect()->route('admin.director.index')->with('success', 'Director created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $director = Director::with('position')->findOrFail($id);

        $zamDirector = Director::where('position_id', 2)->first(); // Masalan, 2 - bu Ma'naviyatchi
        return view('admin.director.detail', compact('director', 'zamDirector'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $director = Director::findOrFail($id);
        $positions = Position::all();

        return view('admin.director.edit', compact('director', 'positions'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $director = Director::findOrFail($id);

        $validated = $request->validate([
            'first_name_uz' => 'required|string|max:255',
            'first_name_ru' => 'required|string|max:255',
            'last_name_uz' => 'required|string|max:255',
            'last_name_ru' => 'required|string|max:255',
            'middle_name_uz' => 'nullable|string|max:255',
            'middle_name_ru' => 'nullable|string|max:255',
            'image' => 'nullable|image',
            'position_id' => 'required',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email',
            'work_time' => 'nullable|string|max:255',
            'biography_uz' => 'nullable|string',
        ]);

        // Rasm yuklash
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('admin/images'), $imageName);
            $validated['image'] = $imageName;
        }

        $director->update($validated);

        return redirect()->route('admin.director.index')->with('success', 'Director updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Director::destroy($id);
        return redirect()->route('admin.director.index')->with('success', 'Director deleted successfully.');
    }
    public function director()
    {
        $director = Director::where('is_director', true)->first();
        $zamDirector = Director::where('is_director', false)->first();

        return view('section.directorDetail', compact('director', 'zamDirector'));
    }

    public function detail($id)
    {
        $director = Director::with('position')->findOrFail($id);

        // Bu yerda direktor o‘rinbosarini olish: masalan, position_id orqali (5 o‘rniga haqiqiy ID yozing)
        $zamDirector = Director::with('position')
            ->where('id', '!=', $id) // shu direktor emasligini tekshiramiz
            ->where('position_id', 2) // bu yerga zavuchning ID sini yozasiz
            ->first();

        return view('section.directorDetail', compact('director', 'zamDirector'));
    }





}
