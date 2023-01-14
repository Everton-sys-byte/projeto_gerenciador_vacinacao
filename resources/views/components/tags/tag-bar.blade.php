<nav class="nav nav-tabs px-5">
    <a class="nav-link {{ request()->segment(3) == 'perfil' ? 'active' : '' }}" aria-current="page"
        href="{{ @route('user.configuration.profile') }}">Perfil</a>
    <a class="nav-link
        {{ request()->segment(3) == 'endereco' ? 'active' : '' }}"
        href="{{ @route('user.configuration.address') }}">Endereço</a>
</nav>
