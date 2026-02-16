@if ($query->saleOrder)
    <a class="btn btn-warning btn-sm" href="{{ route('admin.saleOrders.show', $query -> saleOrder -> id) }}">
        {{ __('trans.sale order') }}
        @if(count($query->saleOrder -> saleOrderReturns) > 0)
            <i class="fa fa-refresh"></i>
        @endif
    </a>
@elseif($query->clientPayment)
    <a class="btn btn-danger btn-sm" href="{{ route('admin.clientPayments.show', $query -> clientPayment -> id) }}">{{ __('trans.client payment') }}</a>
@elseif($query->clientCollecting)
    <a class="btn btn-success btn-sm" href="{{ route('admin.clientCollecting.show', $query -> clientCollecting -> id) }}">{{ __('trans.client collecting') }}</a>
@elseif($query->saleOrderReturn)
    <a class="btn btn-primary btn-sm" href="{{ route('admin.saleOrderReturns.show', $query -> saleOrderReturn -> id) }}">{{ __('trans.sale order return') }}</a>
@endif
