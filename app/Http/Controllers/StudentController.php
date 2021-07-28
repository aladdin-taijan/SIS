<?php

namespace App\Http\Controllers;

use App\Http\Traits\StudentRules;
use App\Models\Students;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Monarobase\CountryList\CountryList;
use Monarobase\CountryList\CountryListFacade;

class StudentController extends Controller
{
    use StudentRules;
    public function create(){

        $country = CountryListFacade::getlist('ar');
        return view('student/info',compact('country'));
    }
    public function store(Request $request)
    {
        
        $rules = $this->getrules();
        $messages= $this->getMSG();
        
        
        //valudate data
        $validate = validator::make($request->all(),$rules,$messages);

        if ($validate ->fails()){
            //return $validate->errors() ;
            return redirect()->back()->withErrors($validate)->withInput();
        }
        //insert data
       $last_student_number=Students::max('student_number');

        if (is_null($last_student_number))
        {
            $last_student_number=1999;
        }
        else $last_student_number = $last_student_number + 1;

        //return request();
        
       $data=Students::create([
            'student_number' => $last_student_number,
            'first_name'=>$request->first_name,
            
            'last_name'=>$request->last_name,
            
            
            'father_name'=>$request->father_name,
            
            'mother_name'=>$request->mother_name,
            'birthday'=>$request->birthday,
            'birth_country'=>$request->birth_country,
            
            'nationality'=>$request->nationality,
            'email'=>$request->email,
            'phone'=>$request->phone,
            
            
            'gender'=>$request->gender,
            'matrial'=>$request->matrial,
            
            'id_number'=>$request->id_number,
            'residence_country'=>$request->residence_country,
            'residence_city'=>$request->residence_city,
            'full_address'=>$request->address,
            
            

        ]);

        
        return redirect('rp?sid='.$data->id);
       
     

        // $request->posts()->create($request->only('body'));

        //return redirect()->route('edu');
    }
}
