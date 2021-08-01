@extends('student/app')
@section('script')

@endsection

@section('content')

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

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
                       required>
                    <div class="invalid-feedback">
                        يرجى تحميل الصورة الشخصية      .
                    </div>
                </div>
                 <div class="col-sm-6">
                    <label for="ids" class="form-label">صورة الهوية أو جواز السفر</label>
                    <input type="file" class="form-control @error('ids') is-invalid @enderror" id="ids" name="ids[]"  required
                        multiple>
                    <div class="invalid-feedback">
                      يرجى تحميل صورة الهوية او جواز السفر        .
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
                     required
                        multiple>
                    <div class="invalid-feedback">
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
 
@endsection
