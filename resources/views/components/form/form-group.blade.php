<div class="form-group">
    <label for="{{$inputName}}">{{$labelName}}</label>
    <input type="{{ $inputType }}" class="form-control @error('{{ $inputName }}') is-invalid @enderror"
        name="{{ $inputName }}" id="{{ $inputName }}" value="{{isset($inputValue) ? $inputValue : ""}}">
</div>
