<x-modal.modal modalFormId="profissionalEditarVacina" modalTitle="Editar vacina" modalType="update"
    modalId="editarVacina">
    <x-form.default-form formId="profissionalEditarVacina" formAction="{{ @route('professional.update.vaccine') }}"
        formMethod="POST">
        @method('PUT')
        <input type="hidden" name="vacina_id" id="vacina_id">
        <x-form.form-group labelName="Nome da vacina*" inputType="text" inputName="e_nome"
            inputValue="{{ @old('e_nome') }}" />
        <x-form.form-group labelName="Laboratorio*" inputType="text" inputName="e_laboratorio" inputValue="{{@old('e_laboratorio')}}"/>    
        <x-input.text-area labelName="Descrição*" inputName="e_descricao"/>
        <x-form.form-group labelName="Idade minima" inputType="text" inputName="e_idade_minima" inputValue="{{@old('e_idade_minima')}}"/>
    </x-form.default-form>
</x-modal.modal>
