<div {{ $attributes->merge(['class' => 'alert alert-dismissible my-1 fade show']) }} role="alert">
    {{ $alertMessage }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
