@extends('layouts.app')

@section('title', 'registration')


@section('content')


<form method="POST" action="{{ route('user.create') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" >
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Registration</button>
    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
</form>




@endsection
