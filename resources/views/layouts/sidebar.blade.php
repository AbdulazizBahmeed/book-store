<div class="w-25 bg-white sidebar pt-3">
    <div class="list-group list-group-flush p-2">

        <x-sidebar-link label='users management' 
        iconClasses='fa fa-users'
        :url="route('dashboard.users.index')"
        />

        <x-sidebar-link label='categories management' 
        iconClasses='fa fa-bookmark'
        :url="route('dashboard.categories.index')"
        />

        <x-sidebar-link label='books management' 
        iconClasses='fa fa-book'
        :url="route('dashboard.books.index')"
        />

    </div>
</div>