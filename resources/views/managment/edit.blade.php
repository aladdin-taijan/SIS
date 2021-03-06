@extends('managment.layouts.main')
@section('content')
<div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2 float-right"  >
    <p class="text-xl pb-6   text-right">
          تعديل البيانات الشخصية <i class="fas fa-list mr-3 " ></i>
    </p>
    <div class="leading-loose " >
        <section class="p-10 bg-white rounded shadow-xl text-right">

        <form  method="POST" action="{{route('update',$student->id)}}"  autocomplete="off" enctype="multipart/form-data" >
            @csrf
            <p class="text-xl text-gray-800 font-medium pb-4">معلومات الطالب</p> 
            <div class="text-right inline-block -mx-1  mt-2  w-1/2 pr-1">
                <embed  name="plugin" src="{{ asset('storage/'.$student->student_number.'/'.'PNKq6U6lX9G1Kwv3QR0fb6LfIRbRE0BicsrFspuT.jpg') }}" class="block  object-center w-24 h-24 rounded-lg" type="application/pdf">
            </div>
            <div class="inline-block  w-1/2 pr-1 text-right">
            
            <p class="text-lg text-gray-800 font-medium pb-4">رقم الطالب: {{ $student->student_number }}</p>
            <p class="text-sm text-gray-800 font-small pb-4">تاريخ التسجيل: {{ $student->created_at }}</p>
            <p class="text-sm text-gray-800 font-small pb-4">أخر تعديل: {{ $student->updated_at }}</p>
            </div>
            
            @if ($errors->any())
            @php
            $i=3000;
            @endphp
            @foreach ($errors->all() as $error)
            
            <div  x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, {{ $i }})" class="text-right bg-red-100 border border-red-400 text-red-700 px-2 py-1 rounded relative" role="alert">
                <span class="block sm:inline text-right">{{ $error }}</span>
               
              </div>
            @php
            $i=$i+3000;
            @endphp
            @endforeach
             @endif
            <div class="inline-block mt-2 -mx-1 w-1/2 pr-1 text-right">
                <label class="block text-sm text-gray-600" for="last_name">الكنية</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded text-right" id="last_name" name="last_name" value="{{ $student->last_name }}" type="text" required=""  aria-label="Name">
                
            </div>
            <div class="text-right inline-block   w-1/2 pr-1">
                <label class="block text-m text-gray-600" for="first_name">اسم الطالب</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded text-right" id="first_name" name="first_name" value="{{ $student->first_name }}"  type="text" required="" aria-label="Name">
                
            </div>
            <div class="inline-block mt-2 -mx-1 w-1/2 pr-1  text-right">
                <label class=" block text-sm text-gray-600" for="mother_name">اسم الأم</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded text-right" id="mother_name" name="mother_name" value="{{ $student->mother_name }}"  type="text" required=""  aria-label="Email">
            </div>
            <div class="mt-2 inline-block   w-1/2 pr-1 text-right">
                <label class="block text-sm text-gray-600" for="father_name">اسم الأب</label>
                <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded text-right" id="father_name" name="father_name" value="{{ $student->father_name }}"  type="text" required=""  aria-label="Email">
            </div>
            <div class="mt-2 inline-block w-1/2 pr-1 text-right">
                <label class="block text-sm text-gray-600" for="phone">رقم الهاتف </label>
                <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded text-right" id="phone" name="phone" value="{{ $student->phone }}"  type="text" required=""  aria-label="Email">
                @error('phone')
                <small  class="text-right bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{$message}}</small>
                @enderror
            </div>
            <div class="mt-2 inline-block w-1/2 pr-1 -mx-1 text-right">
                <label class="block text-sm text-gray-600" for="email">البريد الالكتروني</label>
                <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded text-right" id="email" name="email" type="text" value="{{ $student->email }}"  required=""  aria-label="Email">
            </div>
            <div class="mt-2 inline-block w-1/2 pr-1 text-right">
                <label class="block text-sm text-gray-600" for="birthday">تاريخ الولادة</label>
                <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded text-right" id="birthday" name="birthday" type="date" value="{{ $student->birthday }}" required=""  aria-label="Email">
            </div>
            <div class="mt-2 inline-block w-1/2 pr-1 -mx-1 text-right">
                <label class="block text-sm text-gray-600" for="birth_country">مكان الولادة</label>
                <select class="w-full px-1 py-3  text-gray-700 bg-gray-200 rounded text-right" id="birth_country" name="birth_country"    required=""  aria-label="country">
                    <option >اختر الدولة</option>
                    @foreach ($country as $countries )
                        <option @if ($countries == $student->birth_country)
                            selected=selected
                            
                        @endif
                        value="{{ $countries }}">{{ $countries }}</option>
                    @endforeach
                </select> 
            </div>

            <div class="mt-2 inline-block w-1/2 pr-1  text-right">
                <label class="block text-sm text-gray-600" for="id_number">رقم جواز السفر/الهوية</label>
                <input class="w-full px-5 py-1  text-gray-700 bg-gray-200 rounded text-right" id="id_number" name="id_number" type="text" value="{{ $student->id_number }}" aria-label="id_number">
                    
            </div>
            <div class="mt-2 inline-block w-1/2 pr-1 -mx-1 text-right">
                <label class="block text-sm text-gray-600" for="program">التخصص الجامعي</label>
                <select class="w-full px-1 py-3  text-gray-700 bg-gray-200 rounded text-right" id="program" name="program"  aria-label="program">
                    <option value="">اختر التخصص </option>
                    <option value="lisans" @if ($student->program=='lisans')
                        selected=selected @endif>ليسانس</option>
                    <option value="master"  @if ($student->program=='master')
                        selected=selected @endif>ماجستير</option>
                    <option value="phd"  @if ($student->program=='phd')
                        selected=selected @endif>دكتوراه</option>
                    <option value="istkmal"  @if ($student->program=='phd')
                        selected=selected @endif>استكمال</option>
                    <option value="premaster"  @if ($student->program=='phd')
                        selected=selected @endif>تمهيدي ماجستير</option>
                </select>
            </div>
            <div class="mt-2   text-right">
                <label class="block text-sm text-gray-600" for="nationality">الجنسية</label>
                <select class="w-full px-1 py-3  text-gray-700 bg-gray-200 rounded text-right" id="nationality" name="nationality" required=""  aria-label="nationality">
                    <option >اختر الجنسية</option>
                    @foreach ($country as $countries )
                        <option @if ($countries == $student->nationality)
                            selected=selected
                            
                        @endif
                        value="{{ $countries }}">{{ $countries }}</option>
                    @endforeach
                </select> 
            </div>

            <div class="mt-2 text-right">
                <label class=" block text-sm text-gray-600" for="full_address">العنوان الكامل</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded text-right" id="full_address" name="full_address" value="{{ $student->full_address }}" type="text" required=""  aria-label="Email">
            </div>
            
            
            <div class="inline-block mt-2  pr-1 w-1/2 ">
                <label class="hidden block text-sm text-gray-600" for="residence_city">المدينة</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded text-right" id="residence_city"  name="residence_city" value="{{ $student->residence_city }}" type="text" required="" placeholder="المدينة" aria-label="city">
            </div>
            <div class="inline-block mt-2 -mx-1 w-1/2 pr-1">
                <label class="hidden block text-sm text-gray-600" for="residence_country">الدولة</label>
                <select class="w-full px-1 py-2  text-gray-700 bg-gray-200 rounded text-right" id="residence_country" name="residence_country"    required=""  aria-label="country">
                    <option >اختر الدولة</option>
                    @foreach ($country as $countries )
                        <option @if ($countries == $student->residence_country)
                            selected=selected
                            
                        @endif
                        value="{{ $countries }}">{{ $countries }}</option>
                    @endforeach
                </select>  
            </div>
            <p class="text-lg text-gray-800 font-medium py-4">معلومات الدفع</p>
            <div class="">
                <select class="w-full px-1 py-3  text-gray-700 bg-gray-200 rounded text-right" id="paid" name="paid"    required=""  aria-label="country">
                         <option class="text-right"
                         @if ($student->paid == 0)
                            selected=selected
                            @endif
                            value="0">لم يتم الدفع</option>
                    
                        <option class="text-right"
                        @if ($student->paid == 1)
                            selected=selected
                            @endif
                            value="1">تم الدفع</option>
                        
                        
                    
                </select>  
            </div>
            <!--
            <p class="text-lg text-gray-800 font-medium py-4">Payment information</p>
            <div class="">
                <label class="block text-sm text-gray-600" for="cus_name">Card</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Card Number MM/YY CVC" aria-label="Name">
            </div>
            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">$3.00</button>
            </div>-->
            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded" type="submit">تعديل</button>
            </div>
        </section>
    </div>
    <p class="pt-6 text-gray-600">
        Source: <a class="underline" href="https://tailwindcomponents.com/component/checkout-form">https://tailwindcomponents.com/component/checkout-form</a>
    </p>
</div>

<!--this section for another info about student-->
<div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2 "  >
    <p class="text-xl pb-6   text-right">
          تعديل البيانات الدراسية <i class="fas fa-list mr-3 " ></i>
    </p>
    <div class="leading-loose bg-white " >
        <section class="p-10 bg-white rounded shadow-xl text-right">
                @foreach ($studentedu as $studentEdu )
                <div class="block pr-1 text-right">
                    @switch($studentEdu->edu_type)
                        @case(1)
                        <p class="text-lg text-gray-800 font-medium pb-4">الشهادة الثانوية</p>    
                        @break
                        @case(2)
                        <p class="text-lg text-gray-800 font-medium pb-4">شهادة الليسانس</p>    
                        @break
                        @case(3)
                        <p class="text-lg text-gray-800 font-medium pb-4">شهادة الماجستير</p>    
                        @break
                    
                        @default
                            
                    @endswitch
                </div>
                <div class="inline-block mt-2 -mx-1 w-1/2 pr-1 text-right">
                    <label class="block text-sm text-gray-600" for="issued_authority{{ $studentEdu->edu_type }}">الجهة المانحة للشهادة</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded text-right" id="issued_authority{{ $studentEdu->edu_type }}" name="issued_authority{{ $studentEdu->edu_type }}" value="{{ $studentEdu->issued_authority }}" type="text" required=""  aria-label="Name">
                    
                </div>
                <div class="text-right inline-block   w-1/2 pr-1">
                    <label class="block text-m text-gray-600" for="issued_country{{ $studentEdu->edu_type }}">اسم البلد</label>
                <select class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded text-right" id="issued_country{{ $studentEdu->edu_type }}" name="issued_country{{ $studentEdu->edu_type }}"  aria-label="Name">
                    <option value="" >اختر الدولة</option>
                    @foreach ($country as $countries )
                        <option @if ($countries == $studentEdu->issued_country)
                            selected=selected
                            
                        @endif
                        value="{{ $countries }}">{{ $countries }}</option>
                    @endforeach
                </select> 
                </div>
                <div class="inline-block mt-2 -mx-1 w-1/2 pr-1  text-right">
                    <label class=" block text-sm text-gray-600" for="issued_date{{ $studentEdu->edu_type }}">تاريخ الاصدار</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded text-right" id="issued_date{{ $studentEdu->edu_type }}" name="issued_date{{ $studentEdu->edu_type }}" value="{{ $studentEdu->issued_date }}"  type="text" required=""  aria-label="Email">
                </div>
                <div class="mt-2 inline-block   w-1/2 pr-1 text-right">
                    <label class="block text-sm text-gray-600" for="score{{ $studentEdu->edu_type }}">المعدل</label>
                    <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded text-right" id="score{{ $studentEdu->edu_type }}" name="score{{ $studentEdu->edu_type }}" value="{{ $studentEdu->score }}"  type="text" required=""  aria-label="Email">
                </div>
                @endforeach
            </div>
          </section>
          
          
    </div>
    
</div>
</form>

@endsection