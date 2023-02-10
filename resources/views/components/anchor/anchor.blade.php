<a href="{{$route}}" {{$attributes->merge(['class' => 'd-flex flex-row align-items-center gap-1 text-decoration-none'])}}>
    @if($svg)
        <img src="{{$svg}}" />
    @endif
    <span>{{$type}}</span>
</a>