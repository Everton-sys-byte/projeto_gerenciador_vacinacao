<x-Modal.Modal modalFormId="adminUpdateUser" modalId="editUser" modalTitle="Editar usuário" modalType="update">
    <x-form.default-form formId="adminUpdateUser" formAction="{{ @route('admin.edit.user') }}" formMethod="POST">
        @method('PUT')
        <input type="hidden" name="id" id="id">
        <x-form.form-group labelName="Nome Completo" inputType="text" inputName="e_nome_completo" />
        <x-input.select labelName="Tipo de usuário" inputName="e_role">
            <x-slot name="options">
                <option value="">Selecione o tipo de conta que você deseja</option>
                <option value="comum">Comum</option>
                <option value="profissional">Profissional</option>
            </x-slot>
        </x-input.select>
        <x-form.form-group labelName="CNS" inputType="text" inputName="e_cns" class="cns d-none" />
        <x-form.form-group labelName="Celular" inputType="text" inputName="e_celular" />
        <x-form.form-group labelName="Data de nascimento" inputType="date" inputName="e_data_nascimento" />
        <x-input.select labelName="Status" inputName="e_status">
            <x-slot name="options">
                <option value="">Selecione o status do usuário</option>
                <option value="ativo">Ativo</option>
                <option value="bloqueado">Bloqueado</option>
            </x-slot>
        </x-input.select>
    </x-form.default-form>
</x-Modal.Modal>
