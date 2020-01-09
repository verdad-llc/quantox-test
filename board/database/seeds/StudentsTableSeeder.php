<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $random_count = rand(1,20);
        for ($i=1;$i<$random_count;$i++){
            DB::table('students')->insert([
                'name' => Str::random(10),
                'board_id' => '1'
            ]);

            DB::table('students')->insert( [
                    'name' => Str::random(10),
                    'board_id' => '2'
                ] );
        }



    }
}
