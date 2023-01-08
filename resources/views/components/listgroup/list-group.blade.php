<div class="container-fluid overflow-hidden p-0">
    <!-- Be present above all else. - Naval Ravikant -->
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 g-2">
        @foreach ($itens as $item)
            <x-card.card :cardType="$type" :cardSubTitle="$item->nome" :cardInformation="$item->descricao" />
        @endforeach
    </div>
</div>
