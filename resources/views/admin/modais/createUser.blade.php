<x-Modal.Modal modalFormId="adminCreateUser" modalId="criarUsuario" modalTitle="Criar novo usuário" modalType="criar">
    <x-form.default-form formId="adminCreateUser" formAction="{{ @route('admin.create.user') }}" formMethod="POST">
        <x-form.form-group label_name="Nome Completo" inputType="text" inputName="nome_completo" inputValue="{{@old('nome_completo')}}" />
        <x-form.form-group label_name="CPF" inputType="text" inputName="cpf" inputValue="{{@old('cpf')}}" />
        <x-form.form-group label_name="Email" inputType="email" inputName="email" inputValue="{{@old('email')}}" />
        <div class="form-group">
            <select name="role" id="role" class="form-select @error('role') is-invalid @enderror">
                <option value="">Selecione o tipo de conta que deseja criar</option>
                <option value="comum">Comum</option>
                <option value="profissional">Profissional</option>
            </select>
            @error('role')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <x-form.form-group label_name="CNS" inputType="text" inputName="cns" inputValue="{{@old('cns')}}" class="cns d-none" />
        <x-form.form-group label_name="Celular" inputType="text" inputName="celular" inputValue="{{@old('celular')}}" />
        <x-form.form-group label_name="Data de nascimento" inputType="date" inputName="data_nascimento" inputValue="{{@old('data_nascimento')}}" />
        <x-form.form-group label_name="Senha" inputType="password" inputName="password" />
    </x-form.default-form>
</x-Modal.Modal>