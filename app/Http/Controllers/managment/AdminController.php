<?php

namespace App\Http\Controllers\managment;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Monarobase\CountryList\CountryListFacade;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    //
    public function index()
    {
        $allStudent=DB::table('students')->get();

        return view('managment.index' , ['allstudent'=>$allStudent]);
    }

    public function edit($studentID)
    {
        $student=DB::table('students')->find($studentID);
        if(!$student){
            return redirect('managment')->with(['warning'=>"لا يوجد سجل للطالب في قاعدة البيانات"]);
        }
        $country = CountryListFacade::getList('ar');
        return view('managment.edit',compact('country','student'));
    }
        //this function to update data in database 
    public function update(Request $updaterequest , $studentID)
    {
        $rules = $this->getrules();
        $messages= $this->getMSG();

        $student=Students::find($studentID);

        $validate=validator::make($updaterequest->all(),$rules,$messages);
        if($validate->fails()){
           // return "hi";
            return redirect()->back()->withErrors($validate)->withInput($updaterequest->all());
        }

        if(is_null($updaterequest->program)){
            $program=$student->program;
        }
        else{
            $program=$updaterequest->program;
        }
        $student->update([
            'first_name'=>$updaterequest->first_name,
            'last_name'=>$updaterequest->last_name,
            'father_name'=>$updaterequest->father_name,
            'mother_name'=>$updaterequest->mother_name,
            'phone'=>$updaterequest->phone,
            'email'=>$updaterequest->email,
            'birthday'=>$updaterequest->birthday,
            'birth_country'=>$updaterequest->birth_country,
            'nationality'=>$updaterequest->nationality,
            'full_address'=>$updaterequest->full_address,
            'residence_city'=>$updaterequest->residence_city,
            'residence_country'=>$updaterequest->residence_country,
            'program'=>$program,
            'paid'=>$updaterequest->paid,
            'id_number'=>$updaterequest->id_number,
        ]);
        //return $updaterequest->paid;
        return redirect('managment')->with(['success'=>"تم تعديل سجل الطالب في قاعدة البيانات"]);
    }


    //this function return validation rules  
    protected function getrules(){
        return $rules=[
             'first_name'=>'required|alpha',
             'last_name'=>'required|alpha',
             'father_name'=>'required|alpha',
             'mother_name'=>'alpha',
             'birthday'=>'required|date',
             'birth_country'=>'required',
             'nationality'=>'required',
             'phone'=>'required',
             'id_number'=>'required|number',
             
         
 
 
         ];
     }
     //this function return flash translated messages for validation
     protected function getMSG(){
        return $messages=[
             
             'firstname_en.required'=>__('messages.firstname_en_required'),
             'firstname_en.string'=>__('messages.firstname_en_string'),
             'lastname_en.required'=>__('messages.lastname_en_required'),
             'lastname_en.string'=>__('messages.lastname_en_string'),
             'fathername_en.required'=>__('messages.fathername_en_required'),
             'fathername_en.string'=>__('messages.fathername_en_string'),
             'firstname_ar.required'=>__('messages.firstname_ar_required'),
             'firstname_ar.string'=>__('messages.firstname_ar_string'),
             'lastname_ar.required'=>__('messages.lastname_ar_required'),
             'lastname_ar.string'=>__('messages.lastname_ar_string'),
             'fathername_ar.required'=>__('messages.fathername_ar_required'),
             'fathername_ar.string'=>__('messages.fathername_ar_string'),
             'mothername_en.string'=>__('messages.mothername_en_string'),
             'mothername_ar.string'=>__('messages.mothername_ar_string'),
             'birthdate.required'=>__('messages.birthdate_required'),
             'mobile.required'=>__('messages.mobile_required'),
             'mobile.unique'=>__('messages.mobile_unique'),
             'residence_type'=>__('messages.mobile_unique'),
             'type_identify.min'=>__('messages.mobile_unique'),
             
 
         ];
     }

}
//

