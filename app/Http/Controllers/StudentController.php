<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function create(){
        return view('student/info');
    }
    public function store(Request $request)
    {
        $this->validate($request, [

        ]);

        // $request->posts()->create($request->only('body'));

        return redirect()->route('edu');
    }
}
