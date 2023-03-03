<header class="bg-dark fixed-top">
    <nav class="py-2 px-4 border-bottom">
        <div class="container d-flex align-items-center justify-content-md-between">

            <x-application-logo class="fs-5"/>

            <div class="w-50">
                <form action="{{ route('search') }}" method="get">
                    <x-input-search/>
                </form>
            </div>

            @auth()
                <x-admin-nav/>
            @endauth
            @guest()
                <div class="text-end">
                    <a href=" {{route('login')}}" class="btn btn-outline-light me-2">Entrar</a>
                    <a href="{{ route('register') }}" class="btn btn-primary">Cadastrar</a>
                </div>
            @endguest

        </div>
    </nav>
</header>
