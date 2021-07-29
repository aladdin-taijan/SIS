<?php

namespace App\Http\Controllers;

use App\Models\MasterSelections;
use App\Models\Students;
use Illuminate\Http\Request;

class MasterSelectionsController extends Controller
{
    //
    public function create($studentid){
        $studentid=$studentid;
        return view('student/programs',compact('studentid'));
    }

    public function store(Request $request, $studentid)
    {
       $student=Students::find($studentid);

       $student->update([
        'program'=>$request->program,
       ]);

       if ($request->program == "master"){
            MasterSelections::create([
                'student_id'=>$studentid,
                'selection1'=>$request->selection1,
                'selection2'=>$request->selection2,
                'selection3'=>$request->selection3,
                'selection4'=>$request->selection4,
            ]);
        }


        return redirect('edu/'.$studentid.'/'.$request->program);
    }
}
