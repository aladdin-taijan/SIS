@extends('student/app')

@section('content')

 
      <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="{{asset('images/khibrat-logo.png')}}" alt="أكاديمية خبرات">
        <h2>نموذج تقديم الطلب</h2>
        <p class="lead">فيما يلي مثال على نموذج تم إنشاؤه بالكامل باستخدام عناصر تحكم النموذج في Bootstrap. لكل مجموعة نماذج مطلوبة حالة تحقق يمكن تشغيلها بمحاولة إرسال النموذج دون استكماله.</p>
      </div>

      <div class="row g-3">

        <div class="col-md-12 col-lg-12">
          <h4 class="mb-3">المعلومات الشخصية للطالب</h4>
          <form class="needs-validation" novalidate action="{{ route('info') }}" method="post" >
            @csrf
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">الاسم الأول</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم أول صحيح.
                </div>
              </div>
              <div class="col-sm-6">
                <label for="firstName" class="form-label">الكنية</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال الكنية بشكل صحيح.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">اسم الأب</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم عائلة صحيح.
                </div>
              </div>
              <div class="col-sm-6">
                <label for="lastName" class="form-label">اسم الأم</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم عائلة صحيح.
                </div>
              </div>

              <div class="col-6">
                <label for="email" class="form-label">البريد الإلكتروني</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                  يرجى إدخال عنوان بريد إلكتروني صحيح .
                </div>
              </div>
              <div class="col-sm-6">
                <label for="lastName" class="form-label">رقم الهاتف</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال رقم هاتف صحيح.
                </div>
              </div>
              <div class="col-sm-6">
                <label for="lastName" class="form-label">الجنسية</label>
                <select  class="form-select" id="nationality" placeholder="" value="" required>
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
                <label for="lastName" class="form-label">رقم جواز السفر / الرقم الوطني</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال رقم جواز السفر أو الرقم الوطني بشكل صحيح.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">تاريخ الميلاد</label>
                <input type="date" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال تاريخ ميلاد صحيح.
                </div>
              </div>

              <div class="col-md-6">
                <label for="country" class="form-label">بلد الميلاد</label>
                <select class="form-select" id="country" required>
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
                <label for="country" class="form-label">بلد الإقامة</label>
                <select class="form-select" id="country" required>
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
                <label for="state" class="form-label">منطقة الإقامة</label>
                <select class="form-select" id="state" required>
                  <option value="">اختر...</option>
                  <option>كاليفورنيا</option>
                </select>
                <div class="invalid-feedback">
                  يرجى اختيار اسم منطقة صحيح.
                </div>
              </div>

              <div class="col-12">
                <label for="address" class="form-label">العنوان الكامل</label>
                <input type="text" class="form-control" id="address" placeholder="1234 الشارع الأول" required>
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
