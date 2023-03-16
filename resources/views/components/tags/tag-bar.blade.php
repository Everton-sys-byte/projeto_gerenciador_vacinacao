<nav {{ $attributes->merge(['class' => 'nav nav-tabs mb-3']) }}>
    <a class="nav-link 
        {{ request()->segment(3) == 'perfil' ? 'active' : '' }}" aria-current="page"
        href="{{ @route('user.configuration.profile') }}">Perfil</a>
    <a class="nav-link
        {{ request()->segment(3) == 'endereco' ? 'active' : '' }}"
        href="{{ @route('user.configuration.address') }}">Endereço</a>
    <a class="nav-link
        {{ request()->segment(3) == 'senha' ? 'active' : '' }}"
        href="{{ @route('user.configuration.password') }}">Senha</a>
</nav>
