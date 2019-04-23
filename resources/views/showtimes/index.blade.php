@extends('layout.app')
@section('title', 'Showtime\'s list')
@section('content')
    <table class="table table-striped table-centered">
        <thead>
        <tr>
            <th>{{ __('Theatre') }}</th>
            <th>{{ __('Room number') }}</th>
            <th>{{ __('Movie') }}</th>
            <th>{{ __('Begin') }}</th>
            <th>{{ __('End') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($showtimes as $showtime)
            <tr>
                <td>{{ $showtime->theatre_name }}</td>
                <td>{{ $showtime->room_num }}</td>
                <td>{{ $showtime->id_movie }}</td>
                <td>{{ $showtime->title_movie }}</td>
                <td>{{ $showtime->begin }}</td>
                <td>{{ $showtime->end }}</td>
                <td class="table-action">
                    <a role="button" href="{{ route('showtime.edit', $showtime->id) }}" class="btn btn-info btn-sm"
                       data-toggle="tooltip" title="@lang('Edit showtime') {{ $showtime->theatre_name }}">
                        <i class="fas fa-edit fa-lg"></i>Edit
                    </a>
                    <a role="button" href="{{ route('showtime.destroy', $showtime->id) }}"
                       class="btn btn-danger btn-sm delete"
                       data-toggle="tooltip" title="@lang('Delete showtime') {{ $showtime->room_num }}">
                        <i class="fas fa-trash fa-lg"></i>Delete
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary btn-sm" href="{{ route('showtime.create') }}" role="button"
       data-toggle="tooltip" title="@lang('Create showtime')">
        <i class="fas fa-trash fa-lg"></i>Create
    </a>
    <hr>
    {{ $showtimes->appends(request()->except('page'))->links() }}
@endsection
