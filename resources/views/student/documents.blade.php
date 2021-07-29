@extends('student/app')
@section('script')

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
                <li>البيانات الشخصية</li>
                <li>الخطوة الثانية</li>
                <li>الخطوة الثالثة</li>
                <li class='active'>الخطوة الرابعة</li>
              </ul>
        </div>
    </div>

      <div class="row g-3">

        <div class="col-md-12 col-lg-12">
          <h4 class="mb-3"> تحميل الوثائق  </h4>
          <form class="needs-validation" novalidate action="{{ route('doc',[$studentid,$program]) }}" method="post" >
            @csrf
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="personalPhoto" class="form-label">الصورة الشخصية</label>
                <input type="file" class="form-control" id="personalPhoto" name="personalPhoto" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم أول صحيح.
                </div>
              </div>
              <div class="col-sm-6">
                <label for="id" class="form-label">صورة الهوية أو جواز السفر</label>
                <input type="file" class="form-control" id="id" name="ids[]" placeholder="" value="" required multiple>
                <div class="invalid-feedback">
                  يرجى إدخال اسم أول صحيح.
                </div>
              </div>

@switch($program)
    @case('lisans')
        <div class="col-sm-6">
            <label for="secondary" class="form-label">صورة الشهادة الثانوية (البكالوريا) </label>
            <input type="file" class="form-control" id="secondary" name="secondary" placeholder="" value="" required>
            <div class="invalid-feedback">
            يرجى تحميل صورة الشهادة الثانوية
            </div>
        </div>
        @break
    @case('master')
        <div class="col-sm-6">
            <label for="secondary" class="form-label">صورة الشهادة الثانوية (البكالوريا) </label>
            <input type="file" class="form-control" id="secondary" name="secondary" placeholder="" value="" required>
            <div class="invalid-feedback">
            يرجى تحميل صورة الشهادة الثانوية
            </div>
        </div>
        <div class="col-sm-6">
            <label for="lisans" class="form-label"> صورة الشهادة الجامعية  </label>
            <input type="file" class="form-control" id="lisans" name="lisans" placeholder="" value="" required>
            <div class="invalid-feedback">
            يرجى تحميل صورة الشهادة الجامعية
            </div>
        </div>
        <div class="col-sm-6">
            <label for="transcript" class="form-label">صورة كشف العلامات</label>
            <input type="file" class="form-control" id="transcript" name="transcript" placeholder="" value="" required>
            <div class="invalid-feedback">
            يرجى تحميل صورة   كشف العلامات
            </div>
        </div>
        @break
    @case('phd')
    <div class="col-sm-6">
        <label for="secondary" class="form-label">صورة الشهادة الثانوية (البكالوريا) </label>
        <input type="file" class="form-control" id="secondary" name="secondary" placeholder="" value="" required>
        <div class="invalid-feedback">
        يرجى تحميل صورة الشهادة الثانوية
        </div>
    </div>
    <div class="col-sm-6">
        <label for="lisans" class="form-label"> صورة الشهادة الجامعية  </label>
        <input type="file" class="form-control" id="lisans" name="lisans" placeholder="" value="" required>
        <div class="invalid-feedback">
        يرجى تحميل صورة الشهادة الجامعية
        </div>
    </div>
    <div class="col-sm-6">
        <label for="master" class="form-label"> صورة شهادة الماجستير  </label>
        <input type="file" class="form-control" id="master" name="master" placeholder="" value="" required>
        <div class="invalid-feedback">
        يرجى تحميل صورة شهادة الماجستير
        </div>
    </div>
    <div class="col-sm-6">
        <label for="lisansTranscript" class="form-label">صورة كشف العلامات ليسنس </label>
        <input type="file" class="form-control" id="lisansTranscript" name="lisansTranscript" placeholder="" value="" required>
        <div class="invalid-feedback">
        يرجى تحميل صورة   كشف العلامات
        </div>
    </div>
    <div class="col-sm-6">
        <label for="masterTranscript" class="form-label">صورة كشف العلامات الماجستير </label>
        <input type="file" class="form-control" id="masterTranscript" name="masterTranscript" placeholder="" value="" required>
        <div class="invalid-feedback">
        يرجى تحميل صورة   كشف علامات الماجستير
        </div>
    </div>
        @break

        @case('istkmal')
        <div class="col-sm-6">
            <label for="secondary" class="form-label">صورة الشهادة الثانوية (البكالوريا) </label>
            <input type="file" class="form-control" id="secondary" name="secondary" placeholder="" value="" required>
            <div class="invalid-feedback">
            يرجى تحميل صورة الشهادة الثانوية
            </div>
        </div>

        <div class="col-sm-6">
            <label for="transcript" class="form-label">صورة كشف العلامات</label>
            <input type="file" class="form-control" id="transcript" name="transcript" placeholder="" value=""  onchange="validate_fileupload(this.id,'trans_feedback');" required>
            <div id="trans_feedback">
            يرجى تحميل صورة   كشف العلامات
            </div>
        </div>
        @break
@endswitch





            </div>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit" onclick="return valid_form();" >ارسال</button>
          </form>
        </div>
      </div>
    

      <script text="text/javascript">
      
        var valid = true;
        
        function validate_fileupload(id,msg)
        {
          window.console && console.log("hi here3");
            var el = document.getElementById(msg);
            var fileNams = document.getElementById(id);
            
            var allowed_extensions = new Array("jpg","png","gif","pdf","jpeg");
        
            var fileSize=fileNams.files[0].size;
            var file_extension=fileNams.files[0].name.split('.').pop().toLowerCase();
            var n = allowed_extensions.includes(file_extension);

            
            window.console && console.log(el);
            
            
            
            
            if(fileSize > 2097152){
                    valid = false ;
                    el.style.color='red';
                    el.innerHTML="حجم الملف أكبر من 2ميغا بايت";
                    return ;
            }
        
            if(n==false)
                {
                    
                    valid = false; // valid file extension
                    el.style.color='red';
                    el.innerHTML = "نوع الملف غير مسموح";
                    
                    return;
                }
                
            
            
            el.innerHTML="الملف جاهز للتحميل";
            el.style.color='green';
            valid = true;
        }
      
        function valid_form()
                  {
                      return valid;
                  }
        </script>

@endsection
