<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Purpose Application UI is the following chapter we've finished in order to create a complete and robust solution next to the already known Purpose Website UI.">
    <meta name="author" content="Webpixels">
    <title> </title>

    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Purpose CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/purpose.css')}}" id="stylesheet">
</head>

<body class="application application-offset">
<!-- Chat modal -->
<!-- Customizer modal -->

<!-- Application container -->
<div class="container-fluid container-application">
    <!-- Sidenav -->
    <div class="sidenav" id="sidenav-main">
        <!-- Sidenav header -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{asset('/')}}">
                <img src="{{asset('img/logo.PNG')}}" width="100"  height="350" class="navbar-brand-img" alt="samaritan">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler sidenav-toggler-dark d-md-none" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- User mini profile -->
        <div class="sidenav-user d-flex flex-column align-items-center justify-content-between text-center">
            <!-- Avatar -->
            <div>
                <a href="#" class="avatar rounded-circle avatar-xl">
                    <img alt="Image placeholder" src="{{url('img/dummy.png')}}" class=""/>

                </a>
                <div class="mt-4">
                    <h5 class="mb-0 text-white">User Name</h5>
                    <span class="d-block text-sm text-white opacity-8 mb-3"></span>
                    <a href="#" class="btn btn-sm btn-white btn-icon rounded-pill shadow hover-translate-y-n3">
                        <span class="btn-inner--icon"><i class="far fa-coins"></i></span>

                    </a>
                </div>
            </div>
            <!-- User info -->
            <!-- Actions -->
            <div class="w-100 mt-4 actions d-flex justify-content-between">
                <a href="" class="action-item action-item-lg text-white pl-0">
                    <i class="fa fa-user"></i>
                </a>


            </div>
        </div>
        <!-- Application nav -->
        <div class="nav-application clearfix">
            <a href="" class="btn btn-square text-sm active">
                <span class="btn-inner--icon d-block"><i class="fa fa-home fa-2x"></i></span>
                <span class="btn-inner--icon d-block pt-2">Home</span>
            </a>

            @yield('side_menu')

        </div>

    </div>
    <!-- Content -->
    <div class="main-content position-relative">
        <!-- Main nav -->
        <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-primary navbar-border" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand + Toggler (for mobile devices) -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- User's navbar -->
                <div class="navbar-user d-lg-none ml-auto">
                    <ul class="navbar-nav flex-row align-items-center">
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-link-icon sidenav-toggler" data-action="sidenav-pin" data-target="#sidenav-main"><i class="fa fa-bars"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-link-icon" data-action="omnisearch-open" data-target="#omnisearch"><i class="fa fa-search"></i></a>
                        </li>
                        <li class="nav-item dropdown dropdown-animate">
                            <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                                <div class="py-3 px-3">
                                    <h5 class="heading h6 mb-0"></h5>
                                </div>
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="2 hrs ago">
                                            <div>
                                                <span class="avatar bg-primary text-white rounded-circle"></span>
                                            </div>
                                            <div class="flex-fill ml-3">
                                                <div class="h6 text-sm mb-0">User Name<small class="float-right text-muted"></small></div>
                                                <p class="text-sm lh-140 mb-0">

                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="py-3 text-center">
                                    <a href="#" class="link link-sm link--style-3"></a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-animate">
                            <a class="nav-link pr-lg-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{url('img/dummy.png')}}">
                  </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                                <h6 class="dropdown-header px-0">Hi, User!</h6>
                                <a href="#" class="dropdown-item">
                                    <i class="fa fa-user"></i>
                                    <span>My profile</span>
                                </a>

                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="fa fa-sign-out-alt"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Navbar nav -->
                <div class="collapse navbar-collapse navbar-collapse-fade" id="navbar-main-collapse">
                    <ul class="navbar-nav align-items-lg-center">
                        <!-- Overview  -->

                        <li class="border-top opacity-2 my-2"></li>
                        <!-- Home  -->
                        <li class="nav-item ">
                            <a class="nav-link pl-lg-0" href="">
                                Home
                            </a>
                        </li>
                        <!-- Application menu -->
                        <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow p-lg-0">
                              @yield('top_menu_inner')
                            </div>
                        </li>
                       @yield('top_menu')

                        <li class="border-top opacity-2 my-2"></li>
                        <!-- Docs menu -->

                    </ul><!-- Right menu -->
                    <ul class="navbar-nav ml-lg-auto align-items-center d-none d-lg-flex">
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-link-icon sidenav-toggler" data-action="sidenav-pin" data-target="#sidenav-main"><i class="fa fa-bars"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-link-icon" data-action="omnisearch-open" data-target="#omnisearch"><i class="fa fa-search"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#modal-chat" class="nav-link nav-link-icon" data-toggle="modal"><i class="fa fa-comment-alt"></i></a>
                        </li>
                        <li class="nav-item dropdown dropdown-animate">
                            <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                                <div class="py-3 px-3">
                                    <h5 class="heading h6 mb-0"></h5>
                                </div>
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="2 hrs ago">
                                            <div>
                                                <span class="avatar bg-primary text-white rounded-circle"></span>
                                            </div>
                                            <div class="flex-fill ml-3">
                                                <div class="h6 text-sm mb-0">Users 1 <small class="float-right text-muted"></small></div>
                                                <p class="text-sm lh-140 mb-0">

                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="py-3 text-center">
                                    <a href="#" class="link link-sm link--style-3"></a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-animate">
                            <a class="nav-link pr-lg-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media media-pill align-items-center">
                    <span class="avatar rounded-circle">
                      <img alt="Image placeholder" src="{{asset('img/dummy.png')}}">
                    </span>
                                    <div class="ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">John Doe</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                                <h6 class="dropdown-header px-0">Hi, John!</h6>
                                <a href="#!" class="dropdown-item">
                                    <i class="fa fa-user"></i>
                                    <span>My profile</span>
                                </a>


                                <div class="dropdown-divider"></div>
                                <a href="#!" class="dropdown-item">
                                    <i class="fa fa-sign-out-alt"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Omnisearch -->
        <div id="omnisearch" class="omnisearch">
            <div class="container">
                <!-- Search form -->
                <form class="omnisearch-form">
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-flush">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Type and hit enter ...">
                        </div>
                    </div>
                </form>
                <div class="omnisearch-suggestions">
                    <h6 class="heading">Search Suggestions</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="fa fa-search"></i>
                                        <span>Students</span> Available
                                    </a>
                                </li>

                                @yield('omisearch')

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="page-content">
            <!-- Page title -->
            <div class="page-title">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <h5 class="h3 font-weight-400 mb-0 text-white">Welcome John!</h5>
                        <span class="text-sm text-white opacity-8"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-md-6">
                    <div class="card card-fluid">
                        <div class="card-header">
                            <h6 class="mb-0"></h6>
                        </div>
                        <div class="card-body">
                                @yield('card_dash')
                        </div>
                    </div>
                </div>

            </div>
           @yield('row')
        </div>
        <!-- Footer -->
        <div class="footer pt-5 pb-4 footer-light" id="footer-main">
            <div class="row text-center text-sm-left align-items-sm-center">
                <div class="col-sm-6">
                    <p class="text-sm mb-0">&copy; 2021 <a href="" class="h6 text-sm" target="_blank"></a>. All rights reserved.</p>
                </div>
                <div class="col-sm-6 mb-md-0">
                    <ul class="nav justify-content-center justify-content-md-end">
                        <li class="nav-item dropdown border-right">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            </a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Scripts -->
<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="{{asset('assets/js/purpose.core.js')}}"></script>
<!-- Page JS -->
<script src="{{asset('assets/libs/progressbar.js/dist/progressbar.min.js')}}"></script>
<script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/libs/moment/min/moment.min.js')}}"></script>

<!-- Purpose JS -->
<script src="{{asset('assets/js/purpose.js')}}"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="{{asset('assets/js/demo.js')}}"></script>
@yield('js')


</body>
</html>
