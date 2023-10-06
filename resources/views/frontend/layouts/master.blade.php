<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>@yield('title','xyz')</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

@include('frontend.layouts.partials.style')
@stack('custom_style')

</head>

<body>

     @include('frontend.layouts.partials.top_bar')
     @include('frontend.layouts.partials.header')
     @yield('frontend_panel')
     @include('frontend.layouts.partials.footer')
     @include('frontend.layouts.partials.script')
     @stack('custom_script')


</body>

</html>
