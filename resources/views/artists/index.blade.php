@extends('layout.app')
@section('title', 'Artist\'s list')
@section('content')
    <table class="table table-striped table-centered">
        <thead>
        <tr>
            <th>{{ __('Last name') }}</th>
            <th>{{ __('First name') }}</th>
            <th>{{ __('Year of birth') }}</th>
            <th>{{ __('Action') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($artists as $artist)
            <tr>
                <td>{{ $artist->last_name }}</td>
                <td>{{ $artist->first_name }}</td>
                <td>{{ $artist->births_date }}</td>
                <td class="table-action">
                        <a role="button" href="{{ route('artist.edit', $artist->id) }}" class="btn btn-info btn-sm"
                           data-toggle="tooltip" title="@lang('Edit artist') {{ $artist->last_name }}">
                            <i class="fas fa-edit fa-lg"></i>Edit
                        </a>
                        <a role="button" href="{{ route('artist.destroy', $artist->id) }}"
                           class="btn btn-danger btn-sm delete"
                           data-toggle="tooltip" title="@lang('Delete artist') {{ $artist->last_name }}">
                            <i class="fas fa-trash fa-lg"></i>Delete
                        </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary btn-sm" href="{{ route('artist.create') }}" role="button"
       data-toggle="tooltip" title="@lang('Create artist')">
        <i class="fas fa-trash fa-lg"></i>Create
    </a>
    <hr>
    {{ $artists->appends(request()->except('page'))->links() }}
@endsection
