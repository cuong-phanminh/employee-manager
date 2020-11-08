<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Criteria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('criterias')->insert([
            [
                'id' => 1,
                'name' => 'Đi làm muộn',
                'point' => -2,
            ],
            [
                'id' => 2,
                'name' => 'Hoàn thành task sớm',
                'point' => 2,
            ],
            [
                'id' => 3,
                'name' => 'Về sớm',
                'point' => -2,
            ]
        ]);
    }
}
