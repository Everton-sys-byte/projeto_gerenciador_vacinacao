@php
    $contador = 0;
@endphp
<div class="container-fluid p-0 d-flex flex-row my-1">
    @foreach ($items as $item)
        <x-anchor.anchor :route="$item['rota']" :type="$item['nome']" svg=""/>
        @if ($contador < count($items) - 1)
            <img src="{{ @asset('images/svgs/list/chevron.svg') }}" alt="chevron">
        @endif
        @php
            $contador++;
        @endphp
    @endforeach
</div>
