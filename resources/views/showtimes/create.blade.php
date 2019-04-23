@extends('layout.app')
@section('title', 'Create showtime')
@section('content')
    <div class="container-fluid">
        <h2>Create showtime's database</h2>
        <form method="post" action="{{ route('showtime.store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="name">Code</label>
                <input type="text" name="code" id="code" value=" " required/>
                @if ($errors->has('code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Theatre</label>
                <input type="text" name="theatre_name" id="theatre_name" value="" required/>
                @if ($errors->has('theatre_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('theatre_name')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Room number</label>
                <input type="number" name="room_num" id="room_num" value="" required/>
                @if ($errors->has('room_num'))
                    <div class="invalid-feedback">
                        {{ $errors->first('room_num')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Movie's id</label>
                <input type="number" name="movie_id" id="movie_id" value=""/>
                @if ($errors->has('movie_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('movie_id')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Movie's title</label>
                <input type="number" name="title_movie" id="title_movie" value="" required/>
                @if ($errors->has('title_movie'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title_movie')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Begin</label>
                <input type="text" name="begin" id="begin" value="" required/>
                @if ($errors->has('begin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('begin')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name">End</label>
                <input type="text" name="end" id="end" value="" required/>
                @if ($errors->has('end'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end')}}
                    </div>
                @endif
            </div>
            <input type="submit" class="btn btn-primary"/>
        </form>
    </div>
@endsection

<style>
    .container-fluid {
        margin-top: 10vh;
        padding: 2vh;
        color: #fff;
        background: #969696;
    }
</style>

