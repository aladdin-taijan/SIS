<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentEducationsController extends Controller
{
    //
    public function create(){
        return view('student/education');
    }

    public function store(Request $request)
    {
        $this->validate($request, [

        ]);

        // $request->posts()->create($request->only('body'));

        return redirect()->route('rp');
    }
}
