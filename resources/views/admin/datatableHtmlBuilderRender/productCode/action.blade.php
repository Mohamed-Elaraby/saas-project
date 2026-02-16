@if (Auth::user()->hasPermission('update-productCode'))
    <a href="{{ route('admin.productCodes.edit', $query->id) }}" class="btn btn-sm btn-primary"><i class="ri-pencil-line"></i></a>
@endif
@if (Auth::user()->hasPermission('delete-productCode'))
    <form action="{{ route('admin.productCodes.destroy', $query->id) }}" method="POST" style="display: inline">
        @method('DELETE')
        @csrf
        <button id="remove_button" class="btn btn-sm btn-danger" onclick="return showDeleteMessage()"><i class="ri-delete-bin-line"></i></button>
    </form>
@endif
