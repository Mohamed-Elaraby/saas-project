@if (Auth::user()->hasPermission('update-expensesType'))
    <a href="{{ route('admin.expensesTypes.edit', $query->id) }}" class="btn btn-sm btn-primary"><i class="ri-pencil-line"></i></a>
@endif
@if (Auth::user()->hasPermission('delete-expensesType'))
    <form style="display: inline" action="{{ route('admin.expensesTypes.destroy', $query->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-sm btn-danger" onclick="return showDeleteMessage()"> <i class="ri-delete-bin-line"></i></button>
    </form>
@endif
