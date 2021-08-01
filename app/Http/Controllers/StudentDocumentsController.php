<?php

namespace App\Http\Controllers;

use App\Models\StudentDocuments;
use Illuminate\Http\Request;



class StudentDocumentsController extends Controller
{
    //

        public function create($id,$program){
            $studentid=$id;
            $program = $program;
            return view('student/documents',compact(['studentid','program']));
        }

        public function store(Request $request)
        {

           $request->validate([

                'personalPhoto' => 'mimes:jpeg,bmp,png',
                'ids.*' => 'mimes:pdf|max:2048',
                'secondary_lisans.*' => 'mimes:pdf|max:2048',
                'secondary_master.*' => 'mimes:pdf|max:2048',
                'lisans_master.*' => 'mimes:pdf|max:2048',
                'transcript_master.*' => 'mimes:pdf|max:2048',
                'secondary_phd.*' => 'mimes:pdf|max:2048',
                'lisans_phd.*' => 'mimes:pdf|max:2048',
                'master_phd.*' => 'mimes:pdf|max:2048',
                'lisansTranscript_phd.*' => 'mimes:pdf|max:2048',
                'masterTranscript_phd.*' => 'mimes:pdf|max:2048',
                'secondary_istkmal.*' => 'mimes:pdf|max:2048',
                'transcript_istkmal.*' => 'mimes:pdf|max:2048',


               ]);



            $studentid = $request->studentid;



            //personal image
            $path = $request->file('personalPhoto')->store('public/'. $studentid );
            $personal_image_name = $request->file('personalPhoto')->getClientOriginalName();
            $save_personal_image=StudentDocuments::create([
                'name' => $personal_image_name,
                'path' =>   $path,
                'student_id'=>   $studentid
            ]);

           // ids
           if($request->hasfile('ids'))
           {
              foreach($request->file('ids') as $key => $file)
              {
                  $save_ids=StudentDocuments::create([
                    'name' => $file->getClientOriginalName(),
                    'path' =>     $file->store('public/'. $studentid ),
                    'student_id'=>   $studentid
                ]);
              }
           }

           //secondary_lisans
           if($request->hasfile('secondary_lisans'))
           {
              foreach($request->file('secondary_lisans') as $key => $file)
              {
                  $save_secondary_lisans=StudentDocuments::create([
                    'name' => $file->getClientOriginalName(),
                    'path' =>     $file->store('public/'. $studentid ),
                    'student_id'=>   $studentid
                ]);
              }
           }
//Master
           //secondary_master
           if($request->hasfile('secondary_master'))
           {
              foreach($request->file('secondary_master') as $key => $file)
              {
                  $save_secondary_master=StudentDocuments::create([
                    'name' => $file->getClientOriginalName(),
                    'path' =>     $file->store('public/'. $studentid ),
                    'student_id'=>   $studentid
                ]);
              }
           }
           //secondary_master
           if($request->hasfile('lisans_master'))
           {
              foreach($request->file('lisans_master') as $key => $file)
              {
                  $save_lisans_master=StudentDocuments::create([
                    'name' => $file->getClientOriginalName(),
                    'path' =>     $file->store('public/'. $studentid ),
                    'student_id'=>   $studentid
                ]);
              }
           }
           //transcript_master
           if($request->hasfile('transcript_master'))
           {
              foreach($request->file('transcript_master') as $key => $file)
              {
                  $save_transcript_master=StudentDocuments::create([
                    'name' => $file->getClientOriginalName(),
                    'path' =>     $file->store('public/'. $studentid ),
                    'student_id'=>   $studentid
                ]);
              }
           }
                //End Master
                //Phd
                //secondary_phd
                    if($request->hasfile('secondary_phd'))
                    {
                        foreach($request->file('secondary_phd') as $key => $file)
                        {
                            $save_secondary_phd=StudentDocuments::create([
                                'name' => $file->getClientOriginalName(),
                                'path' =>     $file->store('public/'. $studentid ),
                                'student_id'=>   $studentid
                            ]);
                        }
                    }

                    //lisans_phd
                    if($request->hasfile('lisans_phd'))
                    {
                        foreach($request->file('lisans_phd') as $key => $file)
                        {
                            $save_lisans_phd=StudentDocuments::create([
                                'name' => $file->getClientOriginalName(),
                                'path' =>     $file->store('public/'. $studentid ),
                                'student_id'=>   $studentid
                            ]);
                        }
                    }

                    //master_phd
                    if($request->hasfile('master_phd'))
                    {
                        foreach($request->file('master_phd') as $key => $file)
                        {
                            $save_master_phd=StudentDocuments::create([
                                'name' => $file->getClientOriginalName(),
                                'path' =>     $file->store('public/'. $studentid ),
                                'student_id'=>   $studentid
                            ]);
                        }
                    }

                    //lisansTranscript_phd
                    if($request->hasfile('lisansTranscript_phd'))
                    {
                        foreach($request->file('lisansTranscript_phd') as $key => $file)
                        {
                            $save_lisansTranscript_phd=StudentDocuments::create([
                                'name' => $file->getClientOriginalName(),
                                'path' =>     $file->store('public/'. $studentid ),
                                'student_id'=>   $studentid
                            ]);
                        }
                    }
                    //masterTranscript_phd
                    if($request->hasfile('masterTranscript_phd'))
                    {
                        foreach($request->file('masterTranscript_phd') as $key => $file)
                        {
                            $save_masterTranscript_phd=StudentDocuments::create([
                                'name' => $file->getClientOriginalName(),
                                'path' =>     $file->store('public/'. $studentid ),
                                'student_id'=>   $studentid
                            ]);
                        }
                    }
                //End Phd

                //Istkmal
                    //secondary_istkmal
                    if($request->hasfile('secondary_istkmal'))
                    {
                        foreach($request->file('secondary_istkmal') as $key => $file)
                        {
                            $save_secondary_istkmal=StudentDocuments::create([
                                'name' => $file->getClientOriginalName(),
                                'path' =>     $file->store('public/'. $studentid ),
                                'student_id'=>   $studentid
                            ]);
                        }
                    }
                    //transcript_istkmal
                    if($request->hasfile('transcript_istkmal'))
                    {
                        foreach($request->file('transcript_istkmal') as $key => $file)
                        {
                            $save_transcript_istkmal=StudentDocuments::create([
                                'name' => $file->getClientOriginalName(),
                                'path' =>     $file->store('public/'. $studentid ),
                                'student_id'=>   $studentid
                            ]);
                        }
                    }
                //End Istkmal




            return redirect()->route('info');
        }
}
