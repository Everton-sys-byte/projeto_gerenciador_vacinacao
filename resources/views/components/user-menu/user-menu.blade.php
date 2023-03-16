<div class="user-container position-relative d-flex flex-column align-items-center">
    <div class="user-welcome d-flex flex-row align-items-center gap-2">
        <span class="text-light">{{ auth()->user()->nome_completo }}</span>
        <div class="user-image rounded-circle">
            <img src="/images/avatar/{{ auth()->user()->avatar }}" role="button" />
        </div>
    </div>
    <div class="drop-down-user-menu position-absolute bg-transparent rounded">
        <ul class="text-dark list-unstyled p-1 bg-light rounded">
            <li class="p-1">
                <x-anchor.anchor route="{{ @route('user.profile') }}" type="Perfil"
                    svg="{{ @asset('images/svgs/list/person.svg') }}" />
            </li>
            <li class="p-1">
                <x-anchor.anchor route="{{ @route('user.logout') }}" type="Logout"
                    svg="{{ @asset('images/svgs/list/door-closed.svg') }}" />
            </li>
        </ul>
    </div>
</div>
