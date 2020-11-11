<?php
namespace App\Repositories\Employees;

use App\Repositories\BaseRepository;

class EmployeeRepository extends BaseRepository 
                            implements EmployeeRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Employee::class;
    }

    public function getEmployee()
    {
        
    }
}