<?php

namespace App\Http\Controllers\managment;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Elibyy\TCPDF\Facades\TCPDF as FacadesTCPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Monarobase\CountryList\CountryListFacade;
use Illuminate\Support\Facades\Validator;
use Elibyy\TCPDF\Facades\TCPDF;
use Elibyy\TCPDF\TCPDF as TCPDFTCPDF;
use App\Http\Traits\StudentRules;
use App\Models\StudentEducations;

class AdminController extends Controller
{
    //
    use StudentRules;
    public function index()
    {
        $allStudent=DB::table('students')->get();

        return view('managment.index' , ['allstudent'=>$allStudent]);
    }

    //this method view all info about student
    public function show()
    {
        $html = '<h1>Hello World</h1>';
        
        $pdf=new TCPDF();
        $pdf::SetTitle('Hello World');
        $pdf::AddPage();
        $pdf::writeHTML($html, true, false, true, false, '');

        $pdf::Output('hello_world.pdf');
    }


    //this method get all data which admin is needed to update
    public function edit($studentID)
    {
        $student=DB::table('students')->find($studentID);
        $studentedu=StudentEducations::where('student_id',$studentID)->get();

        if(!$student){
            return redirect('managment')->with(['warning'=>"لا يوجد سجل للطالب في قاعدة البيانات"]);
        }
        $country = CountryListFacade::getList('ar');
        return view('managment.edit',compact('country','student','studentedu'));
    }
        //this function to update data in database 
        
    public function update(Request $updaterequest , $studentID)
    {
        // update student personal info
        $rules = $this->getrules();
        $messages= $this->getMSG();

        $student=Students::find($studentID);

        $validate=validator::make($updaterequest->all(),$rules,$messages);
        if($validate->fails()){
           
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

         // update student edu info
         $messages=$this->edumsg();

         $studentedu=StudentEducations::where('student_id',$studentID)->get();
         
         
         foreach($studentedu as $item){
            

            switch ($item['edu_type']) {
                case '1':
                    $studentedu2=StudentEducations::find($item['id']);
                    $edurules=$this->edu_lisans_rules();
                    $eduvalidate=Validator::make($updaterequest->only(['issued_country'.$item['edu_type'],'issued_authority'.$item['edu_type'],'issued_date'.$item['edu_type'],'score'.$item['edu_type']]) , $edurules ,$messages);
                    
                    if($eduvalidate -> failed())
                    {
                        return redirect()->back()->withErrors($eduvalidate)->
                        withInput($updaterequest->only(['issued_country'.$item['edu_type'],'issued_authority'.$item['edu_type'],'issued_date'.$item['edu_type'],'score'.$item['edu_type']]));

                    }
                    $studentedu2->update([
                                
                                'issued_country'=>$updaterequest->issued_country1,
                                'issued_authority'=>$updaterequest->issued_authority1,
                                'issued_date'=>$updaterequest->issued_date1,
                                'score'=>$updaterequest->score1,
                                
                    ]);

                    
                    return redirect('managment')->with(['success'=>"تم تعديل سجل الطالب في قاعدة البيانات"]);
                    break;
                case '2':
                    $studentedu2=StudentEducations::find($item['id']);
                    $edurules=$this->edu_master_rules();
                    $eduvalidate=Validator::make($updaterequest->only(['issued_country'.$item['edu_type'],'issued_authority'.$item['edu_type'],'issued_date'.$item['edu_type'],'score'.$item['edu_type']]) , $edurules ,$messages);
                    if($eduvalidate -> failed())
                    {
                        return redirect()->back()->withErrors($eduvalidate)->
                        withInput($updaterequest->only(['issued_country'.$item['edu_type'],'issued_authority'.$item['edu_type'],'issued_date'.$item['edu_type'],'score'.$item['edu_type']]));

                    }
                    $studentedu2->update([
                                
                                'issued_country'=>$updaterequest->issued_country2,
                                'issued_authority'=>$updaterequest->issued_authority2,
                                'issued_date'=>$updaterequest->issued_date2,
                                'score'=>$updaterequest->score2,
                                
                    ]);

                    
                    return redirect('managment')->with(['success'=>"تم تعديل سجل الطالب في قاعدة البيانات"]);
                    break;
                case '3':
                    $studentedu2=StudentEducations::find($item['id']);
                    $edurules=$this->edu_phd_rules();
                    $eduvalidate=Validator::make($updaterequest->only(['issued_country'.$item['edu_type'],'issued_authority'.$item['edu_type'],'issued_date'.$item['edu_type'],'score'.$item['edu_type']]) , $edurules ,$messages);
                    if($eduvalidate -> failed())
                    {
                        return redirect()->back()->withErrors($eduvalidate)->
                        withInput($updaterequest->only(['issued_country'.$item['edu_type'],'issued_authority'.$item['edu_type'],'issued_date'.$item['edu_type'],'score'.$item['edu_type']]));

                    }
                    $studentedu2->update([
                                
                                'issued_country'=>$updaterequest->issued_country3,
                                'issued_authority'=>$updaterequest->issued_authority3,
                                'issued_date'=>$updaterequest->issued_date3,
                                'score'=>$updaterequest->score3,
                                
                    ]);

                    
                    return redirect('managment')->with(['success'=>"تم تعديل سجل الطالب في قاعدة البيانات"]);
                    break;
                
            }
        }
        
    }


    

}
//

