<?php

namespace App\Http\Controllers\Admin;

// use App\Models\Employee;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Repositories\Employees\EmployeeRepositoryInterface;


class EmployeeController extends Controller
{
    protected $employeeRepository;

    public function __construct(EmployeeRepositoryInterface $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function index()
    {
        // $employees = Employee::all();
        $employees = $this->employeeRepository->getAll();
        return view('pages.employee.list-employee', compact('employees'));
    }

    public function create()
    {
        return view('pages.employee.add-employee');
    }

    public function store(EmployeeRequest $request)
    {
        $data = $request->only('name', 'email');
        $employee = $this->employeeRepository->create($data);
        return redirect()->route('employee.index');
    }

    public function edit($id)
    {
        // $employeeById = Employee::find($id);
        $employeeById = $this->employeeRepository->find($id);
        return view('pages.employee.edit-employee', compact('employeeById'));
    }

    public function update(UpdateEmployeeRequest $request, $id)
    {
        $data = $request->only('name', 'point');
        // $employee = Employee::find($id);    
        // $employee->update($data);
        $employee = $this->employeeRepository->update($id, $data);
        return redirect()->route('employee.index');
    }

    public function destroy($id)
    {

        $criteria = Employee::find($id)->delete();
        $criteria = $this->employeeRepository->delete($id);
        return redirect()->back();
    }
}
