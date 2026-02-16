{{--@if (Auth::user()->hasPermission('update-permissions'))--}}
    <a href="{{ route('admin.permissions.edit', $query->id) }}" class="btn btn-sm btn-primary"> <i class="ri-edit-circle-fill"></i></a>
{{--@endif--}}
{{--@if (Auth::user()->hasPermission('delete-permissions'))--}}
<form style="display: inline" action="{{ route('admin.permissions.destroy', $query->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button class="btn btn-sm btn-danger"><i class="ri-delete-bin-line"></i></button>
</form>
{{--@endif--}}
