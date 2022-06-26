<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- custom bootstrap4 link  and css-->
        <link rel="stylesheet" href="{{ asset('doctor/css/bootstrap.css') }}">

        <!-- font awesome file -->
        <link rel="stylesheet" href="{{ asset('doctor/css/font-awesome.min.css') }}">
         <!-- aos animation file -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

         <!-- home page css style file -->
         <link rel="stylesheet" href="{{ asset('doctor/css/patient_details.css') }}">

        <title>Patient Details</title>
    </head>
    <body>

        <!-- start asideBar -->
        @include('doctor.side')
        <!-- end asideBar -->

        <!-- main section -->
        <section class="container-content col-md-8 col-9">
            <h1 class="title mb-5">Good Morning,</h1>

                <div class="patient_details_wrapper">

                    <div class="patient_profile">
                        <div class="img">
                            <img src="{{ asset('doctor/images/Mental health-amico.png') }}" alt="patient_image_profile">
                        </div>
                        <div class="patient_info">
                            <h3 class="name">{{$user->name}}</h3>
                            <span class="email">{{$user->email}}</span>
                        </div>
                    </div><!-- ./patient_profile -->

                    <div class="more_details">
                        <div>
                            <h3>Age</h3>
                            <span>{{$user->age}}</span>
                        </div>
                        <div>

                            <h3>Disease</h3>

                        @isset($user->diseases->name)
                            <span>{{$user->diseases->name}}</span>

                            @else

                            <span>Not defined</span>
                        @endisset


                        </div>
                        <div>
                            <h3>Doctor</h3>
                            <span>{{Auth::guard('webdoctor')->user()->name}}</span>
                        </div>
                        <div>

                            <h3>Survey Score</h3>

                        @isset($user->survey_score)
                            <span>{{$user->survey_score}}</span>

                            @else

                            <span>Not defined</span>
                        @endisset


                        </div>

                    </div><!-- ./more_details -->


                    <div class="cart_details">

                        <div class="cart_item">
                            <div class="d-flex align-items-center">
                                <div class="mr-3 icon">
                                    <img src="{{ asset('doctor/images/icon/rating.png') }}" alt="">
                                </div>
                                <div class="desc">
                                    <span>mode</span>
                                    <h3>smile</h3>
                                </div>
                            </div>
                            <div class="rating">75%</div>
                        </div>


                        <div class="cart_item">
                            <div class="d-flex align-items-center">
                                <div class="mr-3 icon">
                                    <img src="{{ asset('doctor/images/icon/rating-5.png') }}" alt="">
                                </div>
                                <div class="desc">
                                    <span>note</span>
                                    <h3>Lorem ipsum...</h3>
                                </div>
                            </div>
                            <div class="rating">73%</div>
                        </div>


                        <div class="cart_item">
                            <div class="d-flex align-items-center">
                                <div class="mr-3 icon">
                                    <img src="{{ asset('doctor/images/icon/rating-1.png') }}" alt="">
                                </div>
                                <div class="desc">
                                    <span>art</span>
                                    <h3>Drawing</h3>
                                </div>
                            </div>
                            <div class="rating">40%</div>
                        </div>

                        <div class="cart_item">
                            <div class="d-flex align-items-center">
                                <div class="mr-3 icon">
                                    <img src="{{ asset('doctor/images/icon/rating-4.png') }}" alt="">
                                </div>
                                <div class="desc">
                                    <span>Lifestyle</span>
                                    <h3>Lorem ipsum...</h3>
                                </div>
                            </div>
                            <div class="rating">23%</div>
                        </div>

                        <div class="cart_item">
                            <div class="d-flex align-items-center">
                                <div class="mr-3 icon">
                                    <img src="{{ asset('doctor/images/icon/rating-2.png') }}" alt="">
                                </div>
                                <div class="desc">
                                    <span>Activity</span>
                                    <h3>Drawing</h3>
                                </div>
                            </div>
                            <div class="rating">12%</div>
                        </div>


                        <div class="cart_item">
                            <div class="d-flex align-items-center">
                                <div class="mr-3 icon">
                                    <img src="{{ asset('doctor/images/icon/rating-3.png') }}" alt="">
                                </div>
                                <div class="desc">
                                    <span>Breathing</span>
                                    <h3>Lorem ipsum...</h3>
                                </div>
                            </div>
                            <div class="rating">88%</div>
                        </div>


                     </div><!-- ./patient_details_wrapper -->

                     <div class="next_appointment">
                        <h2 class="title mb-4">Next appointment</h2>
                        <div class="d-flex next-parent ">
                            <div class="next_appointment_item">
                                <span class="date date-day">day</span>
                                <div class="date-box">
                                    <span>12/6/2022</span>
                                    <span><img src="images/icon/vuesax-outline-calendar-2.png" alt=""></span>
                                </div>
                            </div>

                            <div class="next_appointment_item">
                                <span class="date date-hour">Hour</span>
                                <div class="date-box">
                                    <span>05:36 PM</span>
                                    <span><img src="images/icon/vuesax-outline-clock.png" alt=""></span>
                                </div>
                            </div>
                        </div>
                     </div><!-- ./next_appointment -->

                     <div class="nots">
                        <h2 class="title mb-4">note</h2>
                        <div class="text-wrapper">
                            <div class="note-text-area">
                                {{$user->doctor_note}}
                             </div>
                        </div>
                        <button class="done">done</button>
                     </div>
                </div><!-- ./patient_details_wrapper -->
        </section>
        <!-- main section -->

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{ asset('doctor/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('doctor/js/popper.min.js') }}"></script>
        <script src="{{ asset('doctor/js/bootstrap.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('doctor/js/main.js') }}"></script>
    </body>
</html>
