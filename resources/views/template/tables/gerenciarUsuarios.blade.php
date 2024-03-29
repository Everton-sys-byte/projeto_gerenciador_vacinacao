<x-table.table>
    <x-slot name="trhead">
        <th>#</th>
        <th>Avatar</th>
        <th>CPF</th>
        <th>Nome Completo</th>
        <th>Data de nascimento</th>
        <th>Papéis</th>
        <th>Status</th>
        <th>Ações</th>
    </x-slot>
    <x-slot name="trbody">
        @php
            $contador = 1;
        @endphp
        @foreach ($users as $user)
            <tr>
                <td>{{ $contador }}</td>
                <td>
                    <img src="/images/avatar/{{ $user->avatar }}" alt="Avatar usuario" width="40" height="40"
                        class="rounded-circle">
                </td>
                <td>{{ $user->cpf }}</td>
                <td>{{ $user->nome_completo }}</td>
                <td>{{ $user->getDataNascimento() }}</td>
                <td>
                    <ul class="list-unstyled">
                        @foreach ($user->roles()->get() as $role)
                            <li> {{ $role->tipo }} </li>
                        @endforeach
                    </ul>
                </td>
                <td>{{ $user->status }}</td>
                <td>
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/images/svgs/dropdown/threedots.svg" alt="Tres pontinhos">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#maisInformacoes" user="{{ $user }}">
                                Mais informações</a></li>
                        @if (!$user->hasRole('admin'))
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#editUser" user="{{ $user }}">Editar</a></li>
                        @endif
                    </ul>
                </td>
            </tr>
            @php
                $contador += 1
            @endphp
        @endforeach
    </x-slot>
</x-table.table>