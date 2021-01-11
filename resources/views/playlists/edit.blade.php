@extends('layouts.app')

@section('title', 'Edit palylist')

@section('content')




    <form method="POST" action="{{ route('playlists.update', $playlist->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="music_name" value="{{ $playlist->music_name }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Singer</label>
            <select class="form-control" name="category_id">
                @foreach($singer as $value)
                    <option @if($playlist->singer_id == $value->id)
                            {{ "selected" }}
                            @endif
                            value="{{ $value->id }}">{{ $value->singer_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Category</label>
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
            <label for="">Ambum</label>
            <select class="form-control-" name="country_id">
                @foreach($ambum as $value)
                    <option @if($playlist->ambum_id == $value->id)
                            {{ "selected" }}
                            @endif
                            value="{{ $value->id }}">{{ $value->name_ambum }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Image</label><br>
            <br>
            <br>
            <img src="{{url('storage/' . $playlist->image)}}" width="150px" height="150px" class="img-fluid img-thumbnail">
{{--            <input type="file" name="image" value="{{ $playlist->image }}" class="form-control-file">--}}
        </div>
        <div class="form-group">
            <label for="">Audio</label><br>
            <audio controls>
                <source src="{{ url('storage/audio/' . $playlist->audio) }}"
                        type="audio/mp3">
                Your browser does not support the audio element.
            </audio>
{{--            <input type="file" name="audio" class="form-control-file">--}}
        </div>


@endsection
