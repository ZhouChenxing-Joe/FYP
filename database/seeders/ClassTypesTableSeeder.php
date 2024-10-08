<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'Part-Time Bachelors', 'code' => 'PT-B'],
            ['name' => 'Part-Time Masters', 'code' => 'PT-M'],
            ['name' => 'Part-Time Ph.D', 'code' => 'PT-PD'],
            ['name' => 'Part-Time Diploma', 'code' => 'PT-D'],
            ['name' => 'Part-Time SkillAcquisition', 'code' => 'PT-SA'],
        ];

        DB::table('class_types')->insert($data);

    }
}
