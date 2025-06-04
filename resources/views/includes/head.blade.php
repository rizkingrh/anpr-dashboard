<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<!-- ================== BEGIN BASE CSS STYLE ================== -->
<link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" />
<!-- ================== END BASE CSS STYLE ================== -->

<title>ANPR | @yield('title')</title>
<link rel="icon" href="{{ asset('assets/img/ksp_icon.png') }}">

<meta name="csrf-token" content="{{ csrf_token() }}">

@livewireStyles
@stack('css')
