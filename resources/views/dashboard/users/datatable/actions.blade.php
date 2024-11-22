<div class="d-flex justify-content-around align-items-center">
    <a href="{{route('dashboard.users.edit', $user->id)}}" class="btn btn-tertiary" title="edit">
        <i class="fa fa-pencil-square fs-2 text-primary"></i>
    </a>
    <form action="{{route('dashboard.users.destroy', $user->id)}}" method="POST">
        <button type="submit" class="btn btn-tertiary text-center py-3" title="delete">
            <i class="fas fa-trash-alt text-danger fs-2"></i>
        </button>
        @csrf
        @method('DELETE')
    </form>
</div>