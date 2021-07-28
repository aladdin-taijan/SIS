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
                <li class='active'>البيانات الشخصية</li>
                <li>الخطوة الثانية</li>
                <li>الخطوة الثالثة</li>
                <li>الخطوة الرابعة</li>
              </ul>
        </div>
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

      <div class="row g-3">
        <div class="col-md-12 col-lg-12">
          <h4 class="mb-3">المعلومات الشخصية للطالب</h4>
          <form class="needs-validation" novalidate action="{{ route('storeinfo') }}" method="post" >
            @csrf
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="first_name" class="form-label">الاسم الأول</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم أول صحيح.
                </div>
              </div>
              <div class="col-sm-6">
                <label for="last_name" class="form-label">الكنية</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال الكنية بشكل صحيح.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="father_name" class="form-label">اسم الأب</label>
                <input type="text" class="form-control" id="father_name" name="father_name" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم عائلة صحيح.
                </div>
              </div>
              <div class="col-sm-6">
                <label for="mother_name" class="form-label">اسم الأم</label>
                <input type="text" class="form-control" id="mother_name" placeholder="" name="mother_name" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم عائلة صحيح.
                </div>
              </div>
              <div class="col-sm-6">
                <label for="gender" class="form-label">الجنس</label>
                <select type="text" class="form-select" id="gender" name="gender" placeholder="" value="" required>
                  <option>اختر ...</option>
                  <option value="ذكر">ذكر</option>
                  <option value="أنثى">أنثى</option>
                </select>
                <div class="invalid-feedback">
                  يرجى إختيار قيمة
                </div>
              </div>
              <div class="col-sm-6">
                <label for="matrial" class="form-label">الحالة الاجتماعية</label>
                <select type="text" class="form-select" id="matrial" name="matrial" placeholder="" value="" required>
                  <option>اختر ...</option>
                  <option value="أعزب">أعزب/عزباء</option>
                  <option value="متزوج">متزوج/متزوجة</option>
                  <option value="مطلق">مطلق/مطلقة</option>
                  <option value="أرمل">أرمل</option>
                </select>
                <div class="invalid-feedback">
                  يرجى إختيار قيمة
                </div>
              </div>

              <div class="col-6">
                <label for="email" class="form-label">البريد الإلكتروني</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                  يرجى إدخال عنوان بريد إلكتروني صحيح .
                </div>
              </div>
              <div class="col-sm-6">
                <label for="phone" class="form-label">رقم الهاتف</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال رقم هاتف صحيح.
                </div>
              </div>
              <div class="col-sm-6">
                <label for="nationality" class="form-label">الجنسية</label>
                <select  class="form-select" id="nationality" name="nationality" placeholder="" value="" required>
                  <option >اختر الجنسية</option>
                      @foreach ($country as $countries )
                          <option value="{{ $countries }}">{{ $countries }}</option>
                      @endforeach
                  </select>
                <div class="invalid-feedback">
                  يرجى اختيار الجنسية.
                </div>
              </div>


              <div class="col-sm-6">
                <label for="id_number" class="form-label">رقم جواز السفر / الرقم الوطني</label>
                <input type="text" class="form-control" id="id_number" name="id_number"  placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال رقم جواز السفر أو الرقم الوطني بشكل صحيح.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="birthday" class="form-label">تاريخ الميلاد</label>
                <input type="date" class="form-control" id="birthday" name="birthday" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال تاريخ ميلاد صحيح.
                </div>
              </div>

              <div class="col-md-6">
                <label for="birth_country" class="form-label">بلد الميلاد</label>
                <select class="form-select" id="birth_country" name="birth_country" required>
                  <option value="">اختر...</option>
                      @foreach ($country as $countries )
                          <option value="{{ $countries }}">{{ $countries }}</option>
                      @endforeach
                </select>
                <div class="invalid-feedback">
                  يرجى اختيار بلد صحيح.
                </div>
              </div>

              <div class="col-md-6">
                <label for="residence_country" class="form-label">بلد الإقامة</label>
                <select class="form-select" id="residence_country" name="residence_country" required>
                  <option value="">اختر...</option>
                  @foreach ($country as $countries )
                          <option value="{{ $countries }}">{{ $countries }}</option>
                      @endforeach
                </select>
                <div class="invalid-feedback">
                  يرجى اختيار بلد صحيح.
                </div>
              </div>

              <div class="col-md-6">
                <label for="residence_city" class="form-label">مدينة الإقامة</label>
                <select class="form-select" id="residence_city" name="residence_city" required>
                  <option value="">اختر...</option>
                  <option>كاليفورنيا</option>
                </select>
                <div class="invalid-feedback">
                  يرجى اختيار اسم منطقة صحيح.
                </div>
              </div>

              <div class="col-12">
                <label for="address" class="form-label">العنوان الكامل</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="1234 الشارع الأول" required>
                <div class="invalid-feedback">
                  يرجى إدخال العنوان الخاص بك.
                </div>
              </div>

            </div>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">التالي</button>
          </form>
        </div>
      </div>

@endsection
