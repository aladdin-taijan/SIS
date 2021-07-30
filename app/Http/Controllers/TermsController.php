<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    //
    public function index(){
        return view('student/terms');
    }
    public function store(Request $request)
    {
        if ($request->terms) {
            return redirect()->route('info');
        }
        return redirect()->back();
    }
}
