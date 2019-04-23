@extends('layout.app')
@section('title', 'Page title')
@section('content')
    <div class="container-fluid">
        <h2>Create theatre's database</h2>
        <form method="post" action="{{ route('theatre.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="" required/>
                @if ($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Address</label>
                <input type="text" name="Address" id="Address" value="" required/>
                @if ($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Picture</label>
                <input type="file" name="poster" id="image" value=""/>
                @if ($errors->has('poster'))
                    <div class="invalid-feedback">
                        {{ $errors->first('poster')}}
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

