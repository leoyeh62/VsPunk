<nav class="top-buttons">
    <a href="{{ route('test-vite') }}" class="btn btn-black" id="btn-creer">Créer</a>

    @auth
        <a href="{{ route('logout') }}" class="btn btn-black" id="btn-connecter"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Se déconnecter
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
            @csrf
        </form>
    @else
        <a href="{{ route('login') }}" class="btn btn-black" id="btn-connecter">Se connecter</a>
        <a href="{{ route('register') }}" class="btn btn-black" id="btn-register">S'inscrire</a>
    @endauth
</nav>