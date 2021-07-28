<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterSelections extends Model
{
    use HasFactory;
    protected $table = "master_selections";

    protected $fillable=['selection1','selection2','selection3','selection4','student_id'
    ];

    protected $hidden = ['created_at','updated_at'];
}

