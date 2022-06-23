
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('auth/style/style.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>

    <section class="section-login mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-7 m-auto">
                    <h1 class="text-center color-primary mb-2">Doctor SignUp</h1>
                    <p class="text-center section-p">
                        Create Your Account to Discover More
                        <br />
                    </p>
                    <div class="mt-5">

                        <form method="POST" action="{{ route('doctor.confirmregister') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name" class="color-primary mb-2">{{ __('Name') }}</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="email" class="color-primary mb-2">{{ __('Email Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="password" class="color-primary mb-2 ">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="password" class="color-primary mb-2 ">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            {{-- <div class="form-group remember-forget">
                                <div class="remember-me">
                                    <input type="checkbox" name="" id="">
                                    <label class="custom-bold">I agree to the <span class="custom-color">Terms of
                                            Service</span> and <span class="custom-color">Privacy
                                            Policy</span></label>
                                </div>
                            </div> --}}
                    </div>
                    <div class="form-group btn-submit mt-5">
                        <button type="submit" class="btn btn-primary btn-block another-one">Sign Up</button>
                    </div>
                    </form>
                    <p class="text-center color-primary mt-2">
                        Already have an account? <a class="custom-color" href="{{route('doctor.login')}}">
                            log in
                        </a>
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <h1>hahah</h1>

    <form action="{{ route('doctor.confirmregister') }}" method="POST">
        @csrf


        <input type="text" name="name">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="password" name="password_confirmation">

        <button type="submit">register</button>

    </form>
</body>

</html> --}}
