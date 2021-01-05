@extends('layouts.app')

@section('title', 'Edit palylist')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Edit Playlist
        </div>
        <div class="form-group">
            <form method="POST" action="{{ route('playlists.update', $playlist->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="music_name" value="{{ $playlist->music_name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Singer</label>
                    <input type="text" name="singer" value="{{ $playlist->singer }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">category</label>
                    <select class="form-control" name="category_id">
                        @foreach($category as $value)
                            <option @if($playlist->category_id == $value->id)
                                {{ "selected" }}
                            @endif
                            value="{{ $value->id }}">{{ $value->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Country</label>
                    <select class="form-control" name="country_id">
                        @foreach($country as $value)
                            <option @if($playlist->country_id == $value->id)
                                {{ "selected" }}
                            @endif
                            value="{{ $value->id }}">{{ $value->country_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Image</label><br>
                    <input type="file" name="img" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="">Audio</label><br>
                    <input type="file" name="audio" class="form-control-file">
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>



            </form>
        </div>
    </div>
</div>







@endsection
