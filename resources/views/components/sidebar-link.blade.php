@props(['url', 'label','iconClasses'])
<a
    href="{{$url}}" class="
    list-group-item
    list-group-item-action 
    py-2
    mt-2
    ripple
    rounded-pill
    @if(url()->full() == $url))
    active
    @endif
    ">
    <i class="{{$iconClasses}} me-3"></i><span>{{$label}}</span>
</a>