<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Market</title>
        {!! HTML::style('/css/common.css') !!}
        {!! HTML::style('/css/app.css') !!}
        {!! HTML::style('/css/view/header.css') !!}
        {!! HTML::style('css/view/home.css'); !!}
        {!! HTML::style('css/vendor.css'); !!}
        {!! HTML::script('js/vendor.js'); !!}
        {!! HTML::script('js/main.js'); !!}
    </head>
    
    <!--<body data-base="{{URL::to('/')}}" bata-path="{{URL::to('/')}}" class="manual-editor open">-->
    <body data-base="{{URL::to('/')}}" data-path="{{URL::to('/')}}" class="">
        <div id='wrapper' class="content">
            @yield('content')
        </div>
        <!-- plugins -->
        
        @yield('js')
        {!! HTML::script('js/menubar.js'); !!}
        {!! HTML::script('js/slide.js'); !!}
    </body>
</html>