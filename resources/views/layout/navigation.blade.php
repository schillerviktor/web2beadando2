<nav class="site-header navbar navbar-expand-lg sticky-top mb-5" style="background-color: #34A853;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-around" id="main_nav">
        <ul class="navbar-nav">
            @each('layout.sub-nav', $menulist, 'menu', 'empty')
        </ul>
        <div>
            @auth
                <p class="py-2 d-none d-md-inline-block m-0">
                    Bejelentkezve: {{ auth()->user()->username }} </p>
                <span> - </span>
                <a class="py-2 d-none d-md-inline-block" href="{{ route('logout.perform') }}">Kilépés</a>
            @endauth
            @guest
                <a class="py-2 d-none d-md-inline-block" href="{{ route('login.perform') }}">Belépés</a>
                /
                <a class="py-2 d-none d-md-inline-block" href="{{ route('register.perform') }}">Regisztráció</a>
            @endguest
        </div>
    </div> <!-- navbar-collapse.// -->
</nav>
