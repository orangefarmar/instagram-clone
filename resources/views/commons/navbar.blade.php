<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">📷 ｜ instagram-clone</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                    <li>{!! link_to_route('users.show','プロフィール',['id' => Auth::id()]) !!}</li>
                    <li>{!! link_to_route('logout.get','ログアウト') !!}</li>
                    @else
                    <li>{!! link_to_route('signup.get','新規登録') !!}</li>
                    <li>{!! link_to_route('login','ログイン') !!}</li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>