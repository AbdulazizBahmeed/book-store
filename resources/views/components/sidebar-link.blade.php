@props(['url', 'label','iconClasses'])
<a
    href="{{$url}}" class="
    list-group-item
    list-group-item-action 
    p-2
    mt-2
    ripple
    rounded-pill
    @if(request()->routeIs('dashboard.users.*'))
    active
    @endif
    ">
    <i class="{{$iconClasses}} me-3"></i><span>{{$label}}</span>
</a>