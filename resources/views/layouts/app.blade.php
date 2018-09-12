<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Michael">
        <meta name="description" content="Sponsor students to help them finish their school.">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @env('local')
        <!-- Styles -->
        <link rel="stylesheet" href="/fmt-bower/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="/fmt-bower/cropper/dist/cropper.css" >
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href='http://fonts.font.im/css?family=Source+Sans+Pro'>
        <link rel="stylesheet" href='/fmt-bower/font-awesome/web-fonts-with-css/css/fontawesome-all.css'>
        <link type="image/x-icon" href="/ico/m.ico" >
        <!-- Scripts -->
        <script src="/fmt-bower/jquery/dist/jquery.js"></script>
        <script src="/fmt-bower/cropper/dist/cropper.js"></script>
        <script src="/fmt-bower/jquery-ui/jquery-ui.js"></script>
        <script src="/fmt-bower/bootstrap/site/docs/4.1/assets/js/vendor/popper.min.js"></script>
        <script src="/fmt-bower/bootstrap/dist/js/bootstrap.js"></script>
        <script src="/fmt-bower/bootstrap/dist/js/bootstrap.bundle.js"></script>
        <script src="/js/app.js"></script>
        @else
        <link rel="stylesheet" href="/fmt-bower/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/fmt-bower/cropper/dist/cropper.min.css" >
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href='http://fonts.font.im/css?family=Source+Sans+Pro'>
        <link rel="stylesheet" href='/fmt-bower/font-awesome/web-fonts-with-css/css/fontawesome-all.min.css'>
        <link type="image/x-icon" href="/ico/m.ico" >
        <!-- Scripts -->
        <script src="/fmt-bower/jquery/dist/jquery.min.js"></script>
        <script src="/fmt-bower/cropper/dist/cropper.min.js"></script>
        <script src="/fmt-bower/jquery-ui/jquery-ui.min.js"></script>
        <script src="/fmt-bower/bootstrap/site/docs/4.1/assets/js/vendor/popper.min.js"></script>
        <script src="/fmt-bower/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/fmt-bower/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/js/app.js"></script>
        @endenv
        <script src="/fmt-bower/jquery-form/dist/jquery.form.min.js"></script>
    </head>
    <body>
        <div class="d-flex flex-column flex-md-row align-items-center p-2 px-md-4 mb-2 bg-gray-dark border-bottom shadow-sm">
            <img style="width:30px;height:30px;max-width:100%;max-height:100%;margin-right:10px" src="/ico/m.ico" href="http://homestead.test/" title="Fund My Tuition"></img>
            <h5 class="my-0 mr-md-auto font-weight-normal">Fund My Tuition</h5>
    @guest
            <a class="p-2 text-dark" href="#">Features</a>
            <a class="p-2 text-dark" href="#">Enterprise</a>
            <a class="p-2 text-dark" href="#">Support</a>
            <a class="p-2 text-dark" href="{{ route('login') }}">Login</a>
            <a class="btn btn-outline-primary" href="{{ route('register') }}">Sign up</a>
    @else
            <a class="p-2 text-dark" href="#">Dashboard</a>

            <a class='p-2 text-dark' href="{{ route('profiles.show', Auth::user()->id) }}">Profile</a>
            <a class="p-2 text-dark" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
    @endguest
        </div>
    @include('partials.errors')
    @include('partials.success')
    @yield('content')
    </body>
</html>
