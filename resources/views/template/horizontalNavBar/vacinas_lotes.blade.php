@php
    $items = [['rota' => '' . route('vaccines.available'), 'nome' => 'Vacinas disponíveis'], ['rota' => '#', 'nome' => 'Lotes']];
@endphp
<x-horizonatal-nav-bar.horizontal-nav-bar :items="$items" />
