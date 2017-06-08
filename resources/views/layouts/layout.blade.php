<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Benjamin-@yield('title')</title>
    {!! Html::style('css/bootstrap.min.css')!!}
    {!! Html::style('css/font-awesome.min.css')!!}
    {!! Html::style('css/prettyPhoto.css')!!}
    {!! Html::style('css/price-range.css')!!}
    {!! Html::style('css/animate.css')!!}
    {!! Html::style('css/main.css')!!}
    {!! Html::style('css/responsive.css')!!}

    <!--[if lt IE 9]>
    {!! Html::script('js/html5shiv.js')!!}
    {!! Html::script('js/respond.min.js')!!}
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<section id="container" class="">
    @include('layouts.header.header')
    <section id="main-content">
        <section class="wrapper">
            @yield('content')
        </section>
    </section>
    @include('layouts.footer.footer')
</section>
{!! Html::script('js/jquery.js')!!}
{!! Html::script('js/bootstrap.min.js')!!}
{!! Html::script('js/jquery.scrollUp.min.js')!!}
{!! Html::script('js/price-range.js')!!}
{!! Html::script('js/jquery.prettyPhoto.js')!!}
{!! Html::script('js/main.js')!!}
</body>
</html>