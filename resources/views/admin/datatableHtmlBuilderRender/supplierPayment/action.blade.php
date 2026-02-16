@if (auth()->user()->hasPermission('update-supplierPayment'))
    <a href="{{ route('admin.supplierPayments.edit', $query->id) }}" class="btn btn-sm btn-primary"> <i class="ri-pencil-line"></i></a>
@endif
@if (auth()->user()->hasPermission('delete-supplierPayment'))
     <form action="{{ route('admin.supplierPayments.destroy', $query->id) }}" method="POST" style="display: inline">
        @method('DELETE')
        @csrf
    <button class="btn btn-sm btn-danger" onclick="return showDeleteMessage()"> <i class="ri-delete-bin-line"></i></button>
    </form>
@endif
