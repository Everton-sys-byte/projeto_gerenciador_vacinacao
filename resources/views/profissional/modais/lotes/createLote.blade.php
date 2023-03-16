<x-modal.modal modalFormId="profissionalRegistrarLote" modalTitle="Registrar lote" modalType="create"
    modalId="criarLote">
    <x-form.default-form formId="profissionalRegistrarLote" formAction="{{ @route('batch.create', ['vacina'=> request()->segment(2)]) }}"
        formMethod="POST">
        <x-form.form-group labelName="Código do lote*" inputType="text" inputName="codigo"
            inputValue="{{ @old('codigo') }}" />
        <x-form.form-group labelName="Tecnologia*" inputType="text" inputName="tecnologia" inputValue="{{@old('tecnologia')}}"/>    
        <x-form.form-group labelName="Quantidade de doses*" inputType="text" inputName="quantidade" inputValue="{{@old('quantidade')}}"/> 
        <x-form.form-group labelName="Data de vencimento do lote*" inputType="date" inputName="data_vencimento" inputValue="{{@old('data_vencimento')}}"/>
    </x-form.default-form>
</x-modal.modal>
