<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!--Font-awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--Style CSS-->
    <link rel="stylesheet" href="{{ asset('auth/style/style.css') }}">

</head>

<body>
    <header class="header" id="header">
        <nav class="navbar navbar-expand-lg col-12 sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('auth/assets/logo.png')}}" alt="logo" class="logo" width="40" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contactUs">Contact Us</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">

                        @guest
                            <div class="signup">
                                <a href="{{route('doctor.register')}}" class=" btn-signup">Sign Up</a>
                            </div>
                            <div class="login">
                                <a href="{{route('doctor.login')}}" class="btn-login">Login</a>
                            </div>
                        @else
                            @if (Auth::user()->user_type == 2)
                                <div class="signup">
                                    <a href="{{route("admin.users")}}" class=" btn-signup">Dashboard</a>
                                </div>
                            @endif

                            <div class="login">
                                <a href="#" class="btn-login">{{Auth::user()->name}}</a>
                            </div>

                            <div class="login">
                                <a class="btn-login" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} <i class="fas fa-sign-out-alt"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>

                        @endguest

                    </div>
                </div>
            </div>
        </nav>
    </header>

    <a href="JavaScript:void(0);" class="scroll-top" onclick="scrolltop()"><i class="fas fa-arrow-up"></i></a>

    <main class="main-page">
        <!-- start home -->
        <section class="section-home mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 section-text section-text-left anothar-text">
                        <p>If you suffer from anxiety or depression</p>
                    </div>
                    <div class="col-md-6 m-auto text-center section-image">
                        <img src="{{asset('auth/assets/Group 9502.png')}}" alt="logo" class="logo-page" width="80%"
                            height="80%">
                    </div>
                    <div class="col-md-3 section-text section-text-right">
                        <p>We Here to help You</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end home -->

        <!-- start services -->
        <section class="section-services mt-5 pt-5 mb-4" id="services">
            <div class="container-fluid">
                <div class="row">
                    <h3 class="text-center color-primary mb-5">Services</h3>
                    <div class="col-md-6 m-auto">
                        <h6>About us ... </h6>
                        <p class="color-primary">
                            We welcome you to our Mindful guide to mental health awareness, which includes a variety of doctors who has a  specialized degree in (CBT) and (ERP) methods.
Keep reading to learn more about mental health that enables us to find more joy in daily living.

                        </p>
                    </div>

                    <div class="col-md-6">
                        <div class="images-gruop w-100">
                            <div class="d-flex flex-column justify-content-between align-items-center w-100 ml-3 mr-3">
                                <img src="{{asset('auth/assets/pexels-michael-burrows-7147832.jpg')}}" alt="logo" class="image-page rounded-2 mb-3"
                                    width="90%" height="200">
                                <img src="{{asset('auth/assets/hansunsplash.jpg')}}" alt="logo" class="image-page rounded-2"
                                    width="90%" height="200">
                            </div>
                            <!-- <div> -->
                            <img src="{{asset('auth/assets/pexels-natalie-3759657.jpg')}}" alt="logo" class="image-three rounded-2" width="90%"
                                height="420">
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
        </section>
        <!-- end services -->

        <!-- start contact Us -->
        <section class="section-contact-us mt-5  mb-5 pt-5" id="contactUs">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center color-primary mb-1">Contact Us</h3>
                        <p class="text-center section-p">
                            SEND US A MESSAGE
                            <br />
                        </p>
                        <div class="col-md-8 m-auto">
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="" rows="8"></textarea>
                            <button class="btn btn-primary mt-3">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact Us -->
    </main>

    <footer class="footer">
        <h5 class="text-center color-primary mb-4">All Rights Reserved</h5>
    </footer>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <!--JavaScript File-->
    <script src="{{asset('auth/js/main.js')}}"></script>
</body>

</html>
