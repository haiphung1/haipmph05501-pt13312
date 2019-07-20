<?php

use Illuminate\Database\Seeder;

class StudenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (DB::table('students')->count() == 0 ) {
            # code...
            DB::table('students')->insert([
                [
                    'id'=>1,
                    'name'=> 'hai phung',
                    'address'=> 'Ha Noi',
                    'university' => 'FPT poly',
                    'class_id'=> '1'
                   
                ],
                [
                    'id'=>2,
                    'name'=> 'hai nam',
                    'address'=> 'Ha Tay',
                    'university' => 'FPT poly',
                    'class_id' => '2'
                ],
                [
                    'id'=>3,
                    'name'=> 'hai hoang',
                    'address'=> 'Thai Binh',
                    'university' => 'FPT poly',
                    'class_id' => '1'
                ],
            ]);
        }
    }
}
