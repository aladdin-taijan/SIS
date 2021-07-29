<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monarobase\CountryList\CountryListFacade;

class StudentEducationsController extends Controller
{
    //
    public function create($studentid , $program){
        $country = CountryListFacade::getlist('ar');
        
        return view('student/education',compact('country','studentid','program'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [

        ]);

        // $request->posts()->create($request->only('body'));

        return redirect()->route('rp');
    }
}
