<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employee;
use App\Models\Criteria;
use App\Http\Controllers\Controller;
use App\Models\EmployeeCriteria;
use Illuminate\Http\Request;

class EmployeeCriteriaController extends Controller
{
    public function index()
    {
        $employees= Employee::all();
        return view('pages.employee-criteria.list-employee', compact('employees'));
    }

    public function create( $id)
    {
        $employee = Employee::find($id);  
        $criterias= Criteria::all();
        return view('pages.employee-criteria.update-employee-criteria', compact('employee','criterias'));
    }

    public function store(Request $request)
    {
        $data = $request->only('employee_id', 'criteria_id', 'assigned_at' );
        EmployeeCriteria::create($data);
        return redirect()->route('employee-criteria.index');
    }
    public function edit()
    {
        return view('pages.employee.edit-employee');
    }

}
