<form action="{{ $formAction }}" method="{{ $formMethod }}" id="{{ $formId ? $formId : '' }}"
    @if ($formEncType) enctype="multipart/form-data" @endif
    {{ $attributes->merge([
        'class' => 'bg-light rounded d-flex flex-column gap-1',
    ]) }}>
    @csrf
    {{ $slot }}
</form>
