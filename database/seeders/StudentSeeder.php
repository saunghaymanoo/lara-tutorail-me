<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('students')->truncate();
       DB::table('students')->insert([
        "name" => "Suzi",
        "city" => "Korea",
        "distance" => '0.39',
        "moons" => "2",
        'created_by' => '1',
        'updated_by' => '1',
        'created_at' => date('Y-m-d H:i'),
        'updated_at' => date('Y-m-d H:i'),
       ]);
       DB::table('students')->insert([
        "name" => "Ram",
        "city" => "Mumbi",
        "distance" => '0.39',
        "moons" => "1",
        'created_by' => '1',
        'updated_by' => '1',
        'created_at' => date('Y-m-d H:i'),
        'updated_at' => date('Y-m-d H:i'),
       ]);
       DB::table('students')->insert([
        "name" => "Su Su",
        "city" => "Myanmar",
        "distance" => '0.39',
        "moons" => "2",
        'created_by' => '1',
        'updated_by' => '1',
        'created_at' => date('Y-m-d H:i'),
        'updated_at' => date('Y-m-d H:i'),
       ]);
       DB::table('students')->insert([
        "name" => "John",
        "city" => "America",
        "distance" => '0.39',
        "moons" => "2",
        'created_by' => '1',
        'updated_by' => '1',
        'created_at' => date('Y-m-d H:i'),
        'updated_at' => date('Y-m-d H:i'),
       ]);
       DB::table('students')->insert([
        "name" => "Michel",
        "city" => "America",
        "distance" => '0.39',
        "moons" => "2",
        'created_by' => '1',
        'updated_by' => '1',
        'created_at' => date('Y-m-d H:i'),
        'updated_at' => date('Y-m-d H:i'),
       ]);
       DB::table('students')->insert([
        "name" => "Suzi",
        "city" => "Korea",
        "distance" => '0.39',
        "moons" => "2",
        'created_by' => '1',
        'updated_by' => '1',
        'created_at' => date('Y-m-d H:i'),
        'updated_at' => date('Y-m-d H:i'),
       ]);
    }
}
