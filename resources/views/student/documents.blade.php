@extends('student/app')
@section('script')

@endsection

@section('content')
<div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="{{asset('images/khibrat-logo.png')}}" alt="أكاديمية خبرات">
    <h2>نموذج تقديم الطلب</h2>
    <p class="lead">فيما يلي مثال على نموذج تم إنشاؤه بالكامل باستخدام عناصر تحكم النموذج في Bootstrap. لكل مجموعة نماذج
        مطلوبة حالة تحقق يمكن تشغيلها بمحاولة إرسال النموذج دون استكماله.</p>
</div>
<div class="row">
    <div class="col-sm-12">
        <ul class='timeline'>
            <li>الموافقة على الشروط</li>
            <li>البيانات الشخصية</li>
            <li>الخطوة الثانية</li>
            <li>الخطوة الثالثة</li>
            <li class='active'>الخطوة الرابعة</li>
        </ul>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-12 col-lg-12">
        <h4 class="mb-3"> تحميل الوثائق </h4>
        <form class="needs-validation" novalidate action="{{ route('doc',[$studentid,$program]) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="studentid" value="{{$studentid}}">
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="personalPhoto" class="form-label">الصورة الشخصية</label>
                    <input type="file" class="form-control" id="personalPhoto" name="personalPhoto" placeholder=""
                        value="" required>
                    <div class="invalid-feedback">
                        يرجى إدخال اسم أول صحيح.
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="ids" class="form-label">صورة الهوية أو جواز السفر</label>
                    <input type="file" class="form-control" id="ids" name="ids[]" placeholder="" value="" required
                        multiple>
                    <div class="invalid-feedback">
                        يرجى إدخال اسم أول صحيح.
                    </div>
                </div>
                @switch($program)
                @case('lisans')
                <div class="col-sm-6">
                    <label for="secondary_lisans" class="form-label">صورة الشهادة الثانوية (البكالوريا) </label>
                    <input type="file" class="form-control" id="secondary_lisans" name="secondary_lisans[]"
                        placeholder="" value="" required multiple>
                    <div class="invalid-feedback">
                        يرجى تحميل صورة الشهادة الثانوية
                    </div>
                </div>
                @break
                @case('master')
                <div class="col-sm-6">
                    <label for="secondary_master" class="form-label">صورة الشهادة الثانوية (البكالوريا) </label>
                    <input type="file" class="form-control" id="secondary_master" name="secondary_master[]"
                        placeholder="" value="" required multiple>
                    <div class="invalid-feedback">
                        يرجى تحميل صورة الشهادة الثانوية
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="lisans_master" class="form-label"> صورة الشهادة الجامعية </label>
                    <input type="file" class="form-control" id="lisans_master" name="lisans_master[]" placeholder=""
                        value="" required multiple>
                    <div class="invalid-feedback">
                        يرجى تحميل صورة الشهادة الجامعية
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="transcript_master" class="form-label">صورة كشف العلامات</label>
                    <input type="file" class="form-control" id="transcript_master" name="transcript_master[]"
                        placeholder="" value="" required multiple>
                    <div class="invalid-feedback">
                        يرجى تحميل صورة كشف العلامات
                    </div>
                </div>
                @break
                @case('phd')
                <div class="col-sm-6">
                    <label for="secondary_phd" class="form-label">صورة الشهادة الثانوية (البكالوريا) </label>
                    <input type="file" class="form-control" id="secondary_phd" name="secondary_phd[]" placeholder=""
                        value="" required multiple>
                    <div class="invalid-feedback">
                        يرجى تحميل صورة الشهادة الثانوية
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="lisans_phd" class="form-label"> صورة الشهادة الجامعية </label>
                    <input type="file" class="form-control" id="lisans_phd" name="lisans_phd[]" placeholder="" value=""
                        required multiple>
                    <div class="invalid-feedback">
                        يرجى تحميل صورة الشهادة الجامعية
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="master_phd" class="form-label"> صورة شهادة الماجستير </label>
                    <input type="file" class="form-control" id="master_phd" name="master_phd[]" placeholder="" value=""
                        required multiple>
                    <div class="invalid-feedback">
                        يرجى تحميل صورة شهادة الماجستير
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="lisansTranscript_phd" class="form-label">صورة كشف العلامات ليسنس </label>
                    <input type="file" class="form-control" id="lisansTranscript_phd" name="lisansTranscript_phd[]"
                        placeholder="" value="" required multiple>
                    <div class="invalid-feedback">
                        يرجى تحميل صورة كشف العلامات
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="masterTranscript_phd" class="form-label">صورة كشف العلامات الماجستير </label>
                    <input type="file" class="form-control" id="masterTranscript_phd" name="masterTranscript_phd[]"
                        placeholder="" value="" required multiple>
                    <div class="invalid-feedback">
                        يرجى تحميل صورة كشف علامات الماجستير
                    </div>
                </div>
                @break

                @case('istkmal')
                <div class="col-sm-6">
                    <label for="secondary_istkmal" class="form-label">صورة الشهادة الثانوية (البكالوريا) </label>
                    <input type="file" class="form-control" id="secondary_istkmal" name="secondary_istkmal[]"
                        placeholder="" value="" required multiple>
                    <div class="invalid-feedback">
                        يرجى تحميل صورة الشهادة الثانوية
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="transcript_istkmal" class="form-label">صورة كشف العلامات</label>
                    <input type="file" class="form-control" id="transcript_istkmal" name="transcript_istkmal[]"
                        placeholder="" value="" onchange="validate_fileupload(this.id,'trans_feedback');" required
                        multiple>
                    <div id="trans_feedback">
                        يرجى تحميل صورة كشف العلامات
                    </div>
                </div>
                @break
                @endswitch

            </div>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit" onclick="return valid_form();">ارسال</button>
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
