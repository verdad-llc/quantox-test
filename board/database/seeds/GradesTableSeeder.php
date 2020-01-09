<?php

use Illuminate\Database\Seeder;
use App\Student;
use App\Grade;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $students = Student::all();
        foreach($students as $student) {
            $randomCountRatings = rand(1,4);
            for($i=0; $i<$randomCountRatings; $i++) {
                $grade = new Grade();
                $grade->rating = rand(1, 12);
                $grade->student()->associate($student);
                $grade->save();
            }
        }
    }
}
