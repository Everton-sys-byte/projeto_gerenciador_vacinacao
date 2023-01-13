<form action="{{ $formAction }}" method="{{ $formMethod }}" 
    @if($formEncType)
        enctype="multipart/form-data"
    @endif
    {{ $attributes->merge([
        'class' => 'bg-white py-3 px-4 rounded shadow-lg d-flex flex-column justify-content-center gap-3',
        'style' => 'width:500px'
    ]) }}>
    @csrf
    {{ $slot }}
</form>
