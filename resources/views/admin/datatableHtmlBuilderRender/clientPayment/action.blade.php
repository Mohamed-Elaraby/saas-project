@if (Auth::user()->hasPermission('update-clientPayment'))
    <a href="{{ route('admin.clientPayments.edit', $query->id) }}" class="btn btn-sm btn-primary"> <i class="ri-pencil-line"></i></a>
@endif
@if (Auth::user()->hasPermission('delete-clientPayment'))
    <form action="{{ route('admin.clientPayments.destroy', $query->id) }}" method="POST" style="display: inline">
        @method('DELETE')
        @csrf
        <button class="btn btn-sm btn-danger" onclick="return showDeleteMessage()"> <i class="ri-delete-bin-line"></i></button>
    </form>
@endif
