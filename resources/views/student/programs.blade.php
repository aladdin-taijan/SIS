@extends('student/app')
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  count=0;
$(document).ready(function(){
  window.console && console.log('Document ready called');
  $('#master').click(function(event){
      // http://api.jquery.com/event.preventdefault/
      //event.preventDefault();
      if (count >=1){
        alert();
        return;
      }
      count++;
    
      window.console && console.log("Adding education ");
      $('#master-select').append(
          '<div id="position" class="col-sm-6 mb-3"> \
          <p>الرغبة اﻷولى: <select  name="selection1" id="selection1" onchange="if ($(this).val()==$(\'#selection4\').val() || $(this).val()==$(\'#selection2\').val() || $(this).val()==$(\'#selection3\').val() ){alert(\'لا يمكن اختيار نفس الرغبة مرتين\'); $(this).prop(\'selectedIndex\',-1); }" /> \
          <option value="">اختر ...</option> \
          <option value="التربية و الحضارات">التربية و الحضارات</option>\
          <option value="الاقتصاد اﻹسلامي">الاقتصاد اﻹسلامي</option>\
          <option value="القانون">القانون</option>\
          <option value="تفسير">التفسير</option>\
          </select>\
          <p>الرغبة الثانية: <select  name="selection2" id="selection2" onchange="if ($(this).val()==$(\'#selection1\').val() || $(this).val()==$(\'#selection4\').val() || $(this).val()==$(\'#selection3\').val() ){alert(\'لا يمكن اختيار نفس الرغبة مرتين\'); $(this).prop(\'selectedIndex\',-1); }"  /> \
          <option value="">اختر ...</option> \
          <option value="التربية و الحضارات">التربية و الحضارات</option>\
          <option value="الاقتصاد اﻹسلامي">الاقتصاد اﻹسلامي</option>\
          <option value="القانون">القانون</option>\
          <option value="تفسير">التفسير</option>\
          </select>\
          <p>الرغبة الثالثة: <select  name="selection3" id="selection3" onchange="if ($(this).val()==$(\'#selection1\').val() || $(this).val()==$(\'#selection2\').val() || $(this).val()==$(\'#selection4\').val() ){alert(\'لا يمكن اختيار نفس الرغبة مرتين\'); $(this).prop(\'selectedIndex\',-1); }" /> \
          <option value="">اختر ...</option> \
          <option value="التربية و الحضارات">التربية و الحضارات</option>\
          <option value="الاقتصاد اﻹسلامي">الاقتصاد اﻹسلامي</option>\
          <option value="القانون">القانون</option>\
          <option value="تفسير">التفسير</option>\
          </select>\
          <p>الرغبة الرابعة: <select  name="selection4" id="selection4" onchange="if ($(this).val()==$(\'#selection1\').val() || $(this).val()==$(\'#selection2\').val() || $(this).val()==$(\'#selection3\').val() ){alert(\'لا يمكن اختيار نفس الرغبة مرتين\'); $(this).prop(\'selectedIndex\',-1); }" /> \
          <option value="">اختر ...</option> \
          <option value="التربية و الحضارات">التربية و الحضارات</option>\
          <option value="الاقتصاد اﻹسلامي">الاقتصاد اﻹسلامي</option>\
          <option value="القانون">القانون</option>\
          <option value="تفسير">التفسير</option>\
          </select>\
          </div>');
  });

 
  
  $("#selection2").change(function(event){
    

    if($(this).val() == $('#selection1').val() ){
      alert("hifdfd");
    }
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
                    <input id="lisans" name="program" type="radio" class="form-check-input"   onclick="$('#position').remove();count=0; ">
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
                <div class="col-sm-6"></div>
                
                <div class="col-sm-6" id="master-select">
                  
                </div>
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                  <div class="form-check">
                    <input id="phd" name="program" type="radio" class="form-check-input" onclick="$('#position').remove();count=0; ">
                    <label class="form-check-label" for="phd">برنامج الدكتوراه</label>
                  </div>
                </div>
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                  <div class="form-check">
                    <input type="radio" name="program" id="istekmal" class="form-check-input" onclick="$('#position').remove();count=0; ">
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
