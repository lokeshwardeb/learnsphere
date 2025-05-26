<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{

    use HasFactory;
    protected $fillable = [
        'assignment_title',
        'assignment_desc',
        'assignment_starting_date',
        'assignment_submission_date',
    ];
}
