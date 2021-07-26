<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monarobase\CountryList\CountryList;
use Monarobase\CountryList\CountryListFacade;

class StudentController extends Controller
{

    public function create(){

        $country = CountryListFacade::getlist('ar');
        return view('student/info',compact('country'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [

        ]);

        // $request->posts()->create($request->only('body'));

        return redirect()->route('edu');
    }
}
