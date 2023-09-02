<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap Css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2/dist/sweetalert2.min.css') }}">
    <title>Document</title>
    @yield('css')
</head>
<body>
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')

    @yield('js')
    {{-- Bootstrap Js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2/dist/sweetalert2.all.min.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery/dist/jquery.min.js') }}">
</body>
</html>