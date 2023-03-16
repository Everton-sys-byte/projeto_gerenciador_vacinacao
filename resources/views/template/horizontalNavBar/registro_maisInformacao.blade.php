@php
    $items = [['rota' => '' . route('user.register'), 'nome' => 'Carteirinha'], ['rota' => '#', 'nome' => 'Mais informações']];
@endphp
<x-horizonatal-nav-bar.horizontal-nav-bar :items="$items" />