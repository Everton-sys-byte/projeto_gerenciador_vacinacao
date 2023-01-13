<nav class="nav nav-tabs px-2">
    <a class="nav-link {{request()->segment(3) == 'perfil' ? 'active' : ''}}" aria-current="page" href="#">Perfil</a>
    <a class="nav-link {{request()->segment(3) == 'endereco' ? 'active' : ''}}" href="#">Endereço</a>
</nav>