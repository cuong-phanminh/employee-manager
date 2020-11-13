<?php
namespace App\Repositories\Criterias;

use App\Repositories\BaseRepository;

class CriteriaRepository extends BaseRepository implements CriteriaRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Criteria::class;
    }

    public function getCriteria()
    {
        
    }
}