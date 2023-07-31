<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Http\Requests\Department\CreateDepartmentRequest;
use App\Http\Requests\Department\UpdateDepartmentRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('admin.pages.departments.list')->with('departments',Department::all());
    }

    public function create()
    {
        return view('admin.pages.departments.modal.create');
    }

    public function store(CreateDepartmentRequest $request)
    {
        Department::create([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        // flash message
        session()->flash('success', 'New Department Added Successfully.');
        // redirect user
        return redirect(route('department.index'));
    }

    public function show(Department $department)
    {
        return view('admin.pages.departments.show')->with('department',$department);
    }

    public function edit(Department $department)
    {
        return view('department.edit', compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $department->update($request->all());

        return redirect()->route('department.index')
            ->with('message', 'department updated successfully');
    }
    

    public function destroy($id)
    {   
        $department = Department::find($id);
    
        if ($department) {
            $department->delete();
            // flash message
            return redirect(route('department.index'))->with('message', 'Department deleted successfully');
        } else {
            // Department not found, handle the error accordingly
            return redirect(route('department.index'))->with('error', 'Department not found');
        }
    }
}
