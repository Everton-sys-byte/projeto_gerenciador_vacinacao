<div {{$attributes->merge(['class' => 'form-group'])}}>
    @if(isset($labelName))
        <label for="{{$inputName}}">{{$labelName}}</label>
    @endif
    <input type="{{ $inputType }}" class="form-control @error($inputName) is-invalid @enderror"
        name="{{ $inputName }}" id="{{ $inputName }}" value="{{isset($inputValue) ? $inputValue : ""}}" 
        @if(isset($inputReadOnly))
            readonly
        @endif >
    @error($inputName)
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
