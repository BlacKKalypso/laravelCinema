@extends('layout.app')
@section('content')
    <table class="table table-striped table-centered">
        <thead>
        <tr>
            <th>{{ __('Name') }}</th>
            <th>{{ __('Address') }}</th>
            <th>{{ __('Action') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($theatres as $theatre)
            <tr>
                <td>{{ $theatre->name }}</td>
                <td>{{ $theatre->address }}</td>
                <td class="table-action">
                    <a role="button" href="{{ route('theatre.edit', $theatre->id) }}" class="btn btn-info btn-sm"
                       data-toggle="tooltip" title="@lang('Edit artist') {{ $theatre->name }}">
                        <i class="fas fa-edit fa-lg"></i>Edit
                    </a>
                    <a role="button" href="{{ route('artist.destroy', $theatre->id) }}"
                       class="btn btn-danger btn-sm delete"
                       data-toggle="tooltip" title="@lang('Delete artist') {{ $theatre->name }}">
                        <i class="fas fa-trash fa-lg"></i>Delete
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary btn-sm" href="{{ route('theatre.create') }}" role="button"
       data-toggle="tooltip" title="@lang('Create theatre')">
        <i class="fas fa-trash fa-lg"></i>Create
    </a>
    <hr>
    {{ $theatres->appends(request()->except('page'))->links() }}
@endsection
