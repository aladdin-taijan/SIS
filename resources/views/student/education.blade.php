@extends('student/app')

@section('content')

<div class="container">
    <main>
      <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="{{asset('images/khibrat-logo.png')}}" alt="أكاديمية خبرات">
        <h2>نموذج تقديم الطلب</h2>
        <p class="lead">فيما يلي مثال على نموذج تم إنشاؤه بالكامل باستخدام عناصر تحكم النموذج في Bootstrap. لكل مجموعة نماذج مطلوبة حالة تحقق يمكن تشغيلها بمحاولة إرسال النموذج دون استكماله.</p>
      </div>

      <div class="row g-3">

        <div class="col-md-12 col-lg-12">
          <h4 class="mb-3">الدراسات السابقة للطالب</h4>
          <form class="needs-validation" novalidate>
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
    </main>
    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2021-2017 أكاديمية خبرات</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">سياسة الخصوصية</a></li>
        <li class="list-inline-item"><a href="#">اتفاقية الاستخدام</a></li>
        <li class="list-inline-item"><a href="#">الدعم الفني</a></li>
      </ul>
    </footer>
  </div>
@endsection
