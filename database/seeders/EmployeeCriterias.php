<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeCriterias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_criterias')->insert([
            [
                'id' => 1,
                'employee_id' => 1,
                'criteria_id' => 1,
                'assigned_at' => ('2020-11-07 00:00:00')
            ],
            [
                'id' => 2,
                'employee_id' => 2,
                'criteria_id' => 2,
                'assigned_at' => ('2020-11-06 00:00:00')
            ],
            [
                'id' => 3,
                'employee_id' => 1,
                'criteria_id' => 3,
                'assigned_at' => ('2020-11-01 00:00:00')
            ],
            [
                'id' => 4,
                'employee_id' => 4,
                'criteria_id' => 2,
                'assigned_at' => ('2020-11-02 00:00:00')
            ],
            [
                'id' => 5,
                'employee_id' => 2,
                'criteria_id' => 2,
                'assigned_at' => ('2020-11-04 00:00:00')
            ],
            [
                'id' => 6,
                'employee_id' => 2,
                'criteria_id' => 2,
                'assigned_at' => ('2020-11-03 00:00:00')
            ]
        ]);
    }
}
