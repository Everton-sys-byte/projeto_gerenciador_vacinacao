@php
    $items = [['rota' => '' . route('user.profile'), 'nome' => 'Perfil'], ['rota' => '' . route('user.configuration.profile'), 'nome' => 'Configurar']];
@endphp
<x-horizonatal-nav-bar.horizontal-nav-bar :items="$items" />
