@extends('student/app')
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  window.console && console.log('Document ready called');
  $('#master').click(function(event){
      // http://api.jquery.com/event.preventdefault/
      window.console && console.log("Adding education ");
      $('#master-select').append(
          '<div id="position"> \
          <p>Year: <input type="number" name="year" value="" /> \
          <input type="button" value="-" \
              onclick="$(\'#position\').remove();return false;"></p> \
          <textarea name="desc" rows="8" cols="80"></textarea>\
          </div>');
  });
});
  </script>
@endsection

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
                    <input id="lisans" name="program" type="radio" class="form-check-input" checked >
                    <label class="form-check-label " for="lisans"> برنامج الليسانس</label>
                  </div>
                </div>
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                  <div class="form-check">
                    <input id="master" name="program" type="radio"  class="form-check-input" >
                    <label class="form-check-label" for="master">برنامج الماجستير</label>
                  </div>
                </div>
                
                <div class="col-sm-6" id="master-select">
                  
                </div>
                <div class="col-sm-6">
                  <div class="form-check">
                    <input id="phd" name="program" type="radio" class="form-check-input" >
                    <label class="form-check-label" for="phd">برنامج الدكتوراه</label>
                  </div>
                </div>
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                  <div class="form-check">
                    <input type="radio" name="istekmal" id="istekmal" class="form-check-input" >
                    <label for="istekmal" class="form-check-label">برنامج الاستكمال</label>
                  </div>
                </div>

            </div>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">التالي</button>
          </form>
        </div>
      </div>

@endsection
