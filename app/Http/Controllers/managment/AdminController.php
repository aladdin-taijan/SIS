<?php

namespace App\Http\Controllers\managment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index()
    {
        $allStudent=DB::table('students')->get();

        return view('managment.index' , ['allstudent'=>$allStudent]);
    }

    public function edit()
    {
        return view('managment.edit');
    }
}
//

