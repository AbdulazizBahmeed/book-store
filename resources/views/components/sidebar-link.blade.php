@props(['url', 'label','iconClasses'])
<a
    href="{{$url}}" class="
    list-group-item
    list-group-item-action 
    p-2
    mt-4
    ripple
    rounded-pill
    @if(Str::is("$url*", URL::current()))
    active
    @endif
    ">
    <i class="{{$iconClasses}} me-3"></i><span>{{$label}}</span>
</a>