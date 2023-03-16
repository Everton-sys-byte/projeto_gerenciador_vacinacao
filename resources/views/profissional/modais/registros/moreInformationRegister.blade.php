<x-Modal.Modal modalId="maisInformacoesRegistro" modalTitle="Ver mais informações" modalType="verInformacoes">
    <span class="d-block" id="registroId"></span>
    <div class="informacoes-imunizado container-fuild">
        <div class="imunizado">
            <p class="text-center fs-4 m-0">Imunizado</p>
            <span class="d-block" id="imunizadoNomeCompleto"></span>
            <span class="d-block" id="imunizadoCPF"></span>
            <span class="d-block" id="imunizadoCelular"></span>
        </div>
        <div class="imunizado-endereco">
            <p class="text-center fs-4 m-0">Endereco</p>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mx-auto">
                <span class="col p-0" id="imunizadoCEP"></span>
                <span class="col p-0" id="imunizadoUF"></span>
                <span class="col p-0" id="imunizadoCidade"></span>
                <span class="col p-0" id="imunizadoBairro"></span>
                <span class="col p-0" id="imunizadoLogradouro"></span>
                <span class="col p-0" id="imunizadoNumero"></span>
                <span class="col p-0" id="imunizadoComplemento"></span>
            </div>
        </div>
    </div>
    <div class="vacina">
        <p class="text-center fs-4 m-0">Vacina</p>
        <span class="d-block" id="vacinaNome"></span>
        <span class="d-block" id="vacinaLaboratorio"></span>
        <span class="d-block" id="loteCodigo"></span>
        <span class="d-block" id="loteTecnologia"></span>
        <span class="d-block" id="loteDataVencimento"></span>
    </div>
</x-Modal.Modal>
