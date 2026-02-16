{{--@if (Auth::user()->hasPermission('update-expenses'))--}}
{{--    <a href="{{ route('admin.expenses.edit', $query->id) }}" class="btn btn-sm btn-primary"><i class="ri-pencil-line"></i></a>--}}
{{--@endif--}}
@if (auth()->user()->hasPermission('delete-expenses'))
<form style="display: inline" action="{{ route('admin.expenses.destroy', $query->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button class="btn btn-sm btn-danger" onclick="return showDeleteMessage()"> <i class="ri-delete-bin-line"></i></button>
</form>
@endif
