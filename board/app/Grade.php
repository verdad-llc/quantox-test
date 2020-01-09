<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class Grade extends Model
{
    protected $table = 'grades';
    protected $fillable = ['rating'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
