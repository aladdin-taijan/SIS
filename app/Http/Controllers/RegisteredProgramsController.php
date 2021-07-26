<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisteredProgramsController extends Controller
{
    //
    public function create(){
        return view('student/programs');
    }

    public function store(Request $request)
    {
        $this->validate($request, [

        ]);

        $request->posts()->create($request->only('body'));

        return back();
    }
}
