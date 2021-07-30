<?php

namespace App\Http\Controllers;

use App\Models\StudentDocuments;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

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

            $studentid = $request->studentid;

            $path = $request->file('personalPhoto')->store('public/'. $studentid );

            //personal image
            $personal_image_name = $request->file('personalPhoto')->getClientOriginalName();
            $save_personal_image=StudentDocuments::create([
                'name' => $personal_image_name,
                'path' =>   $path,
                'student_id'=>   $studentid

            ]);

           
            return redirect()->route('info');
        }
}
