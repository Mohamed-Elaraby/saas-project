<select id="selectAction" class="form-control">
    <option value="" disabled selected>{{ __('trans.action') }}</option>
{{--    @if(request('client_id'))--}}
        @if (Auth::user()->hasPermission('create-check'))

            @if (auth()->user()->hasRole(['super_owner', 'owner', 'general_manager', 'general_observer', 'check_entry']))
               <option value="{{ route('admin.selectBranch', ['client_id' => $query->client_id, 'car_id' => $query->id]) }}">{{ __('trans.create check') }}</option>
            @else
               <option value="{{ route('admin.check.create', ['client_id' => $query->client_id, 'car_id' => $query->id]) }}">{{ __('trans.create check') }}</option>
            @endif
        @endif
{{--    @endif--}}

    @if (Auth::user()->hasPermission('read-check'))
        <option value="{{ route('admin.check.index', [ 'car_id' => $query->id]) }}" >{{ __('trans.car checks') . ' ' .$query->name}}</option>
    @endif
    <option value="{{ route('admin.car.transfer_car_ownership_view', [ 'car_id' => $query->id]) }}" >{{ __('trans.transfer car ownership')}}</option>
</select>


@if (Auth::user()->hasPermission('update-car'))
    <a href="{{ route('admin.cars.edit', $query->id) }}" class="btn btn-sm btn-primary"><i class="ri-pencil-line"></i></a>
@endif
@if (Auth::user()->hasPermission('delete-car'))
    <form action="{{ route('admin.cars.destroy', $query->id) }}" method="POST" style="display: inline">
        @method('DELETE')
        @csrf
        <button class="btn btn-sm btn-danger" onclick="return showDeleteMessage()"><i class="ri-delete-bin-line"></i></button>
    </form>
@endif
