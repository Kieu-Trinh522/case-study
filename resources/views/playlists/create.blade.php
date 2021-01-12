@extends('layouts.app')

@section('title', 'Create Playlist')

@section('content')


    <div class="container">
        <div >

            <div class="form-group">
                <form method="POST" action="{{ route('playlists.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="music_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Singer</label>
                    <select name="singer_id" class="form-control">
                            @foreach($singer as $value)
                            <option id="option" value="{{ $value->id }}">{{ $value->singer_name }}</option>
                            @endforeach
                    </select>

                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                    <select name="category_id" class="form-control">
                            @foreach($category as $value)
                            <option value="{{ $value->id }}">{{ $value->category_name }}</option>
                            @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="">Country</label>
                        <select name="country_id" class="form-control">
                                @foreach($country as $value)
                                <option value="{{ $value->id }}">{{ $value->country_name }}</option>
                                @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="">Ambum</label>
                            <select name="ambum_id" class="form-control">
                                    @foreach($ambum as $value)
                                    <option value="{{ $value->id }}">{{ $value->name_ambum }}</option>
                                    @endforeach
                            </select>
                            </div>
                        <div class="form-group">
                            <label for="">Image</label><br>
                            <input type="file" name="image" class="form-control-file">
                        </div>

                        <div class="form-group">
                            <label for="">audio</label><br>
                            <input type="file" name="audio" class="form-control-file">
                        </div>

                        <button type="submit" class="btn btn-primary">Add</button>
                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>

                </form>
            </div>
        </div>
    </div>





@endsection

