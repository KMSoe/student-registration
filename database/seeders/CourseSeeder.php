<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            ["code" => "Mar-1101", "name" => "Myanmar"],
            ["code" => "E-1101", "name" => "English"],
            ["code" => "Math-1101", "name" => "Mathematics"],
            ["code" => "Ph-1101", "name" => "Physics"],
            ["code" => "Ch-1101", "name" => "Chemistry"],
            ["code" => "Bio-1101", "name" => "Biology"],
            ["code" => "Eco-1101", "name" => "Economic"],
        ];

        foreach ($courses as $course) {
            DB::insert('INSERT INTO courses (code, name) VALUES (?, ?)', [$course['code'], $course['name']]);
        }
    }
}
