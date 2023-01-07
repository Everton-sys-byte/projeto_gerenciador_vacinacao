<div>
    <select name="{{$name}}" class="form-select">
        @foreach($options as $option)
            <option value="{{$option->tipo}}">{{$option->tipo}}</option>
        @endforeach
    </select>
</div>