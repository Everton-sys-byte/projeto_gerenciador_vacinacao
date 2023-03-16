<x-Modal.Modal modalFormId="adminCreateUser" modalId="criarUsuario" modalTitle="Criar novo usuário" modalType="create">
    <x-form.default-form formId="adminCreateUser" formAction="{{ @route('admin.create.user') }}" formMethod="POST">
        <x-form.form-group labelName="Nome Completo" inputType="text" inputName="nome_completo"
            inputValue="{{ @old('nome_completo') }}" />
        <x-form.form-group labelName="CPF" inputType="text" inputName="cpf" inputValue="{{ @old('cpf') }}" />
        <x-form.form-group labelName="Email" inputType="email" inputName="email" inputValue="{{ @old('email') }}" />
        <x-input.select labelName="Tipo de usuário" inputName="role">
            <x-slot name="options">
                <option value="">Selecione o tipo de conta que deseja criar</option>
                <option value="comum">Comum</option>
                <option value="profissional">Profissional</option>
            </x-slot>
        </x-input.select>
        <x-form.form-group labelName="CNS" inputType="text" inputName="cns" inputValue="{{ @old('cns') }}"
            class="cns d-none" />
        <x-form.form-group labelName="Celular" inputType="text" inputName="celular"
            inputValue="{{ @old('celular') }}" />
        <x-form.form-group labelName="Data de nascimento" inputType="date" inputName="data_nascimento"
            inputValue="{{ @old('data_nascimento') }}" />
        <x-form.form-group labelName="Senha" inputType="password" inputName="password" />
    </x-form.default-form>
</x-Modal.Modal>
