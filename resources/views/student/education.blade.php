@extends('student/app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <ul class='timeline'>
            <li>الموافقة على الشروط</li>
            <li>البيانات الشخصية</li>
            <li>الخطوة الثانية</li>
            <li class='active'>الخطوة الثالثة</li>
            <li>الخطوة الرابعة</li>
        </ul>
    </div>
</div>
<div class="row g-3">
    <div class="col-md-12 col-lg-12">
        <h3 class="mb-3">معلومات التحصيل العلمي</h3>
        <hr class="my-4">
        <form class="needs-validation" novalidate action="{{ route('storeedu',[$studentid,$program]) }}" method="post">
            @csrf
            <div class="row g-3">
                <h4 class="mb-3">الشهادة الثانوية</h4>
                <div class="col-sm-6">
                    <input type="text" hidden name="edu_type" id="edu_type" value="1">
                    <label for="issued_country" class="form-label">بلد الاصدار</label>
                    <select type="select" class="form-select" id="issued_country" name="issued_country" placeholder=""
                        value="" required>
                        <option>اختر...</option>
                        @foreach ($country as $countries )
                        <option value="{{ $countries }}">{{ $countries }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        يرجى إدخال اسم البلد صحيح.
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="issued_authority" class="form-label">الجهة المانحة للشهادة</label>
                    <input type="text" class="form-control" id="issued_authority" name="issued_authority" placeholder=""
                        value="" required>
                    <div class="invalid-feedback">
                        يرجى إدخال اسم الجهة المانحة للشهادة
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="issued_year" class="form-label">سنة الاصدار</label>
                    <input type="number" class="form-control" id="issued_year" name="issued_year" placeholder="1999"
                        min="1900" value="" required>
                    <div class="invalid-feedback">
                        يرجى إدخال سنة الحصول على الشهادة
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="score" class="form-label">المعدل</label>
                    <input type="number" step="0.01" class="form-control" id="score" name="score" placeholder="7.09"
                        value="" required>
                    <div class="invalid-feedback">
                        يرجى إدخال المعدل
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
            </div>
    </div>
    <hr class="my-4">
    @switch($program)
    @case('master')
    <div class="row g-3">
        <h4 class="mb-3">شهادة الليسانس</h4>
        <input type="text" hidden name="edu_type2" id="edu_type2" value="2">
        <div class="col-sm-6">
            <label for="edu_type2" class="form-label">بلد الاصدار</label>
            <select type="select" class="form-select" id="issued_country2" name="issued_country2" placeholder=""
                value="" required>
                <option>اختر...</option>
                @foreach ($country as $countries )
                <option value="{{ $countries }}">{{ $countries }}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">
                يرجى إدخال اسم البلد صحيح.
            </div>
        </div>
        <div class="col-sm-6">
            <label for="issued_authority2" class="form-label">اسم الجامعة المانحة للشهادة</label>
            <input type="text" class="form-control" id="issued_authority2" name="issued_authority2" placeholder=""
                value="" required>
            <div class="invalid-feedback">
                يرجى إدخال اسم الجهة المانحة للشهادة
            </div>
        </div>
        <div class="col-sm-6">
            <label for="issued_year2" class="form-label">سنة الاصدار</label>
            <input type="number" class="form-control" id="issued_year2" name="issued_year2" placeholder="1999"
                min="1900" value="" required>
            <div class="invalid-feedback">
                يرجى إدخال سنة الحصول على الشهادة
            </div>
        </div>

        <div class="col-sm-6">
            <label for="score2" class="form-label">المعدل</label>
            <input type="number" step="0.01" class="form-control" id="score2" name="score2" placeholder="7.09" value=""
                required>
            <div class="invalid-feedback">
                يرجى إدخال المعدل
            </div>
        </div>
        <div class="col-sm-6">
        </div>
    </div>
    <hr class="my-4">
    @break
    @case('phd')
    <div class="row g-3">
        <h4 class="mb-3">شهادة الليسانس</h4>
        <input type="text" hidden name="edu_type2" id="edu_type2" value="2">
        <div class="col-sm-6">
            <label for="edu_type2" class="form-label">بلد الاصدار</label>
            <select type="select" class="form-select" id="issued_country2" name="issued_country2" placeholder=""
                value="" required>
                <option>اختر...</option>
                @foreach ($country as $countries )
                <option value="{{ $countries }}">{{ $countries }}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">
                يرجى إدخال اسم البلد صحيح.
            </div>
        </div>
        <div class="col-sm-6">
            <label for="issued_authority2" class="form-label">اسم الجامعة المانحة للشهادة</label>
            <input type="text" class="form-control" id="issued_authority2" name="issued_authority2" placeholder=""
                value="" required>
            <div class="invalid-feedback">
                يرجى إدخال اسم الجهة المانحة للشهادة
            </div>
        </div>
        <div class="col-sm-6">
            <label for="issued_year2" class="form-label">سنة الاصدار</label>
            <input type="number" class="form-control" id="issued_year2" name="issued_year2" placeholder="1999"
                min="1900" value="" required>
            <div class="invalid-feedback">
                يرجى إدخال سنة الحصول على الشهادة
            </div>
        </div>
        <div class="col-sm-6">
            <label for="score2" class="form-label">المعدل</label>
            <input type="number" step="0.01" class="form-control" id="score2" name="score2" placeholder="7.09" value=""
                required>
            <div class="invalid-feedback">
                يرجى إدخال المعدل
            </div>
        </div>
        <div class="col-sm-6">
        </div>
    </div>
    <hr class="my-4">
    <div class="row g-3">
        <h4 class="mb-3">شهادة الماجستير</h4>
        <input type="text" hidden name="edu_type3" id="edu_type3" value="3">
        <div class="col-sm-6">
            <label for="issued_country3" class="form-label">بلد الاصدار</label>
            <select type="select" class="form-select" id="issued_country3" name="issued_country3" placeholder=""
                value="" required>
                <option>اختر...</option>
                @foreach ($country as $countries )
                <option value="{{ $countries }}">{{ $countries }}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">
                يرجى إدخال اسم البلد صحيح.
            </div>
        </div>
        <div class="col-sm-6">
            <label for="issued_authority3" class="form-label">اسم الجامعة المانحة للشهادة</label>
            <input type="text" class="form-control" id="issued_authority3" name="issued_authority3" placeholder=""
                value="" required>
            <div class="invalid-feedback">
                يرجى إدخال اسم الجهة المانحة للشهادة
            </div>
        </div>
        <div class="col-sm-6">
            <label for="issued_year3" class="form-label">سنة الاصدار</label>
            <input type="number" class="form-control" id="issued_year3" name="issued_year3" placeholder="1999"
                min="1900" value="" required>
            <div class="invalid-feedback">
                يرجى إدخال سنة الحصول على الشهادة
            </div>
        </div>
        <div class="col-sm-6">
            <label for="score3" class="form-label">المعدل</label>
            <input type="number" step="0.01" class="form-control" id="score3" name="score3" placeholder="7.09" value=""
                required>
            <div class="invalid-feedback">
                يرجى إدخال المعدل بشكل صحيح
            </div>
        </div>
        <div class="col-sm-6">
        </div>
    </div>
    <hr class="my-4">
    @break
    @endswitch
    <button class="w-100 btn btn-primary btn-lg" type="submit">التالي</button>
    </form>
</div>
</div>
@endsection
