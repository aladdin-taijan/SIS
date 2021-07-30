<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEducations extends Model
{
    use HasFactory;

    protected $table = "student_educations";

    protected $fillable=['edu_type','issued_country','issued_authority','college','issued_date','score',
                            'path','student_id'

    ];

    protected $hidden = ['created_at','updated_at'];
}
