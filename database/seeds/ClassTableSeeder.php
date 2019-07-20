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
        //
        if (DB::table('classes')->count() == 0 ) {
            # code...
            DB::table('classes')->insert([
                [
                    'id'=>1,
                    'name'=> 'pt13311',
                    'teacher_name'=> 'hai',
                    'major' => 'CNTT',
                    'max_student' =>50
                ],
                [
                    'id'=>2,
                    'name'=> 'pt13312',
                    'teacher_name'=> 'hai2',
                    'major' => 'that hoc',
                    'max_student' =>110
                ],
                [
                    'id'=>3,
                    'name'=> 'pt13313',
                    'teacher_name'=> 'hai3',
                    'major' => 'MKT',
                    'max_student' =>43
                ],
            ]);
        }
        
    }
}
