<div class="form-group">
    @if(isset($labelName))
        <label for="{{$inputName}}">{{$labelName}}</label>
    @endif    
    <select name="{{$inputName}}" id="{{$inputName}}" class="form-select @error($inputName) is-invalid @enderror">
        @foreach($options as $option)
            <option value="{{$option->tipo}}">{{$option->tipo}}</option>
        @endforeach
    </select>
    @error($inputName)
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>