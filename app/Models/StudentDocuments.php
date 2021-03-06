<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDocuments extends Model
{
    use HasFactory;

    protected $table ="student_documents";

    protected $fillable=[
        'path','name','student_id'
    ];

    protected $hidden=['created_at','updated_at'];
}
