@extends('student/app')

@section('content')

 
      <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="{{asset('images/khibrat-logo.png')}}" alt="أكاديمية خبرات">
        <h2 class="alert alert-success">تم تقديم الطلب بنجاح</h2>
        <p class="lead">فيما يلي مثال على نموذج تم إنشاؤه بالكامل باستخدام عناصر تحكم النموذج في Bootstrap. لكل مجموعة نماذج مطلوبة حالة تحقق يمكن تشغيلها بمحاولة إرسال النموذج دون استكماله.</p>
      </div>

      <div class="row g-3">

        <div class="col-md-12 col-lg-12">
          <h4 class="mb-3">بيانات الطلب </h4>

            <div class="row g-3">


            </div>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">طباعة</button>

        </div>
      </div>

@endsection
