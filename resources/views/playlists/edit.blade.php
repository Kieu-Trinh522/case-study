
@extends('layouts.app')

@section('title', 'Edit Playlist')

@section('content')



    <div class="container table">
        <div >

            <div class="form-group">
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
                        <label for="">Ambum</label>
                        <select class="form-control" name="country_id">
                            @foreach($ambum as $value)
                                <option @if($playlist->ambum_id == $value->id)
                                        {{ "selected" }}
                                        @endif
                                        value="{{ $value->id }}">{{ $value->name_ambum }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label  for="">Image</label>

                        <input type="file" name="image" class=" form-control-file">
                        <br>
                        <br>
                        <img src="{{url('storage/' . $playlist->image)}}" width="150px" height="150px" class="img-fluid img-thumbnail">

                    </div>
                    <div class="form-group">
                        <label for="">Audio</label><br>
                        <input type="file" name="audio" class="form-control-file">
                        <audio>
                            <source src="{{ url('storage/audio/' . $playlist->audio) }}"
                                    type="audio/mp3">

                        </audio>
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>



                </form>
            </div>
        </div>
    </div>



@endsection
