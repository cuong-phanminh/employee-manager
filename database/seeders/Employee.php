<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Employee extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'id' => 1,
                'name' => 'Nguyễn văn A',
                'email' => ('minhcuong@gmail.com'),
                'is_deleted' => false
            ],
            [
                'id' => 2,
                'name' => 'Phan Bá Đạo',
                'email' => ('badao@gmail.com'),
                'is_deleted' => false
            ],
            [
                'id' => 3,
                'name' => 'Trương Vô Kỵ',
                'email' => ('voky@gmail.com'),
                'is_deleted' => false
            ]
        ]);
    }
}
