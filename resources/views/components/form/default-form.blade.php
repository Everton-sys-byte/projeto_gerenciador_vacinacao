<form action="{{ $formAction }}" method="{{ $formMethod }}" id="{{ $formId }}"
    @if ($formEncType) enctype="multipart/form-data" @endif
    {{ $attributes->merge([
        'class' => 'bg-white rounded shadow-lg d-flex flex-column justify-content-center gap-3',
    ]) }}>
    @csrf
    {{ $slot }}
</form>
