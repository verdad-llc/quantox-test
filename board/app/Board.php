<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class Board extends Model
{
    protected $table = 'boards';
    protected $fillable = ['name', 'format'];

    public function students()
    {
        return $this->hasMany(Student::class, 'board_id');
    }
}
