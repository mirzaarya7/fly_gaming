@php
$noPreloader = true;
@endphp
<!DOCTYPE html>
<html class="no-js" lang="id">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Fly Gaming Store || @yield('title', 'Beranda')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/logo.png') }}" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-5.0.0-beta2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
</head>

<body>

    {{-- Panggil Header --}}
    @include('partial.header2')

    {{-- Di sinilah konten dari wr.blade.php akan disuntikkan --}}
    @yield('content')

    {{-- Panggil Footer --}}
    @include('partial.footer')

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Di sinilah script khusus dari wr.blade.php akan disuntikkan --}}
    @yield('script')

</body>

</html>