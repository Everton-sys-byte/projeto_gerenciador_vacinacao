<x-modal.modal modalFormId="profissionalRegistrarVacina" modalTitle="Registrar vacina" modalType="create"
    modalId="criarVacina">
    <x-form.default-form formId="profissionalRegistrarVacina" formAction="{{ @route('professional.create.vaccine') }}"
        formMethod="POST">
        <x-form.form-group labelName="Nome da vacina" inputType="text" inputName="nome"
            inputValue="{{ @old('nome') }}" />
        <x-form.form-group labelName="Laboratorio" inputType="text" inputName="laboratorio" inputValue="{{@old('laboratorio')}}"/>    
        <x-input.text-area labelName="Descrição" inputName="descricao"/>
        <x-form.form-group labelName="Idade minima" inputType="text" inputName="idade_minima" inputValue="{{@old('idade_minima')}}"/>
    </x-form.default-form>
</x-modal.modal>
