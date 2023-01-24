<x-modal.modal modalFormId="admExcluirLote" modalTitle="Excluir lote" modalType="delete"
    modalId="excluirLote">
    <div>Tem certeza que deseja excluir o lote de código <span id="lote_codigo"></span>?</div>
    <x-form.default-form formId="admExcluirLote" formAction="{{ @route('admin.delete.batch') }}"
        formMethod="POST">
        @method('DELETE')
        <input type="hidden" name="delete_lote_id" id="delete_lote_id">
    </x-form.default-form>
</x-modal.modal>
