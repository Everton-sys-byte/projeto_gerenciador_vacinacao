<header class="container-fluid bg-primary py-2 px-2 px-lg-5 position-sticky top-0 d-flex align-items-center justify-content-between" style="z-index: 10">
    <div class="burger-button d-flex flex-column justify-content-around p-1" role="button">
        <div class="linha bg-white rounded"></div>
        <div class="linha bg-white rounded"></div>
        <div class="linha bg-white rounded"></div>
    </div>
    @if(auth()->user())
        <x-user-menu.user-menu/>
    @endif
</header>