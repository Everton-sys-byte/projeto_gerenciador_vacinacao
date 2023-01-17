<x-Modal.Modal modalFormId="adminUpdateUser" modalId="editUser" modalTitle="Editar usuário" modalType="update">
    <x-form.default-form formId="adminUpdateUser" formAction="{{ @route('admin.edit.user') }}" formMethod="POST">
        @method('PUT')
        <x-form.form-group label_name="Nome Completo" inputType="text" inputName="e_nome_completo" />
        <x-form.form-group label_name="CPF" inputType="text" inputName="e_cpf" />
        <x-form.form-group label_name="Email" inputType="email" inputName="e_email"/>
        <div class="form-group">
            <select name="e_role" id="role" class="form-select @error('role') is-invalid @enderror">
                <option value="">Selecione o tipo de conta que deseja criar</option>
                <option value="comum">Comum</option>
                <option value="profissional">Profissional</option>
            </select>
            @error('e_role')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <x-form.form-group label_name="CNS" inputType="text" inputName="e_cns" class="cns d-none" />
        <x-form.form-group label_name="Celular" inputType="text" inputName="e_celular" />
        <x-form.form-group label_name="Data de nascimento" inputType="date" inputName="e_data_nascimento" />
        <x-form.form-group label_name="Senha" inputType="password" inputName="e_password" />
    </x-form.default-form>
</x-Modal.Modal>