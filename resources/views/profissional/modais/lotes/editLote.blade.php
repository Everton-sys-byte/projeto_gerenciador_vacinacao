<x-modal.modal modalFormId="profissionalEditarLote" modalTitle="Editar lote" modalType="update"
    modalId="editarLote">
    <x-form.default-form formId="profissionalEditarLote" formAction="{{ @route('batch.update') }}"
        formMethod="POST">
        @method('PUT')
        <input type="hidden" name="lote_id" id="lote_id">
        <x-form.form-group labelName="Código do lote*" inputType="text" inputName="e_codigo"
            inputValue="{{ @old('e_codigo') }}" />
        <x-form.form-group labelName="Tecnologia*" inputType="text" inputName="e_tecnologia" inputValue="{{@old('e_tecnologia')}}"/>    
        <x-form.form-group labelName="Quantidade de doses*" inputType="text" inputName="e_quantidade" inputValue="{{@old('e_quantidade')}}"/>    
        <x-form.form-group labelName="Date de vencimento do lote*" inputType="date" inputName="e_data_vencimento" inputValue="{{@old('e_data_vencimento')}}"/>
    </x-form.default-form>
</x-modal.modal>
