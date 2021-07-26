<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEducations extends Model
{
    use HasFactory;

    protected $table = "student_educations";

    protected $fillable=['edu_typp','issued_country','issued_authority','college','issued_date','score',
                            'path',

    ];

    protected $hidden = ['created_at','updated_at'];
}
