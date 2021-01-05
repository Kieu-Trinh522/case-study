@extends('layouts.app')

@section('title', 'list music')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                List Mucsic
            </div>
            <div class="card-header">
                <a href="{{ route('playlists.create') }}" class="btn btn-primary">Add</a>
                <a href="{{ route('category.index') }}" class="btn btn-primary">Category</a>
                <a href="{{ route('country.index') }}" class="btn btn-primary">Country</a>
            </div>
            <div class="table">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Singer</th>
                            <th>Category</th>
                            <th>Country</th>
                            <th>Image</th>
                            <th>Audio</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($playlists as $key => $playlist)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>
                                    {{ $playlist->music_name }}

                                </td>
                                <td>{{ $playlist->singer }}</td>
                                <td>{{ $playlist->category->category_name }}</td>
                                <td>{{ $playlist->country->country_name }}</td>
                                <td>
                                   <img src="{{asset($playlist->image) }}" height= '100px' width="100px" >
                                </td>
                                <td>
                                    <a href="{{ route('playlists.show', $playlist->id) }}">{{ $playlist->audio }}</a>
                                </td>
                                <td>
                                    <a href="{{ route('playlists.edit', $playlist->id) }}" class="btn btn-success">Update</a>
                                    <a href="{{ route('playlists.destroy', $playlist->id) }}" class="btn btn-danger" onclick="return confirm('Do you delete?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
{{--                    @dd($playlist)--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>






@endsection
