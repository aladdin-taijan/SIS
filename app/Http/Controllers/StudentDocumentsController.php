<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDocumentsController extends Controller
{
    //

        public function create($id,$program){
            $studentid=$id;
$program = $program;
            return view('student/documents',compact(['studentid','program']));
        }
        public function store(Request $request)
        {
            $this->validate($request, [
                // 'file' => 'required|csv,txt,xlx,xls,pdf|max:2048',
            ]);




            return redirect()->route('info');
        }
}
