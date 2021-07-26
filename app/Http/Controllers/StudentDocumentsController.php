<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDocumentsController extends Controller
{
    //

        public function create(){
            return view('student/documents');
        }
        public function store(Request $request)
        {
            $this->validate($request, [

            ]);

            // $request->posts()->create($request->only('body'));

            return redirect()->route('info');
        }
}
