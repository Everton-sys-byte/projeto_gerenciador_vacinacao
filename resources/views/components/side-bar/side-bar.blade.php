<nav class="side-bar position-fixed bg-light vh-100 p-2">
    <ul class="nav_group text-center list-unstyled mt-1 d-flex flex-column gap-1">
        <li class="p-2 rounded {{ request()->segment(2) == 'home' ? 'active' : '' }}">
            <x-anchor.anchor route="{{ @route('home') }}" svg="{{ @asset('images/svgs/list/house.svg') }}"
                type="Pagina inicial" />
        </li>
        @if (!auth()->user())
            <li class="p-2 rounded {{ request()->segment(2) == 'home' ? 'active' : '' }}">
                <x-anchor.anchor route="{{ @route('logar') }}" svg="{{ @asset('images/svgs/list/person-circle.svg') }}"
                    type="Login" />
            </li>
            <li class="p-2 rounded {{ request()->segment(2) == 'home' ? 'active' : '' }}">
                <x-anchor.anchor route="{{ @route('cadastrar') }}" svg="{{ @asset('images/svgs/list/person-add.svg') }}"
                    type="Cadastro" />
            </li>
        @else
            <li class="p-2 rounded {{ request()->segment(1) == 'vacinas' ? 'active' : '' }} ">
                <x-anchor.anchor route="{{ @route('vaccines.available') }}"
                    svg="{{ @asset('images/svgs/list/vaccines.svg') }}" type="Vacinas disponíveis" />
            </li>
            @if (session()->get('role') == 'comum')
                <li class="p-2 rounded {{ request()->segment(2) == 'carteirinha' ? 'active' : '' }}">
                    <x-anchor.anchor route="{{ @route('user.register') }} "
                        svg="{{ @asset('images/svgs/list/clipboard.svg') }}" type="Carteirinha" />
                </li>
            @endif
            @if (session()->get('role') == 'profissional')
                <li class="p-2 rounded {{ request()->segment(3) == 'vacinacao' ? 'active' : '' }}">
                    <x-anchor.anchor route="{{ @route('professional.apply.vacination') }} "
                        svg="{{ @asset('images/svgs/list/clipboard.svg') }}" type="Aplicar vacinação" />
                </li>
            @endif
            @if (session()->get('role') == 'admin')
                <li class="p-2 rounded {{ request()->segment(2) == 'gerenciar' ? 'active' : '' }}">
                    <x-anchor.anchor route=" {{ @route('admin.manage.users') }} "
                        svg="{{ @asset('images/svgs/list/people.svg') }}" type="Gerenciar usuários" />
                </li>
            @endif
        @endif
    </ul>
</nav>
