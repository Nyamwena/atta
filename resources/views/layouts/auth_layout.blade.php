<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Samaritan | Login</title>

    <!-- Font Awesome 5 -->
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/purpose.css')}}" id="stylesheet">
</head>

<body class="application application-offset">
<!-- Chat modal -->
<!-- Customizer modal -->

<!-- Application container -->
<div class="container-fluid container-application">
    <!-- Sidenav -->
    <!-- Content -->
    <div class="main-content position-relative">
        <!-- Main nav -->
        <!-- Omnisearch -->

        <!-- Page content -->
        <div class="page-content">
            <div class="min-vh-100 py-5 d-flex align-items-center">
                <div class="w-100">
                    <div class="row justify-content-center">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
    </div>
</div>
<!-- Scripts -->
<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="{{asset('assets/js/purpose.core.js')}}"></script>
<!-- Purpose JS -->
<script src="{{asset('assets/js/purpose.js')}}"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="{{asset('assets/js/demo.js')}}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->

</body>



</html>
