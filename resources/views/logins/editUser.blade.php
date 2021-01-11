@extends('layouts.app')

@section('title', 'Edit Country')

@section('content')


    <div class="container">
        <form method="POST" action="{{ route('user.update',$user->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                <input disabled type="text" name="email" value="{{ $user->email }}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">level</span>
                <select name="level">
                    <option @if($user->level == "SupAdmin") selected @endif>SupAdmin</option>
                    <option @if($user->level == "User") selected @endif>User</option>

                </select>

{{--                <input type="text" name="level" value="{{ $user->level }}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">--}}
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">level</span>
                <input disabled type="text" name="level" value="{{ $user->created_at }}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">level</span>
                <input disabled type="text" name="level" value="{{ $user->updated_at }}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">cancel</button>
        </form>
    </div>
@endsection
