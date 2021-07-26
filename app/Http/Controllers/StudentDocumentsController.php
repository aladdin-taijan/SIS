<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDocumentsController extends Controller
{
    //
   
        public function create(){
            return view('student/documents');
        }

}
