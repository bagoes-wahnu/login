
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Aplikasi SiPetarung</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->

    {{-- <link rel="apple-touch-icon" sizes="57x57" href="https://sigis.surabaya.go.id/assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://sigis.surabaya.go.id/assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://sigis.surabaya.go.id/assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://sigis.surabaya.go.id/assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://sigis.surabaya.go.id/assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://sigis.surabaya.go.id/assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://sigis.surabaya.go.id/assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://sigis.surabaya.go.id/assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://sigis.surabaya.go.id/assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="https://sigis.surabaya.go.id/assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://sigis.surabaya.go.id/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://sigis.surabaya.go.id/assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://sigis.surabaya.go.id/assets/img/favicon/favicon-16x16.png"> --}}

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://sigis.surabaya.go.id/assets/login/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://sigis.surabaya.go.id/assets/login/css/fontawesome-all.min.css">
    <!-- Vegas CSS -->
    <link rel="stylesheet" href="https://sigis.surabaya.go.id/assets/login/css/vegas.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('assets/font/flaticon.css')}}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://sigis.surabaya.go.id/assets/login/style.css">
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section class="fxt-template-animation fxt-template-layout29">
        <div class="container-fluid">
            <div class="row">
                <div class="vegas-container col-md-6 col-12 fxt-bg-img" id="vegas-slide" data-vegas-options='{"delay":5000, "timer":false,"animation":"kenburns", "transition":"swirlLeft", "slides":[{"src": "{{asset('IMG/1.jpg')}}"},{"src": "{{asset('IMG/2.jpg')}}"},{"src": "{{asset('IMG/3.jpg')}}"}, {"src": "{{asset('IMG/4.jpg')}}"}]}'>
                    {{-- <div class="fxt-page-switcher">
                        <a href="#!" class="switcher-text1 active">Login</a>
                    </div> --}}
                </div>
                <div class="col-md-6 col-12 fxt-bg-color">
                    <div class="fxt-content">
                        <div class="fxt-header">
                            <a style="margin-bottom: 50px" href="#!" class="fxt-logo"><img src="{{asset('IMG/LOGO.png')}}" alt="Logo"></a>
                        </div>
                        <div class="fxt-form">
                            <div class="fxt-transformY-50 fxt-transition-delay-1">
                                <h2>Selamat Datang. </h2>
                            </div>
                            <div class="fxt-transformY-50 fxt-transition-delay-2">
                                <p>Sistem Informasi Satu Peta</p>
                            </div>
                            <form method="POST" action="{{ route('login') }}" >
                                @csrf
                                {{-- <input type="hidden" name="_token" value="Yc1CBfaqEnU2bxvOeJqatLk4VKeUdTOi7Iwc0Soo"> --}}
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                                        <input type="text" class="form-control" name="name" placeholder="Username" required="required">
                                        <i class="flaticon-user"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-5">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                                        <i class="flaticon-padlock"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-6">
                                        <div class="fxt-content-between">
                                            <button type="submit" class="fxt-btn-fill">Log in</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jquery-->
    <script src="https://sigis.surabaya.go.id/assets/login/js/jquery-3.5.0.min.js"></script>
    <!-- Popper js -->
    <script src="https://sigis.surabaya.go.id/assets/login/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="https://sigis.surabaya.go.id/assets/login/js/bootstrap.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="https://sigis.surabaya.go.id/assets/login/js/imagesloaded.pkgd.min.js"></script>
    <!-- Vegas js -->
    <script src="https://sigis.surabaya.go.id/assets/login/js/vegas.min.js"></script>
    <!-- Validator js -->
    <script src="https://sigis.surabaya.go.id/assets/login/js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="https://sigis.surabaya.go.id/assets/login/js/main.js"></script>

</body>

</html>