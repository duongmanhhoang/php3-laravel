<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'code' => 'PH06155',
            'name' => 'Nguyễn Văn A',
            'class_id' => 1,
        ];

        $data1 = [
            'code' => 'PH06156',
            'name' => 'Nguyễn Văn B',
            'class_id' => 1
        ];

        $data3 = [
            'code' => 'PH06157',
            'name' => 'Nguyễn Văn C',
            'class_id' => 1
        ];
        Student::create($data);
        Student::create($data1);
        Student::create($data3);
    }
}
