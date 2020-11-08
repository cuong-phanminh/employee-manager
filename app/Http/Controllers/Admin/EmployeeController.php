<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('pages.employee.list-employee', compact('employees'));
    }

    public function create()
    {
        return view('pages.employee.add-employee');
    }

    public function store(Request $request)
    {
        $data = $request->only('name', 'email');
        Employee::create($data);
        return redirect()->route('employee.index');
    }

    public function edit($id)
    {
        $employeeById = User::find($id);
        return view('pages.employee.edit-employee', compact('employeeById'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->only('name', 'point');
        $employee = User::find($id);    
        $employee->update($data);
        return redirect()->route('employee.index');
    }

    public function destroy($id)
    {
        $criteria = User::find($id)->delete();
        return redirect()->back();
    }
}
