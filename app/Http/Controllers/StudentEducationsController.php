<?php

namespace App\Http\Controllers;

use App\Http\Traits\StudentRules;
use App\Models\StudentEducations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Monarobase\CountryList\CountryListFacade;

class StudentEducationsController extends Controller
{
    use StudentRules;
    //
    public function create($studentid , $program){
        $studentid=$studentid;
        $program=$program;
        $country = CountryListFacade::getlist('ar');
        
        return view('student/education',compact('country','studentid','program'));
    }

    public function store(Request $request, $studentid, $program)
    {
        switch ($program) {
            case 'lisans':
                $edurules= $this->edu_lisans_rules();
                break;
            case 'master':
                $edurules= $this->edu_master_rules();
                break;
            case 'phd':
                $edurules= $this->edu_phd_rules();
                break;
            
            default:
                # code...
                break;
        }
        
        $edumsg= $this->edumsg();
        $validate=Validator::make($request->all(),$edurules,$edumsg);
        // $request->posts()->create($request->only('body'));
        //return $validate->errors() ;
        if ($validate ->fails()){
            //return $validate->errors() ;
            return redirect()->back()->withErrors($validate)->withInput();
        }
        
        switch ($program) {
            case 'lisans':
                StudentEducations::create([
                    'edu_type'=>$request->edu_type,
                    'issued_country'=>$request->issued_country,
                    'issued_authority'=>$request->issued_authority,
                    'issued_date'=>$request->issued_year,
                    'score'=>$request->score,
                    'student_id'=>$studentid,
        
                ]);
                case 'istkmal':
                    StudentEducations::create([
                        'edu_type'=>$request->edu_type,
                        'issued_country'=>$request->issued_country,
                        'issued_authority'=>$request->issued_authority,
                        'issued_date'=>$request->issued_year,
                        'score'=>$request->score,
                        'student_id'=>$studentid,
            
                    ]);
                break;
                case 'master':
                    StudentEducations::create([
                        'edu_type'=>$request->edu_type,
                        'issued_country'=>$request->issued_country,
                        'issued_authority'=>$request->issued_authority,
                        'issued_date'=>$request->issued_year,
                        'score'=>$request->score,
                        'student_id'=> $studentid,
                       
            
                    ]);
                    StudentEducations::create([
                        'edu_type'=>$request->edu_type2,
                        'issued_country'=>$request->issued_country2,
                        'issued_authority'=>$request->issued_authority2,
                        'issued_date'=>$request->issued_year2,
                        'score'=>$request->score2,
                        'student_id'=>$studentid,
                    ]);
                    break;
                    case 'phd':
                        StudentEducations::create([
                            'edu_type'=>$request->edu_type,
                            'issued_country'=>$request->issued_country,
                            'issued_authority'=>$request->issued_authority,
                            'issued_date'=>$request->issued_year,
                            'score'=>$request->score,
                            'student_id'=> $studentid,
                           
                
                        ]);
                        StudentEducations::create([
                            'edu_type'=>$request->edu_type2,
                            'issued_country'=>$request->issued_country2,
                            'issued_authority'=>$request->issued_authority2,
                            'issued_date'=>$request->issued_year2,
                            'score'=>$request->score2,
                            'student_id'=>$studentid,
                        ]);
                        break;
                        StudentEducations::create([
                            'edu_type'=>$request->edu_type3,
                            'issued_country'=>$request->issued_country3,
                            'issued_authority'=>$request->issued_authority3,
                            'issued_date'=>$request->issued_year3,
                            'score'=>$request->score3,
                            'student_id'=>$studentid,
                        ]);
                        break;
            
            
            default:
                # code...
                break;
        }
       
        return $request->all();
        //return redirect()->route('rp');
    }
}
