{{--<select id="selectAction" class="form-control">--}}
{{--    <option value="" disabled selected>{{ __('trans.action') }}</option>--}}
{{--    <option value="{{ route('admin.cars.index', ['client_id' => $query->id]) }}" >{{ __('trans.client cars') . ' ' .$query->name}}</option>--}}
{{--    <option value="{{ route('admin.check.index', ['client_id' => $query->id]) }}" >{{ __('trans.client check') . ' ' .$query->name}}</option>--}}





{{--</select>--}}

<select class="form-select" data-trigger name="choices-single-default" id="selectAction">
    <option value="" selected disabled>{{ __('trans.action') }}</option>
    @if (Auth::user()->hasPermission('create-clientPayment'))
        <option value="{{ route('admin.clientPayments.create', ['client_id' => $query->id]) }}">{{ __('trans.pay to client') . ' ' .$query->name }}</option>
    @endif
    @if (Auth::user()->hasPermission('create-clientCollecting'))
        <option value="{{ route('admin.clientCollecting.create', ['client_id' => $query->id]) }}">{{ __('trans.collection from client') . ' ' .$query->name }}</option>
    @endif
    <option value="{{ route('admin.clientTransactions', $query->id) }}">{{ __('trans.client transactions') . ' ' .$query->name }}</option>
</select>



@if (Auth::user()->hasPermission('update-client'))
    <a href="{{ route('admin.clients.edit', $query->id) }}" class="btn btn-sm btn-primary"><i class="ri-pencil-line"></i></a>
@endif
@if (Auth::user()->hasPermission('delete-client'))
    <form action="{{ route('admin.clients.destroy', $query->id) }}" method="POST" style="display: inline">
        @method('DELETE')
        @csrf
        <button class="btn btn-sm btn-danger" onclick="return showDeleteMessage()"><i class="ri-delete-bin-line"></i></button>
    </form>
@endif
