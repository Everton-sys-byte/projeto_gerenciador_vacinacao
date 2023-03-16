{{-- TITULO DO PDF --}}
<title>Comprovante de vacinação do registro {{ $registro->uuid }}</title>
<div class="content">
    <h2>COMPROVANTE DE VACINAÇÃO</h2>
    <span>Id da vacinação: {{ $registro->uuid }}</span>
    <h2>Informações sobre a vacinação</h2>
    <span>Nome da vacina: {{ $registro->lote->vacina->nome }}</span>
    <br>
    <span>Lote: {{ $registro->lote->codigo }}</span>
    <br>
    <span>Tecnologia: {{ $registro->lote->tecnologia }}</span>
    <br>
    <span>Data da aplicação: {{ $registro->dataVacinacao() }}</span>
    <h3>Local de aplicação</h3>
    <span>CNES: {{ $registro->CNES }}</span>
    <h3>Profissional</h3>
    <span>Nome: {{ $registro->profissional->nome_completo }}</span>
    <br>
    <span>CNS: {{ $registro->profissional->cns }}</span>
</div>
