<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teachme App</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body data-base="{{URL::to('/')}}" data-path="{{URL::to('/')}}">
	@include('partials.header');
	<div class="filter-bar">
		<div class="container menu">
			<a href="#" class="back-icon"> Back</a>
			<!-- Filter -->
			<div class="dropdown pull-right">
			  <div class="menu-item" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">		    
					名前順
			    <span class="caret"></span>
			  </div>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
			    <li><a href="#">オススメ順</a></li>
			    <li><a href="#">更新日順</a></li>
			    <li><a href="#">閲覧回数順</a></li>
			    <li><a href="#">評価順</a></li>
			    <li><a href="#">名前順</a></li>
			  </ul>
			</div>
			<!-- Categories -->
			<div class="dropdown pull-right">
			  <div class="menu-item" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">		    
					カテゴリ別
			    <span class="caret"></span>
			  </div>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
			    <li><a href="#">All</a></li>
			    <li><a href="#">Cosmetic</a></li>
			    <li><a href="#">Education</a></li>
			    <li><a href="#">Kids</a></li>
			    <li><a href="#">Story</a></li>
			    <li><a href="#">Activity</a></li>
			    <li><a href="#">Cooking</a></li>
			    <li><a href="#">Lifestyle</a></li>
			    <li><a href="#">Hobby</a></li>
			    <li><a href="#">Access</a></li>
					<li><a href="#">Travel</a></li>
			    <li><a href="#">Technology</a></li>
			  	<li><a href="#">Promotion</a></li>
			  	<li><a href="#">Business</a></li>
			  </ul>
			</div>
		</div>
	</div>
	
	@yield('content')
	@include('partials.footer');
	<!-- Scripts -->
	
	
	<!-- <script src="{{ asset('/js/vendor.js') }}"></script>
	<script src="{{ asset('/js/main.js') }}"></script>
	<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"></script> -->
	
</body>
</html>