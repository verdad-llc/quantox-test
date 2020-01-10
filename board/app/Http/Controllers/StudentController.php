<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Traits\CalculateTrait;

class StudentController extends Controller
{

    use CalculateTrait;

    protected $student;

    public function __construct(Student $student) {
        $this->student = $student;
    }

    public function student($id)
    {
        $student = $this->student->find($id);
        $request = [];
        $request['format'] = $student->boards->format;
        $request['board_name'] = $student->boards->name;
        $request['grades'] = $student->grades;
        $request['student'] = $student;
        return $this->calculate($request);
    }
}
