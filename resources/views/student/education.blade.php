@extends('student/app')

@section('content')


      <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="{{asset('images/khibrat-logo.png')}}" alt="أكاديمية خبرات">
        <h2>نموذج تقديم الطلب</h2>
        <p class="lead">فيما يلي مثال على نموذج تم إنشاؤه بالكامل باستخدام عناصر تحكم النموذج في Bootstrap. لكل مجموعة نماذج مطلوبة حالة تحقق يمكن تشغيلها بمحاولة إرسال النموذج دون استكماله.</p>
      </div>
      <div class="row">
        <div class="col-sm-12">
            <ul class='timeline'>
                <li >البيانات الشخصية</li>
                <li >الخطوة الثانية</li>
                <li class='active'>الخطوة الثالثة</li>
                <li>الخطوة الرابعة</li>

              </ul>
        </div>
    </div>

      <div class="row g-3">

        <div class="col-md-12 col-lg-12">
          <h3 class="mb-3">معلومات التحصيل العلمي</h3>
          <hr class="my-4">
          <form class="needs-validation" novalidate action="{{ route('edu',[$studentid,$program]) }}" method="post" >
            @csrf
            <div class="row g-3">
              <h4 class="mb-3">الشهادة الثانوية</h4>
              <div class="col-sm-6">
                <input type="text" hidden name="edu_type" id="edu_type" value="1">
                <label for="firstName" class="form-label">بلد الاصدار</label>
                <select type="select" class="form-select" id="issued_country" name="issued_country" placeholder="" value="" required>
                <option>اختر...</option>
                @foreach ($country as $countries )
                  <option value="{{ $countries }}">{{ $countries }}</option>
                @endforeach
                </select>
                <div class="invalid-feedback">
                  يرجى إدخال اسم البلد صحيح.
                </div>
              </div>
              

              <div class="col-sm-6">
                <label for="lastName" class="form-label">الجهة المانحة للشهادة</label>
                <input type="text" class="form-control" id="issued_authority" name="issued_authority" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم الجهة المانحة للشهادة
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">سنة الاصدار</label>
                <input type="tel" class="form-control" id="issued_year" name="issued_year" placeholder="2### أو ###1" pattern="[1-2]{1}[0-9]{1}[0-9]{1}[0-9]{1}" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال سنة الحصول على الشهادة
                </div>
              </div>
             
              <div class="col-sm-6">
                <label for="lastName" class="form-label">المعدل</label>
                <input type="number" step="0.01" class="form-control" id="score" name="score" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال المعدل
                </div>
              </div>
              <div class="col-sm-6">
              </div>
            </div>
            <hr class="my-4">
            @switch($program)
              @case('master')
                  <div class="row g-3">
                    <h4 class="mb-3">شهادة الليسانس</h4>
                    <input type="text" hidden name="edu_type" id="edu_type" value="2">
                    <div class="col-sm-6">
                      <label for="firstName" class="form-label">بلد الاصدار</label>
                      <select type="select" class="form-select" id="issued_country" name="issued_country" placeholder="" value="" required>
                      <option>اختر...</option>
                      @foreach ($country as $countries )
                        <option value="{{ $countries }}">{{ $countries }}</option>
                      @endforeach
                      </select>
                      <div class="invalid-feedback">
                        يرجى إدخال اسم البلد صحيح.
                      </div>
                    </div>
                    
      
                    <div class="col-sm-6">
                      <label for="lastName" class="form-label">اسم الجامعة المانحة للشهادة</label>
                      <input type="text" class="form-control" id="issued_authority" name="issued_authority" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        يرجى إدخال اسم الجهة المانحة للشهادة
                      </div>
                    </div>
      
                    <div class="col-sm-6">
                      <label for="lastName" class="form-label">سنة الاصدار</label>
                      <input type="tel" class="form-control" id="issued_year" name="issued_year" placeholder="2### أو ###1" pattern="[1-2]{1}[0-9]{1}[0-9]{1}[0-9]{1}" value="" required>
                      <div class="invalid-feedback">
                        يرجى إدخال سنة الحصول على الشهادة
                      </div>
                    </div>
                  
                    <div class="col-sm-6">
                      <label for="lastName" class="form-label">المعدل</label>
                      <input type="number" step="0.01" class="form-control" id="score" name="score" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        يرجى إدخال المعدل
                      </div>
                    </div>
                    <div class="col-sm-6">
                    </div>
                  </div>
                  <hr class="my-4">  
              @break
              @case('phd')
                  <div class="row g-3">
                    <h4 class="mb-3">شهادة الليسانس</h4>
                    <input type="text" hidden name="edu_type" id="edu_type" value="2">
                    <div class="col-sm-6">
                      <label for="firstName" class="form-label">بلد الاصدار</label>
                      <select type="select" class="form-select" id="issued_country" name="issued_country" placeholder="" value="" required>
                      <option>اختر...</option>
                      @foreach ($country as $countries )
                        <option value="{{ $countries }}">{{ $countries }}</option>
                      @endforeach
                      </select>
                      <div class="invalid-feedback">
                        يرجى إدخال اسم البلد صحيح.
                      </div>
                    </div>
                    
      
                    <div class="col-sm-6">
                      <label for="lastName" class="form-label">اسم الجامعة المانحة للشهادة</label>
                      <input type="text" class="form-control" id="issued_authority" name="issued_authority" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        يرجى إدخال اسم الجهة المانحة للشهادة
                      </div>
                    </div>
      
                    <div class="col-sm-6">
                      <label for="lastName" class="form-label">سنة الاصدار</label>
                      <input type="tel" class="form-control" id="issued_year" name="issued_year" placeholder="2### أو ###1" pattern="[1-2]{1}[0-9]{1}[0-9]{1}[0-9]{1}" value="" required>
                      <div class="invalid-feedback">
                        يرجى إدخال سنة الحصول على الشهادة
                      </div>
                    </div>
                  
                    <div class="col-sm-6">
                      <label for="lastName" class="form-label">المعدل</label>
                      <input type="number" step="0.01" class="form-control" id="score" name="score" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        يرجى إدخال المعدل
                      </div>
                    </div>
                    <div class="col-sm-6">
                    </div>
                  </div>
                  <hr class="my-4"> 
                  <div class="row g-3">
                    <h4 class="mb-3">شهادة الماجستير</h4>
                    <input type="text" hidden name="edu_type" id="edu_type" value="3">
                    <div class="col-sm-6">
                      <label for="firstName" class="form-label">بلد الاصدار</label>
                      <select type="select" class="form-select" id="issued_country" name="issued_country" placeholder="" value="" required>
                      <option>اختر...</option>
                      @foreach ($country as $countries )
                        <option value="{{ $countries }}">{{ $countries }}</option>
                      @endforeach
                      </select>
                      <div class="invalid-feedback">
                        يرجى إدخال اسم البلد صحيح.
                      </div>
                    </div>
                    
      
                    <div class="col-sm-6">
                      <label for="lastName" class="form-label">اسم الجامعة المانحة للشهادة</label>
                      <input type="text" class="form-control" id="issued_authority" name="issued_authority" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        يرجى إدخال اسم الجهة المانحة للشهادة
                      </div>
                    </div>
      
                    <div class="col-sm-6">
                      <label for="lastName" class="form-label">سنة الاصدار</label>
                      <input type="tel" class="form-control" id="issued_year" name="issued_year" placeholder="2### أو ###1" pattern="[1-2]{1}[0-9]{1}[0-9]{1}[0-9]{1}" value="" required>
                      <div class="invalid-feedback">
                        يرجى إدخال سنة الحصول على الشهادة
                      </div>
                    </div>
                  
                    <div class="col-sm-6">
                      <label for="lastName" class="form-label">المعدل</label>
                      <input type="number" step="0.01" class="form-control" id="score" name="score" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        يرجى إدخال المعدل
                      </div>
                    </div>
                    <div class="col-sm-6">
                    </div>
                  </div>
                  <hr class="my-4">  
              @break
            
              @default
                
            @endswitch

            <button class="w-100 btn btn-primary btn-lg" type="submit">التالي</button>
          </form>
        </div>
      </div>

@endsection
