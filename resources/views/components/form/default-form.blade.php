<form action="{{$action}}" method="{{$method}}" enctype="{{$encType}}">
    @csrf
    {{$slot}}
</form>