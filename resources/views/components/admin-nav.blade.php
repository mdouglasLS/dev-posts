<div class="d-flex align-items-center justify-content-end">
    <a href="{{ route('new-post') }}" class="btn btn-outline-primary me-4">Criar Post</a>

    <div class="dropdown d-flex align-items-end">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li>
                <a class="dropdown-item" href="{{ route('profile', Auth::user()->username) }}">
                    {{ '@' . Auth::user()->username }}
                </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Sair</button>
                </form></li>
        </ul>
    </div>
</div>
