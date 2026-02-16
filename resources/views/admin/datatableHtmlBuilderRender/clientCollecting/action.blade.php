@if (auth()->user()->hasPermission('update-clientCollecting'))
    <a href="{{ route('admin.clientCollecting.edit', $query->id) }}" class="btn btn-sm btn-primary"> <i class="ri ri-pencil-line"></i> {{ __('trans.edit') }}</a>
@endif
@if (auth()->user()->hasPermission('delete-clientCollecting'))
    <form action="{{ route('admin.clientCollecting.destroy', $query->id) }}" method="POST" style="display: inline">
        @method('DELETE')
        @csrf
        <button class="btn btn-sm btn-danger" onclick="return showDeleteMessage()"> <i class="ri ri-delete-bin-line"></i> {{ __('trans.delete') }}</button>
    </form>
@endif
