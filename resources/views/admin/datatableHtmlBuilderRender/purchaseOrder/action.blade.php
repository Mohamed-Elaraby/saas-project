@if (request('status') == 'open')
    @if (Auth::user()->hasPermission('update-PurchaseOrder'))
        <a href="{{ route('admin.purchaseOrders.edit', $query->id) }}" class="btn btn-sm btn-success"> <i class="ri ri-pencil-line"></i> {{ __('trans.edit or close invoice') }} </a>
    @endif
    @if (Auth::user()->hasPermission('delete-PurchaseOrder'))
        <form action="{{ route('admin.purchaseOrders.destroy', $query->id) }}" method="POST" style="display: inline">
            @method('DELETE')
            @csrf
            <button id="remove_button" class="btn btn-sm btn-danger" onclick="return showDeleteMessage()"><i class="ri-delete-bin-line"></i></button>
        </form>
    @endif
@else
    <a href="{{ route('admin.purchaseOrderReturns.create', ['purchase_order_id' => $query->id]) }}" class="btn btn-sm btn-primary"> <i class="ri ri-reply-line"></i> {{ __('trans.create return invoice') }} </a>
@endif
