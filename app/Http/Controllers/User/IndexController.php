<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\EmployeeCriteria;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $selected_month = $request->selected_month;
        if ($selected_month) {
            $year = explode('-', $selected_month)[0];
            $month = explode('-', $selected_month)[1];
            $start_date = Carbon::create($year, $month);
            $end_date = Carbon::create($year, $month)->endOfMonth();
        } else {
            $start_date = Carbon::now()->firstOfMonth();
            $end_date = Carbon::now();
        }
        $employees = getEmployeeTotalPoint($start_date, $end_date);
        // return var_dump(json_encode($employees));
        return view('monthly-transcript', compact('employees', 'selected_month'));
    }

    public function pointDetail(Request $request, $id)
    {
        $selected_month = $request->selected_month;
        if ($selected_month) {
            $year = explode('-', $selected_month)[0];
            $month = explode('-', $selected_month)[1];
            $start_date = Carbon::create($year, $month);
            $end_date = Carbon::create($year, $month)->endOfMonth();
        } else {
            $start_date = Carbon::now()->firstOfMonth();
            $end_date = Carbon::now();
        }
        $employee = Employee::find($id);
        $employee_info = getEmployeeCriterias($id, $start_date, $end_date);
        // return var_dump(json_encode($employee));
        return view('point-detail', compact('employee_info','employee'));
    }
}

function getEmployeeTotalPoint($start_date, $end_date)
{
    $employees = Employee::all();
    $data = [];
    foreach ($employees as  $employee) {
        $assigned_criterias = EmployeeCriteria::where('employee_id', $employee->id)
            ->where('assigned_at', '>=', $start_date)
            ->where('assigned_at', '<=', $end_date)
            ->join('criterias', 'employee_criterias.criteria_id', '=', 'criterias.id')
            ->get();

        array_push($data, ['id' => $employee->id, 'name' => $employee->name, 'total_point' => $assigned_criterias->sum('point')]);
    }
    $data = collect($data)->sortBy('total_point')->reverse()->toArray();
    return $data;
}

function getEmployeeCriterias($employee_id, $start_date, $end_date)
{
     
     $data = EmployeeCriteria::where('employee_id', $employee_id)
        ->where('assigned_at', '>=', $start_date)
        ->where('assigned_at', '<=', $end_date)
        ->join('criterias', 'employee_criterias.criteria_id', '=', 'criterias.id')
        ->select('name', 'point', 'assigned_at')
        ->get();

    $sorted = $data->sortByDesc('assigned_at');
    return  $sorted;
}
