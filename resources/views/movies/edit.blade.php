@extends('layout.app')
@section('title', 'Movie edition')
@section('content')
    <div class="container-fluid">
        <h2>Edit movie's database</h2>
        <form method="post" action="{{ route('movie.update', $movie->id)}}"  enctype="multipart/form-data">
            {{csrf_field()}}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" name="title" id="title" value="" required/>
                @if ($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Year</label>
                <input type="number" name="year" id="year" value="" required/>
                @if ($errors->has('year'))
                    <div class="invalid-feedback">
                        {{ $errors->first('year')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Picture</label>
                <input type="file" name="poster" id="image" value="" />
                @if ($errors->has('poster'))
                    <div class="invalid-feedback">
                        {{ $errors->first('poster')}}
                    </div>
                @endif
            </div>
            <input type="submit" class="btn btn-primary"/>
        </form>
    </div>
@endsection

<style>
    .container-fluid{
        margin-top: 10vh;
        padding: 2vh;
        color: #fff;
        background: #969696;
    }
</style>
