<header class="col-xs-12 header-basic">
    <div class="row">
        <div class="header-limiter">
            <h1><a href="#">Company<span>logo</span></a></h1>
            <nav>
                <a href="#">Home</a>
                <a href="#" class="selected">Blog</a>
                <a href="#">Pricing</a>
                <a href="#">About</a>
                <a href="#">Faq</a>
                <a class="login-name {{ ($login ? 'login-show' : 'login-hide') }}" href="#">{{ $login ? Auth::user()->name : '' }}</a>
                <a class="logout-dlg-link {{ ($login ? 'login-show' : 'login-hide') }}" href="javascript:void(0);" data-action-link="{{ URL::action('Auth\LoginController@postLogout') }}">Logout</a>
                <a class="login-dlg-link {{ ($login ? 'login-hide' : 'login-show') }}" href="#inline_content">Login</a>
            </nav>
        </div>
    </div>
</header><!-- end fixed header -->
<div id="login-dlg-content" class="col-xs-6">
    <div id='inline_content' style='padding:10px; background:#fff;'>
        @include('partials.auth.login')
    </div>
</div>
<nav class="menu-home-page col-xs-12">
    <ul class="dropdown">
        <li class="drop"><a href="#">Really Tall Menu</a>
            <ul class="sub_menu">
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Ipsum</a></li>
                <li><a href="#">Dolor</a></li>
                <li><a href="#">Lipsum</a></li>
                <li><a href="#">Consectetur </a></li>
                <li><a href="#">Duis</a></li>
                <li><a href="#">Sed</a></li>
                <li><a href="#">Natus</a></li>
                <li><a href="#">Excepteur</a></li>
                <li><a href="#">Voluptas</a></li>
                <li><a href="#">Voluptate</a></li>
                <li><a href="#">Malorum</a></li>
                <li><a href="#">Bonorum</a></li>
                <li><a href="#">Nemo</a></li>
                <li><a href="#">Quisquam</a></li>
                <li><a href="#">Adipisci </a></li>
                <li><a href="#">Excepteur</a></li>
                <li><a href="#">Consectetur </a></li>
                <li><a href="#">Duis</a></li>
                <li><a href="#">Voluptate</a></li>
                <li><a href="#">Ipsum</a></li>
                <li><a href="#">Dolor</a></li>
                <li><a href="#">Lipsum</a></li>
            </ul>
        </li>
        <li class="drop"><a href="#">Kinda Tall Menu</a>
            <ul class="sub_menu">
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Ipsum</a></li>
                <li><a href="#">Dolor</a></li>
                <li><a href="#">Lipsum</a></li>
                <li><a href="#">Consectetur </a></li>
                <li><a href="#">Duis</a></li>
                <li><a href="#">Sed</a></li>
                <li><a href="#">Natus</a></li>
                <li><a href="#">Excepteur</a></li>
                <li><a href="#">Voluptas</a></li>
                <li><a href="#">Voluptate</a></li>
                <li><a href="#">Malorum</a></li>
                <li><a href="#">Bonorum</a></li>
                <li><a href="#">Nemo</a></li>
                <li><a href="#">Quisquam</a></li>
                        
            </ul>
        </li>
        <li class="drop"><a href="#">Average Menu</a>
            <ul class="sub_menu">
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Ipsum</a></li>
                <li><a href="#">Dolor</a></li>
                <li><a href="#">Lipsum</a></li>
                <li><a href="#">Consectetur </a></li>
            </ul>
        </li>
        <li><a href="#">No Menu</a></li>
    </ul>
</nav> 