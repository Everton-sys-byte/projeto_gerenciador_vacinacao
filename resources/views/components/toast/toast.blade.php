{{-- INSERINDO O SCRIPT NO DEFAULT PAGES FORMS CASO ESTE COMPONENTE EXISTA --}}
@push('scripts')
    <script src="{{ @asset('jquery/toasts/toast.js') }}" defer></script>
@endpush

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header @if ($type === 'success') bg-success @else bg-danger @endif">
            <img src="{{$type == 'success' ? @asset('images/svgs/list/check2.svg') 
            : @asset('images/svgs/list/x.svg') }}" class="rounded me-2" alt="sucesso">
            <strong class="me-auto text-white">{{ $title }}</strong>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ $info }}
        </div>
    </div>
</div>
