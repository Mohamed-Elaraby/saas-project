@if (Auth::user()->hasPermission('update-product'))
    <a href="{{ route('admin.products.edit', $query->id) }}" class="btn btn-sm btn-primary"><i class="ri-pencil-line"></i></a>
@endif
@if (Auth::user()->hasPermission('delete-product'))
    <form action="{{ route('admin.products.destroy', $query->id) }}" method="POST" style="display: inline">
        @method('DELETE')
        @csrf
        <button id="remove_button" class="btn btn-sm btn-danger" onclick="return showDeleteMessage()"><i class="ri-delete-bin-line"></i></button>
    </form>
@endif
@if(auth()->user()->hasPermission('read-internalTransfer'))
<a href="{{ route('admin.product.transfer', $query->id) }}" class="btn btn-sm btn-warning"> <i class="ri ri-arrow-right-line"></i> {{ __('trans.transfer') }}</a>
@endif
