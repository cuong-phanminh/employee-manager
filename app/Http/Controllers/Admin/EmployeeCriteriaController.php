<?php

namespace App\Http\Controllers\Admin;

// use App\Models\Employee;
// use App\Models\Criteria;
// use App\Models\EmployeeCriteria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Employees\EmployeeRepositoryInterface;
use App\Repositories\Criterias\CriteriaRepositoryInterface;
use App\Repositories\EmployeeCriterias\EmployeeCriteriaRepositoryInterface;

class EmployeeCriteriaController extends Controller
{
    protected $employeeCriteriaRepository;
    protected $employeeRepository;

    public function __construct(EmployeeRepositoryInterface $employeeRepository, CriteriaRepositoryInterface $criteriaRepository, EmployeeCriteriaRepositoryInterface $employeeCriteriaRepository){
        $this->employeeRepository = $employeeRepository;
        $this->criteriaRepository = $criteriaRepository;
        $this->employeeCriteriaRepository = $employeeCriteriaRepository;
    }

    public function index()
    {
        // $employees= Employee::all();
        $employees = $this->employeeRepository->getAll();
        
        return view('pages.employee-criteria.list-employee', compact('employees'));
    }

    public function create( $id)
    {
        // $employee = Employee::find($id);  
        // $criterias= Criteria::all();
        $employee = $this->employeeRepository->find($id);  
        $criterias= $this->criteriaRepository->getAll();
        return view('pages.employee-criteria.update-employee-criteria', compact('employee','criterias'));
    }

    public function store(Request $request)
    {
        $data = $request->only('employee_id', 'criteria_id', 'assigned_at' );
        // EmployeeCriteria::create($data);
        $employeecriteria=$this->employeeCriteriaRepository->create($data);
        return redirect()->route('employee-criteria.index');
    }
    public function edit()
    {
        return view('pages.employee.edit-employee');
    }

}