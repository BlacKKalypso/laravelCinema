@extends('layout.app')
@section('content')
    <table class="table table-striped table-centered">
        <thead>
        <tr>
            <th>{{ __('Title') }}</th>
            <th>{{ __('Year') }}</th>
            <th>{{ __('Action') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->year }}</td>
                <td class="table-action">
                    <a role="button" href="{{ route('movie.edit', $movie->id) }}" class="btn btn-info btn-sm"
                       data-toggle="tooltip" title="@lang('Edit movie') {{ $movie->title }}">
                        <i class="fas fa-edit fa-lg"></i>Edit
                    </a>
                    <a role="button" href="{{ route('movie.destroy', $movie->id) }}"
                       class="btn btn-danger btn-sm delete"
                       data-toggle="tooltip" title="@lang('Delete movie') {{ $movie->title }}">
                        <i class="fas fa-trash fa-lg"></i>Delete
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary btn-sm" href="{{ route('movie.create') }}" role="button"
       data-toggle="tooltip" title="@lang('Create movie')">
        <i class="fas fa-trash fa-lg"></i>Create
    </a>
    <hr>
    {{ $movies->appends(request()->except('page'))->links() }}
@endsection
