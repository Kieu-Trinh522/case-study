@extends('layouts.app')

@section('title', 'Ambum')

@section('search')
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"
method="post" action="{{ route('albums.search') }}" enctype="multipart/form-data">
    @csrf
    <div class="input-group">
        <input class="form-control" type="search" name="search" placeholder="Search for..." aria-label="Search"
               aria-describedby="basic-addon2"/>
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </div>
</form>

@endsection

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Album
        </div>
        <div class="card-header">
            <a href="{{ route('albums.create') }}" class="btn btn-primary">{{ __('messages.add') }}</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>{{ __('messages.music_name') }}</th>
                        <th>{{ __('messages.singer_album') }}</th>
                        <th>{{ __('messages.image') }}</th>
                        <th>{{ __('messages.number_album') }}</th>
                        <th>{{ __('messages.action') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($albums as $key => $album)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>
                                {{ $album->name_album}}

                            </td>
                            <td>{{ $album->singer_album }}</td>
                            <td>
                                <img src="{{ url('storage/' . $album->image) }}" height="100px"
                                     width="100px">
                            </td>
                            <td>{{ count($album->playlist) }}</td>
                            <td>
                                <a href="{{ route('albums.edit', $album->id) }}"
                                   class="btn btn-success">{{ __('messages.update') }}</a>
                                <a href="{{ route('albums.destroy', $album->id) }}"
                                   class="btn btn-danger"
                                   onclick="return confirm('Do you delete?')">{{ __('messages.delete') }}</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
