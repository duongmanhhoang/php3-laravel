<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'PHP3 - Laravel',
            'teacher' => 'Nguyễn Đức Anh Tuấn',
            'major' => 'Lập trình web'
        ];

        \App\Classes::create($data);
    }
}
