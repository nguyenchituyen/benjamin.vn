<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>benjamin - @yield('title')</title>
    {!! Html::style('css/bootstrap.min.css')!!}
    {!! Html::style('css/elegant-icons-style.css')!!}
    {!! Html::style('css/font-awesome.min.css')!!}
    {!! Html::style('css/style.css')!!}
    {!! Html::style('css/style.css')!!}
    {!! Html::style('css/style-responsive.css')!!}
    {{-------if have error please install laravelcollective/Html-------}}
</head>
<body>
<section id="container" class="">
    @include('admin.layouts.header.header')
    @include('admin.layouts.sidebar.sidebar')
    <section id="main-content">
        <section class="wrapper">
            {{--@include('layouts.flash_message')--}}
            {{--@include('layouts.page_header')--}}
            @yield('content')
        </section>
    </section>
</section>
{!! Html::script('js/jquery-1.8.3.min.js') !!}
{!! Html::script('js/jquery-ui-1.9.2.custom.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/jquery.scrollTo.min.js') !!}
{!! Html::script('js/jquery.nicescroll.js') !!}
{!! Html::script('js/scripts.js') !!}