@if (auth()->user()->hasPermission('update-user'))
    <a href="{{ route('admin.users.edit', $query->id) }}" class="btn btn-sm btn-primary"><i class="ri-pencil-line"></i></a>
@endif
@if (auth()->user()->hasPermission('delete-user'))
<form style="display: inline" action="{{ route('admin.users.destroy', $query->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button class="btn btn-sm btn-danger"><i class="ri-delete-bin-line"></i></button>
</form>
@endif
