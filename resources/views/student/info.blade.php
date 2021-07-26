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
          <h4 class="mb-3">المعلومات الشخصية للطالب</h4>
          <form class="needs-validation" novalidate action="{{ route('posts') }}" method="post" >
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
                <label for="firstName" class="form-label">الاسم الأخير</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم أول صحيح.
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

              <div class="col-12">
                <label for="email" class="form-label">البريد الإلكتروني</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                  يرجى إدخال عنوان بريد إلكتروني صحيح لتصلكم تحديثات الشحن.
                </div>
              </div>
              <div class="col-sm-6">
                <label for="lastName" class="form-label">الجنسية</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم عائلة صحيح.
                </div>
              </div>
              <div class="col-sm-6">
                <label for="lastName" class="form-label">رقم الهاتف</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم عائلة صحيح.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">الرقم الشخصي</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم عائلة صحيح.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">تاريخ الميلاد</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم عائلة صحيح.
                </div>
              </div>

              <div class="col-md-4">
                <label for="country" class="form-label">بلد الميلاد</label>
                <select class="form-select" id="country" required>
                  <option value="">اختر...</option>
                  <option>الولايات المتحدة الأمريكية</option>
                </select>
                <div class="invalid-feedback">
                  يرجى اختيار بلد صحيح.
                </div>
              </div>

              <div class="col-md-4">
                <label for="country" class="form-label">بلد الإقامة</label>
                <select class="form-select" id="country" required>
                  <option value="">اختر...</option>
                  <option>الولايات المتحدة الأمريكية</option>
                </select>
                <div class="invalid-feedback">
                  يرجى اختيار بلد صحيح.
                </div>
              </div>

              <div class="col-md-4">
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
                  يرجى إدخال عنوان الشحن الخاص بك.
                </div>
              </div>
              <div class="col-12">
                <label for="address" class="form-label">الرقم الجامعي</label>
                <input type="text" class="form-control" id="address" placeholder=" الشارع الأول" required>
                <div class="invalid-feedback">
                  يرجى إدخال عنوان الشحن الخاص بك.
                </div>
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
