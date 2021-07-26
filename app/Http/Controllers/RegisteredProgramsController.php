<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisteredProgramsController extends Controller
{
    //
    public function create(){
        return view('student/programs');
    }
}
