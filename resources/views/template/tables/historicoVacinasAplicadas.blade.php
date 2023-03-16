<x-table.table>
    <x-slot name="trhead">
        <th>#</th>
        <th>Avatar</th>
        <th>CPF</th>
        <th>Nome imunizado</th>
        <th>Lote</th>
        <th>Vacina</th>
        <th>Data de vacinação</th>
        <th>Ações</th>
    </x-slot>
    <x-slot name="trbody">
        @php
            $contador = 1;
        @endphp
        @foreach ($registros as $registro)
            <tr>
                <td>{{ $contador }}</td>
                <td>
                    <img src="/images/avatar/{{ $registro->imunizado->avatar }}" alt="Avatar usuario" width="40" height="40"
                        class="rounded-circle">
                </td>
                <td>{{ $registro->imunizado->cpf }}</td>
                <td>{{ $registro->imunizado->nome_completo }}</td>
                <td>{{ $registro->lote->codigo }}</td>
                <td>{{ $registro->lote->vacina->nome }}</td>
                <td>{{ $registro->data_vacinacao }}</td>
                <td>
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/images/svgs/dropdown/threedots.svg" alt="Tres pontinhos">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#maisInformacoesRegistro" registro="{{ $registro }}">
                                Mais informações</a></li>
                    </ul>
                </td>
            </tr>
            @php
                $contador += 1
            @endphp
        @endforeach
    </x-slot>
</x-table.table>
