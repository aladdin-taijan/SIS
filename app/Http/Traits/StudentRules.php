<?php

namespace App\Http\Traits;


trait StudentRules {

    protected function getrules() {
        return $rules=[
            'first_name'=>'required|alpha',
            'last_name'=>'required|alpha',
            'father_name'=>'required|alpha',
            'mother_name'=>'alpha',
            'birthday'=>'required|date',
            'birth_country'=>'required',
            'nationality'=>'required',
            'phone'=>'required',
            'id_number'=>'required|numeric',
        ];
    }
    protected function getMSG(){
        return $messages=[
             
             'firstname_en.required'=>__('messages.firstname_en_required'),
             'first_name.alpha'=>"hi how are you",
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

     protected function edu_lisans_rules(){
         return $edurules =[
            'issued_country'=>'required|sometimes',
            'issued_authority'=>'required',
            'issued_year'=>'required|integer',
            'score'=>'required|numeric',

         ];
     }
     protected function edu_master_rules(){
         return $edurules=[
            'issued_country'=>'required|sometimes',
            'issued_authority'=>'required',
            'issued_year'=>'required|integer',
            'score'=>'required|numeric',
            'issued_country2'=>'required|sometimes',
            'issued_authority2'=>'required',
            'issued_year2'=>'required|integer',
            'score2'=>'required|numeric',
         ];
     }
     protected function edu_phd_rules(){
        return $edurules=[
            'issued_country'=>'required|sometimes',
            'issued_authority'=>'required',
            'issued_year'=>'required|integer',
            'score'=>'required|numeric',
            'issued_country2'=>'required|sometimes',
            'issued_authority2'=>'required',
            'issued_year2'=>'required|integer',
            'score2'=>'required|numeric',
            'issued_country3'=>'required|sometimes',
            'issued_authority3'=>'required',
            'issued_year3'=>'required|integer',
            'score3'=>'required|numeric',
        ];
    }
     protected function edumsg(){
        return $edumsg =[
           'issued_country.required'=>'?????????? ????????????',
           'issued_country.sometimes'=>'???????? ????????',
           'issued_authority.required'=>'?????????? ????????????',
           'issued_year.required'=>'?????????? ????????????',
           'issued_year.integer'=>'?????? ?????????? ???????? ?????????? ???????? ??????????',
           'issued_year.required'=>'???????? ?????????? ???? ???????? ?????????? ?????????????? -2###',
           'score.required'=>'?????????? ????????????',
           'score.numeric'=>'?????? ?????????? ???????? ??????????',
           'issued_country2.required'=>'?????????? ????????????',
           'issued_country2.sometimes'=>'???????? ????????',
           'issued_authority2.required'=>'?????????? ????????????',
           'issued_year2.required'=>'?????????? ????????????',
           'issued_year2.integer'=>'?????? ?????????? ???????? ?????????? ???????? ??????????',
           'issued_year2.required'=>'???????? ?????????? ???? ???????? ?????????? ?????????????? -2###',
           'score2.required'=>'?????????? ????????????',
           'score2.numeric'=>'?????? ?????????? ???????? ??????????',
           'issued_country3.required'=>'?????????? ????????????',
           'issued_country3.sometimes'=>'???????? ????????',
           'issued_authority3.required'=>'?????????? ????????????',
           'issued_year3.required'=>'?????????? ????????????',
           'issued_year3.integer'=>'?????? ?????????? ???????? ?????????? ???????? ??????????',
           'issued_year3.required'=>'???????? ?????????? ???? ???????? ?????????? ?????????????? -2###',
           'score3.required'=>'?????????? ????????????',
           'score3.numeric'=>'?????? ?????????? ???????? ??????????',
        ];
    }
     

}
