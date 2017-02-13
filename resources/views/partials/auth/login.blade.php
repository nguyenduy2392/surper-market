<div class= "login-dlg">
    <h4 class="title">ĐĂNG NHẬP</h4>
    <form class="form-horizontal" role="form" method="POST" action="javascript:void(0);">
        {{ csrf_field() }}
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail">
        <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
        <div id="action">
            <button type="submit" class="btn btn-primary" data-action-link="{{ URL::action('Auth\LoginController@postLogin') }}">Đăng nhập</button>
            <a class="btn btn-link" href="{{ route('password.request') }}">Quyên mật khẩu?</a>
        </div>
    </form>
</div>