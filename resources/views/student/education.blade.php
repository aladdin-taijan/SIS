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
                <li>الخطوة الثانية</li>
                <li class='active'>الخطوة الثالثة</li>
                <li>الخطوة الرابعة</li>
              </ul>
        </div>
    </div>

      <div class="row g-3">

        <div class="col-md-12 col-lg-12">
          <h4 class="mb-3">الدراسات السابقة للطالب</h4>
          <form class="needs-validation" novalidate action="{{ route('edu') }}" method="post" >
            @csrf
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">نوع الدراسة</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم أول صحيح.
                </div>
              </div>
              <div class="col-sm-6">

              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">الجامعة</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم عائلة صحيح.
                </div>
              </div>
              <div class="col-sm-6">
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">مصدر الشهادة</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم عائلة صحيح.
                </div>
              </div>
              <div class="col-sm-6">
              </div>
              <div class="col-sm-6">
                <label for="lastName" class="form-label">الجهة المصدرة</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم عائلة صحيح.
                </div>
              </div>
              <div class="col-sm-6">
              </div>










            </div>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">التالي</button>
          </form>
        </div>
      </div>

@endsection
