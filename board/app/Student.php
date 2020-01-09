<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Board;
use App\Grade;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['name'];

    public function boards()
    {
        return $this->belongsTo(Board::class, 'board_id');
    }

    public function grades()
    {
        return $this->hasMany(Grade::class, 'student_id');
    }
}
