<nav class="navbar is-light">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('root') }}">
                <img src="{{ asset( '/storage/images/logo.png') }}" alt="{{ config('settings.site_title') }}">
            </a>
            <div id="toggle-menu" class="navbar-burger burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id="menu" class="navbar-menu">
            <div class="navbar-start">
                @foreach (getMenu() as $p)
                        <a class="navbar-item blue" href="{{ $p->link }}">
                            {{ $p->title }}
                        </a>
                @endforeach
            </div>
            <div class="navbar-end">
                <div class="navbar-item">

                    @if (Route::has('auth.login'))
                        @auth
                            {{\Auth()->user()->email}}
                            <a class="btn btn-outline-primary" href="{{ route('auth.logout') }}">Выйти</a>
                        @else
                            <a class="btn btn-outline-primary" href="{{ route('auth.login') }}">Войти</a>
                            @if (Route::has('auth.register'))
                                <a class="btn btn-outline-primary" href="{{ route('auth.register') }}">Регистрация</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
