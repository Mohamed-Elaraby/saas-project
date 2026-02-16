@if (auth()->user()->hasPermission('update-supplierCollecting'))
    <a href="{{ route('admin.supplierCollecting.edit', $query->id) }}" class="btn btn-sm btn-primary"> <i class="ri-pencil-line"></i></a>
@endif
@if (auth()->user()->hasPermission('delete-supplierCollecting'))
    <form action="{{ route('admin.supplierCollecting.destroy', $query->id) }}" method="POST" style="display: inline">
        @method('DELETE')
        @csrf
        <button class="btn btn-sm btn-danger" onclick="return showDeleteMessage()"> <i class="ri-delete-bin-line"></i></button>
    </form>

@endif
