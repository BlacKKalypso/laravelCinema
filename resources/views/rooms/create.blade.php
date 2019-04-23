@extends('layout.app')
@section('title', 'Create room')
@section('content')
    <div class="container-fluid">
        <h2>Create room's database</h2>
        <form method="post" action="{{ route('room.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Room number</label>
                <input type="number" name="room_name" id="room_num" value="" required/>
                @if ($errors->has('room_num'))
                    <div class="invalid-feedback">
                        {{ $errors->first('room_num')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Theatre</label>
                <input type="text" name="theatre" id="theatre" value="" required/>
                @if ($errors->has('theatre'))
                    <div class="invalid-feedback">
                        {{ $errors->first('theatre')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Air conditioned</label>
                <input type="number" name="air_conditioned" id="air_conditioned" value="" required/>
                @if ($errors->has('air_conditioned'))
                    <div class="invalid-feedback">
                        {{ $errors->first('air_conditioned')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Capacity</label>
                <input type="number" name="capacity" id="capacity" value="" required/>
                @if ($errors->has('capacity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('capacity')}}
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
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

