@extends('layout.app')
@section('title', 'Room\'s list')
@section('content')
    <table class="table table-striped table-centered">
        <thead>
        <tr>
            <th>{{ __('Theatre') }}</th>
            <th>{{ __('Room number') }}</th>
            <th>{{ __('Air conditioned') }}</th>
            <th>{{ __('Capacity') }}</th>
            <th>{{ __('Action') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rooms as $room)
            <tr>
                <td>{{ $room->theatre_name }}</td>
                <td>{{ $room->room_num }}</td>
                <td>{{ $room->air_conditioned }}</td>
                <td>{{ $room->capacity }}</td>
                <td class="table-action">
                    <a role="button" href="{{ route('room.edit', $room->id) }}" class="btn btn-info btn-sm"
                       data-toggle="tooltip" title="@lang('Edit room') {{ $room->theatre_name }}">
                        <i class="fas fa-edit fa-lg"></i>Edit
                    </a>
                    <a role="button" href="{{ route('room.destroy', $room->id) }}"
                       class="btn btn-danger btn-sm delete"
                       data-toggle="tooltip" title="@lang('Delete room') {{ $room->roo_num }}">
                        <i class="fas fa-trash fa-lg"></i>Delete
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary btn-sm" href="{{ route('room.create') }}" role="button"
       data-toggle="tooltip" title="@lang('Create room')">
        <i class="fas fa-trash fa-lg"></i>Create
    </a>
    <hr>
    {{ $rooms->appends(request()->except('page'))->links() }}
@endsection
