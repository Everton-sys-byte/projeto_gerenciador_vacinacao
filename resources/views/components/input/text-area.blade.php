<div class="form-group">
    @if (isset($labelName))
        <label for="{{ $inputName }}">{{ $labelName }}</label>
    @endif
    <textarea name="{{$inputName}}" id="{{$inputName}}" class="form-control @error($inputName) is-invalid @enderror"></textarea>
    @error($inputName)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
