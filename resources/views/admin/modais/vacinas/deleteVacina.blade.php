<x-modal.modal modalFormId="admExcluirVacina" modalTitle="Excluir vacina" modalType="delete"
    modalId="excluirVacina">
    <div>Tem certeza que deseja excluir a vacina <span id="vacina_nome"></span>? Todos os lotes atrelados a ela serão perdidos. </div>
    <x-form.default-form formId="admExcluirVacina" formAction="{{ @route('admin.delete.vaccine') }}"
        formMethod="POST">
        @method('DELETE')
        <input type="hidden" name="delete_vacina_id" id="delete_vacina_id">
    </x-form.default-form>
</x-modal.modal>
