{{--@if (Auth::user()->hasPermission('update-roles'))--}}
    <a href="{{ route('admin.roles.edit', $query->id) }}" class="btn btn-sm btn-primary"> <i class="ri-edit-circle-fill"></i></a>
{{--@endif--}}
{{--@if (Auth::user()->hasPermission('delete-roles'))--}}
<form style="display: inline" action="{{ route('admin.roles.destroy', $query->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button class="btn btn-sm btn-danger"><i class="ri-delete-bin-line"></i></button>
</form>
{{--@endif--}}
