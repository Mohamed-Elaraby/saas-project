<select class="form-select" data-trigger name="choices-single-default" id="selectAction">

    <option value="" selected disabled>{{ __('trans.action') }}</option>

    @if (auth()->user()->hasPermission('create-supplierPayment'))
        <option value="{{ route('admin.supplierPayments.create', ['supplier_id' => $query->id]) }}">{{ __('trans.pay to supplier') . ' ' .$query->name }}</option>
    @endif

    @if (auth()->user()->hasPermission('create-supplierCollecting'))
        <option value="{{ route('admin.supplierCollecting.create', ['supplier_id' => $query->id]) }}">{{ __('trans.collection from supplier') . ' ' .$query->name }}</option>
    @endif

    <option value="{{ route('admin.supplierTransactions', $query->id) }}">{{ __('trans.supplier transactions') . ' ' .$query->name }}</option>

    @if (auth()->user()->hasPermission('create-purchaseOrder'))
        <option value="{{ route('admin.purchaseOrders.create', ['supplier_id' => $query->id]) }}">{{ __('trans.create purchase order from supplier') }} {{ $query->name }}</option>
    @endif

</select>

@if (auth()->user()->hasPermission('update-supplier'))

    <a href="{{ route('admin.suppliers.edit', $query->id) }}" class="btn btn-sm btn-primary"> <i class="ri ri-pencil-line"></i></a>

@endif

@if (auth()->user()->hasPermission('delete-supplier'))

    <form action="{{ route('admin.suppliers.destroy', $query->id) }}" method="POST" style="display: inline">
        @method('DELETE')
        @csrf
        <button class="btn btn-sm btn-danger"><i class="ri-delete-bin-line"></i></button>
    </form>

@endif
