<?php
namespace App\Repositories\Employeecriterias;

use App\Repositories\BaseRepository;

class EmployeeCriteriaRepository extends BaseRepository implements EmployeeCriteriaRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\EmployeeCriteria::class;
    }

    public function getEmployeeCriteria()
    {
        
    }
}