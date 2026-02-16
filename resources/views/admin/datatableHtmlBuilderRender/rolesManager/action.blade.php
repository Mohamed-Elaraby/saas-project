{{--@if (Auth::user()->hasPermission('update-rolesManager'))--}}
{{--    <a href="{{ route('admin.rolesManager.edit', $query->id) }}" class="btn btn-sm btn-primary"><i class="ri-pencil-line"></i></a>--}}
{{--@endif--}}
@if (Auth::user()->hasPermission('delete-rolesManager'))
    {!! Form::open(['route' => ['admin.rolesManager.destroy', $query->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
    <button class="btn btn-sm btn-danger" onclick="return showDeleteMessage()"> <i class="fa fa-remove"></i> {{ __('trans.delete') }}</button>
    {!! Form::close() !!}
@endif
