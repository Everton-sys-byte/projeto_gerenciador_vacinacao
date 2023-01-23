<x-Modal.Modal modalFormId="adminUpdateUser" modalId="editUser" modalTitle="Editar usuário" modalType="update">
    <x-form.default-form formId="adminUpdateUser" formAction="{{ @route('admin.edit.user') }}" formMethod="POST">
        @method('PUT')
        <input type="hidden" name="id" id="id">
        <x-form.form-group labelName="Nome Completo" inputType="text" inputName="e_nome_completo" />
        <x-form.form-group labelName="CPF" inputType="text" inputName="e_cpf" />
        <div class="form-group">
            <select name="e_role" id="e_role" class="form-select @error('e_role') is-invalid @enderror">
                <option value="">Selecione o tipo de conta que você deseja</option>
                <option value="comum">Comum</option>
                <option value="profissional">Profissional</option>
            </select>
            @error('e_role')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <x-form.form-group labelName="CNS" inputType="text" inputName="e_cns" class="cns d-none" />
        <x-form.form-group labelName="Celular" inputType="text" inputName="e_celular" />
        <x-form.form-group labelName="Data de nascimento" inputType="date" inputName="e_data_nascimento" />
        <div class="form-group">
            <select name="e_status" id="e_status" class="form-select @error('e_status') is-invalid @enderror">
                <option value="">Selecione o status do usuário</option>
                <option value="ativo">Ativo</option>
                <option value="bloqueado">Bloqueado</option>
            </select>
            @error('e_status')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
    </x-form.default-form>
</x-Modal.Modal>
