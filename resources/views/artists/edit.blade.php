@extends('layout.app')
@section('title', 'Artist edition')
@section('content')
    <div class="container-fluid">
        <h2>Edit artist's database</h2>
        <form method="post" action="{{ route('artist.update', $artist->id)}}"  enctype="multipart/form-data">
            {{csrf_field()}}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="name">First name</label>
                <input type="text" name="first_name" id="first_name" value="" required/>
                @if ($errors->has('first_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('first_name')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name">last name</label>
                <input type="text" name="last_name" id="last_name" value="" required/>
                @if ($errors->has('last_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('last_name')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Date of birth</label>
                <input type="number" name="births_date" id="births_date" value="" required/>
                @if ($errors->has('births_day'))
                    <div class="invalid-feedback">
                        {{ $errors->first('births_date')}}
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

