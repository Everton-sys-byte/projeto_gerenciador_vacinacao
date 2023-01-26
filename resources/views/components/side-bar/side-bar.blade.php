<nav class="side-bar position-fixed bg-light vh-100 p-2">
    <ul class="nav_group text-center list-unstyled mt-1 d-flex flex-column gap-1">
        <li class="p-2 rounded {{ request()->segment(2) == 'home' ? 'active' : '' }}">
            <x-anchor.anchor route="{{ @route('user.home') }}" svg="{{ @asset('images/svgs/list/house.svg') }}"
                type="Home" />
        </li>
        <li class="p-2 rounded {{ request()->segment(1) == 'vacinas' ? 'active' : '' }} ">
            <x-anchor.anchor route="{{ @route('vaccines.available') }}" svg="{{ @asset('images/svgs/list/house.svg') }}"
                type="Vacinas disponíveis" />
        </li>
        @if (session()->get('role') == 'comum')
            <li class="p-2 rounded ">
                <x-anchor.anchor route="{{ @route('vaccines.available') }} "
                    svg="{{ @asset('images/svgs/list/house.svg') }}" type="Carteirinha" />
            </li>
        @endif
        @if (session()->get('role') == 'profissional')
            <li class="p-2 rounded ">
                <x-anchor.anchor route="{{ @route('professional.apply.vacination') }} "
                    svg="{{ @asset('images/svgs/list/house.svg') }}" type="Aplicar vacinação" />
            </li>
        @endif
        @if (session()->get('role') == 'admin')
            <li class="p-2 rounded {{ request()->segment(2) == 'gerenciar' ? 'active' : '' }}">
                <x-anchor.anchor route=" {{ @route('admin.manage.users') }} "
                    svg="{{ @asset('images/svgs/list/gear.svg') }}" type="Gerenciar usuários" />
            </li>
        @endif
    </ul>
</nav>
