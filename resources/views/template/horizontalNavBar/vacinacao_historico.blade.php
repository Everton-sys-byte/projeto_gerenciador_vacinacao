@php
    $items = [['rota' => '' . route('professional.apply.vacination'), 'nome' => 'Aplicar vacinação'], ['rota' => '' . route('professional.view.historic'), 'nome' => 'Ver histórico']];
@endphp
<x-horizonatal-nav-bar.horizontal-nav-bar :items="$items" />
