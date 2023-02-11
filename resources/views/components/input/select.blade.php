<div class="form-group">
    @if(isset($labelName))
        <label for="{{$inputName}}">{{$labelName}}</label>
    @endif    
    <select name="{{$inputName}}" id="{{$inputName}}" class="form-select @error($inputName) is-invalid @enderror">
        {{$options}}
    </select>
    @error($inputName)
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>