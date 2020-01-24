<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class studentList extends Model
{
    protected $table = 'student_lists';
    protected $fillable = [
        'studentID',
        'name',
        'email',
        'address',
        'mobileNo',
        'position',
        'age',
        'bankName'
    ];
}
