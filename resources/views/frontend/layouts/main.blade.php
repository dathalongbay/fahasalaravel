<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('/fahasa') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/fahasa') }}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/fahasa') }}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/fahasa') }}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/fahasa') }}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/fahasa') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/fahasa') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/fahasa') }}/css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>




@include('frontend.partials.header')

@yield('content')

@include('frontend.partials.footer')

<!-- Js Plugins -->
<script src="{{ asset('/fahasa') }}/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('/fahasa') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('/fahasa') }}/js/jquery.nice-select.min.js"></script>
<script src="{{ asset('/fahasa') }}/js/jquery-ui.min.js"></script>
<script src="{{ asset('/fahasa') }}/js/jquery.slicknav.js"></script>
<script src="{{ asset('/fahasa') }}/js/mixitup.min.js"></script>
<script src="{{ asset('/fahasa') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('/fahasa') }}/js/main.js"></script>



</body>

</html>