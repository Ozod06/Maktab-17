<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmpCategory;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('admin.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empcategories = EmpCategory::all();
        $positions = Position::all();
        return view('admin.employee.create', compact('empcategories', 'positions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_uz' => 'required',
            'name_ru' => 'required',
            'email' => 'required',
            'phone' => 'nullable',
            'img' => 'nullable|image',
            'work_time' => 'nullable',
            'emp_category_id' => 'required|exists:emp_categories,id',
            'position_id' => 'required',

        ]);

        $requestData = $request->all();
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $imagename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/admin/images'), $imagename);
            $requestData['img'] = $imagename;
        }

        Employee::create($requestData);
        return redirect()->route('admin.employee.index')->with('success', 'Employee created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $emp = Employee::findOrFail($id);
        return view('admin.employee.show', compact('emp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $emp = Employee::findOrFail($id);  // yoki Employee::find($id)
        $empcategories = EmpCategory::all();
        $positions = Position::all();
        return view('admin.employee.edit', compact('emp', 'empcategories', 'positions'));
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, $id)
        {
            $emp = Employee::findOrFail($id);

            $request->validate([
                'name_uz' => 'required',
                'name_ru' => 'required',
                'email' => 'required',
                'phone' => 'nullable',
                'img' => 'nullable|image',
                'work_time' => 'nullable',
                'emp_category_id' => 'required|exists:emp_categories,id',
                'position_id' => 'required',

            ]);

            $requestData = $request->all();
            if ($request->hasFile('img')) {
                $file = $request->file('img');
                $imagename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('/admin/images'), $imagename);
                $requestData['img'] = $imagename;
            }

            $emp->update($requestData);

            return redirect()->route('admin.employee.index')->with('success', 'Employee updated successfully.');
        }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id)
    {
        Employee::destroy($id);
        return redirect()->route('admin.employee.index')->with('success', 'Employee deleted successfully.');
    }
}
