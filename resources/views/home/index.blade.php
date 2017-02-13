@extends('user')
@section('content')
@include('partials.header', array("login" => Auth::check()))
<div teachme="root" class="main-wrapper col-xs-12">
    <div class="row">
        <div class="col-xs-12">
            <ul class="slideshow">
                <li>
                    <a href="test1.html">
                        <img src="{{ asset(config('path.imgs') . 'business-wallpaper-1280x1024.jpg') }}" title="Test 1" alt="Description for image 1">
                        <div class="slide-item" style="background-image: url({{ asset(config('path.imgs') . 'business-wallpaper-1280x1024.jpg') }})" title="Test 3" alt="Description for image 3"></div>
                    </a>
                </li>
                <li>
                    <a href="test2.html">
                        <img src="{{ asset(config('path.imgs') . 'designer_desk_top_view-wallpaper-1280x1024.jpg') }}" title="Test 2" alt="Description for image 2">
                        <div class="slide-item" style="background-image: url({{ asset(config('path.imgs') . 'designer_desk_top_view-wallpaper-1280x1024.jpg') }})" title="Test 3" alt="Description for image 3"></div>
                    </a>
                </li>
                <li>
                    <a href="test3.html">
                        <img src="{{ asset(config('path.imgs') . 'technology-wallpaper-1280x1024.jpg') }}" title="Test 3" alt="Description for image 3">
                        <div class="slide-item" style="background-image: url({{ asset(config('path.imgs') . 'technology-wallpaper-1280x1024.jpg') }})" title="Test 3" alt="Description for image 3"></div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@stop