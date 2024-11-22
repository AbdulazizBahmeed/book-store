<div class="w-25 bg-white sidebar pt-3">
    <div class="list-group list-group-flush p-2">

        <a
            href="#"
            class="list-group-item list-group-item-action py-2 ripple"
            aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
        </a>
        <x-sidebar-link label='users management' 
        iconClasses='fa fa-users'
        :url="route('dashboard.users.index')"
        />
    </div>
</div>