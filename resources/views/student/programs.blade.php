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
                <li class='active'>الخطوة الثانية</li>
                <li>الخطوة الثالثة</li>
                <li>الخطوة الرابعة</li>
              </ul>
        </div>
    </div>

      <div class="row g-3">

        <div class="col-md-12 col-lg-12">
          <h4 class="mb-3">البرامج التي ترغب في دراستها</h4>
          <form class="needs-validation" novalidate action="{{ route('rp') }}" method="post" >
            @csrf

            <div class="row g-3">
                <div class="col-sm-6">
                  <div class="form-check">
                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                    <label class="form-check-label " for="credit"> برنامج الليسانس</label>
                  </div>
                </div>
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                  <div class="form-check">
                    <input id="cash" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="cash">برنامج الماجستير</label>
                  </div>
                </div>
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                  <div class="form-check">
                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="paypal">برنامج الدكتوراه</label>
                  </div>
                </div>
                <div class="col-sm-6"></div>

            </div>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">التالي</button>
          </form>
        </div>
      </div>

@endsection
