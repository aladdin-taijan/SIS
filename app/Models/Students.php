<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $table = "students";

    protected $fillable=['first_name','last_name','father_name','mother_name','nationality','phone','matrial','gender',
                            'email','id_number','birthday','birth_country','residence_country','residence_city','full_address','university_id','program','paid',

    ];

    protected $hidden = ['created_at','updated_at'];
}
