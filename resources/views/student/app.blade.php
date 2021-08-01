<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>أكاديمية خبرات</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout-rtl/">

    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
        integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>


<style>
    @font-face {
  font-family:ArbFONTS-GE_SS_Unique_Bold;
  src:  url('{{ asset('fonts/GE_SS_Unique_Bold_5.otf') }}');
  font-weight: bold;
}
</style>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.rtl.min.css')}}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <style>
        .timeline {
            margin: 0;
            padding: 0;
            list-style: none;
            max-width: 770px;
            margin: 0px auto;
            counter-reset: step;
        }

        .timeline li {
            float: right;
            text-align: center;
            width: 150px;
            position: relative;
        }

        .timeline li:after {
            content: counter(step);
            counter-increment: step;
            line-height: 35px;
            width: 35px;
            height: 35px;
            display: block;
            border-radius: 100%;
            border: 1px solid #CCC;
            margin: 0 auto 15px auto;
            background: #fff;
        }

        .timeline li:before {
            content: '';
            width: 100%;
            height: 1px;
            background: #DDD;
            display: block;
            position: absolute;
            top: 39px;
            right: 50%;
            z-index: -1;
        }

        .timeline li:last-child:before {
            content: none;
        }

        .timeline li.active {
            color: #8cc413;
        }

        .timeline li:first-child:after {
            border-color: #8cc413;
            color: black;
        }

        .timeline li.active:after {
            background: #8cc413;
            color: black;
        }
.navbar-bg{
    background: url('{{ asset('images/1navbar-bg.jpg') }}');
   background-size: cover;
   height: 320px;
}
footer{
    background: url('{{ asset('images/1navbar-bg.jpg') }}');
   background-size: cover;
   height: 114px;
}
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('css/form-validation.css')}}" rel="stylesheet">
    @yield('script')
</head>

<body class="bg-light">
    <div class="container-fluid p-0">
        <div class="p-4 p-md-5 mb-4 text-white rounded navbar-bg">
            <img class="inline-block" style="float: left" src="{{asset('images/khibrat-logo.png')}}" alt="أكاديمية خبرات">
            <div class="col-md-6 px-0">
              <h1 class="" style="font-family: ArbFONTS-GE_SS_Unique_Bold">أكاديمية خبرات</h1>
              <p class="lead my-3">عدة أسطر نصية متعددة تعبر عن التدوية، وذلك لإعلام القراء الجدد بسرعة وكفاءة حول أكثر الأشياء إثارة للاهتمام في محتويات هذه التدوينة.</p>
             </div>
        </div>
    </div>
    <div class="py-5 text-center">

        <h2>نموذج تقديم الطلب</h2>
        <p class="lead">فيما يلي مثال على نموذج تم إنشاؤه بالكامل باستخدام عناصر تحكم النموذج في Bootstrap. لكل مجموعة نماذج
            مطلوبة حالة تحقق يمكن تشغيلها بمحاولة إرسال النموذج دون استكماله.</p>
    </div>
    <div class="container">
        <main>
            @yield('content')
        </main>

    </div>
    <div class="container-fluid p-0">
        <footer class="mt-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2021-2019 أكاديمية خبرات</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">سياسة الخصوصية</a></li>
                <li class="list-inline-item"><a href="#">اتفاقية الاستخدام</a></li>
                <li class="list-inline-item"><a href="#">الدعم الفني</a></li>
            </ul>
        </footer>
    </div>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/form-validation.js')}}"></script>
</body>

</html>
