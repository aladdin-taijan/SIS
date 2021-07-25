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
          <h4 class="mb-3">عنوان الفوترة</h4>
          <form class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">الاسم الأول</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم أول صحيح.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">اسم العائلة</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم عائلة صحيح.
                </div>
              </div>

              <div class="col-12">
                <label for="username" class="form-label">اسم المستخدم</label>
                <div class="input-group has-validation">
                  <span class="input-group-text">@</span>
                  <input type="text" class="form-control" id="username" placeholder="اسم المستخدم" required>
                <div class="invalid-feedback">
                  اسم المستخدم الخاص بك مطلوب.
                  </div>
                </div>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">البريد الإلكتروني <span class="text-muted">(اختياري)</span></label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                  يرجى إدخال عنوان بريد إلكتروني صحيح لتصلكم تحديثات الشحن.
                </div>
              </div>

              <div class="col-12">
                <label for="address" class="form-label">العنوان</label>
                <input type="text" class="form-control" id="address" placeholder="1234 الشارع الأول" required>
                <div class="invalid-feedback">
                  يرجى إدخال عنوان الشحن الخاص بك.
                </div>
              </div>

              <div class="col-12">
                <label for="address2" class="form-label">عنوان 2 <span class="text-muted">(اختياري)</span></label>
                <input type="text" class="form-control" id="address2" placeholder="شقة 24">
              </div>

              <div class="col-md-5">
                <label for="country" class="form-label">البلد</label>
                <select class="form-select" id="country" required>
                  <option value="">اختر...</option>
                  <option>الولايات المتحدة الأمريكية</option>
                </select>
                <div class="invalid-feedback">
                  يرجى اختيار بلد صحيح.
                </div>
              </div>

              <div class="col-md-4">
                <label for="state" class="form-label">المنطقة</label>
                <select class="form-select" id="state" required>
                  <option value="">اختر...</option>
                  <option>كاليفورنيا</option>
                </select>
                <div class="invalid-feedback">
                  يرجى اختيار اسم منطقة صحيح.
                </div>
              </div>

              <div class="col-md-3">
                <label for="zip" class="form-label">الرمز البريدي</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  الرمز البريدي مطلوب.
                </div>
              </div>
            </div>

            <hr class="my-4">

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="same-address">
              <label class="form-check-label" for="same-address">عنوان الشحن هو نفس عنوان الفوترة الخاص بي</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="save-info">
              <label class="form-check-label" for="save-info">احفظ هذه المعلومات في المرة القادمة</label>
            </div>

            <hr class="my-4">

            <h4 class="mb-3">طريقة الدفع</h4>

            <div class="my-3">
              <div class="form-check">
                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                <label class="form-check-label" for="credit">بطاقة ائتمان</label>
              </div>
              <div class="form-check">
                <input id="cash" name="paymentMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="cash">نقد</label>
              </div>
              <div class="form-check">
                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="paypal">PayPal</label>
              </div>
            </div>

            <div class="row gy-3">
              <div class="col-md-6">
                <label for="cc-name" class="form-label">الاسم على البطاقة</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">الاسم الكامل كما هو معروض على البطاقة</small>
                <div class="invalid-feedback">
                  الاسم على البطاقة مطلوب
                </div>
              </div>

              <div class="col-md-6">
                <label for="cc-number" class="form-label">رقم البطاقة</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  رقم بطاقة الائتمان مطلوب
                </div>
              </div>

              <div class="col-md-3">
                <label for="cc-expiration" class="form-label">تاريخ انتهاء الصلاحية</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  تاريخ انتهاء الصلاحية مطلوب
                </div>
              </div>

              <div class="col-md-3">
                <label for="cc-cvv" class="form-label">الرمز الثلاثي (CVV)</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  رمز الحماية مطلوب
                </div>
              </div>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">الاستمرار بالدفع</button>
          </form>
        </div>
      </div>
    </main>
    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2021-2017 اسم الشركة</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">سياسة الخصوصية</a></li>
        <li class="list-inline-item"><a href="#">اتفاقية الاستخدام</a></li>
        <li class="list-inline-item"><a href="#">الدعم الفني</a></li>
      </ul>
    </footer>
  </div>
@endsection