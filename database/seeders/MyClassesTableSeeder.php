<?php
namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MyClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_classes')->delete();
        $ct = ClassType::pluck('id')->all();

        $data = [
            ['name' => 'Part-Time Bachelors Class 1', 'class_type_id' => $ct[0]],
            ['name' => 'Part-Time Bachelors Class 2', 'class_type_id' => $ct[0]],
            ['name' => 'Part-Time Bachelors Class 3', 'class_type_id' => $ct[0]],
            ['name' => 'Part-Time Bachelors Class 4', 'class_type_id' => $ct[0]],
            ['name' => 'Part-Time Masters Class 1', 'class_type_id' => $ct[1]],
            ['name' => 'Part-Time Masters Class 2', 'class_type_id' => $ct[1]],
            ['name' => 'Part-Time Masters Class 3', 'class_type_id' => $ct[1]],
            ['name' => 'Part-Time Masters Class 4', 'class_type_id' => $ct[1]],
            ['name' => 'Part-Time Ph.D Class 1', 'class_type_id' => $ct[2]],
            ['name' => 'Part-Time Ph.D Class 2', 'class_type_id' => $ct[2]],
            ['name' => 'Part-Time Ph.D Class 3', 'class_type_id' => $ct[2]],
            ['name' => 'Part-Time Ph.D Class 4', 'class_type_id' => $ct[2]],
            ['name' => 'Part-Time Diploma Class 1', 'class_type_id' => $ct[3]],
            ['name' => 'Part-Time Diploma Class 2', 'class_type_id' => $ct[3]],
            ['name' => 'Part-Time Diploma Class 3', 'class_type_id' => $ct[3]],
            ['name' => 'Part-Time Diploma Class 4', 'class_type_id' => $ct[3]],
            ['name' => 'Part-Time SkillAcquisition Class 1', 'class_type_id' => $ct[4]],
            ['name' => 'Part-Time SkillAcquisition Class 2', 'class_type_id' => $ct[4]],
            ['name' => 'Part-Time SkillAcquisition Class 3', 'class_type_id' => $ct[4]],
            ['name' => 'Part-Time SkillAcquisition Class 4', 'class_type_id' => $ct[4]],
        ];

        DB::table('my_classes')->insert($data);

    }
}
