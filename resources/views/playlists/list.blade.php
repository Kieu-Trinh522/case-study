
@extends('layouts.app')

@section('title', 'Playlist Music')

@section('content')

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        List Music
        <a class="btn btn-success" href="{{route('playlists.create')}}">{!! __('messages.add') !!}</a>
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false">Cancel</button>
    </div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>STT</th>
                <th>{!! __('messages.music_name') !!}</th>
                <th>{!! __('messages.singer') !!}</th>
                <th>{!! __('messages.category') !!}</th>
                <th>{!! __('messages.country') !!}</th>
                <th>{!! __('messages.album') !!}</th>
                <th>{!! __('messages.image') !!}</th>
                <th>{!! __('messages.audio') !!}</th>
                <th>{!! __('messages.action') !!}</th>
            </tr>
            </thead>

            <tbody>
            @foreach($playlists as $key => $playlist)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>
                        {{ $playlist->music_name }}

                    </td>
{{--                    @dd($playlist->singer->singer_name)--}}
                    <td>{{ $playlist->singer->singer_name }}</td>
                    <td>{{ $playlist->category->category_name }}</td>
                    <td>{{ $playlist->country->country_name }}</td>
                    <td>{{ $playlist->ambum->name_ambum }}</td>
                    <td>
                        <img src="{{ url('storage/' . $playlist->image) }}" height="100px"
                             width="100px">
                    </td>
                    <td>

                        <audio controls>
                            <source src="{{ url('storage/audio/' . $playlist->audio) }}"
                                    type="audio/mp3">
                            Your browser does not support the audio element.
                            </audio>
                    </td>
                    <td>
                        <a href="{{ route('playlists.edit', $playlist->id) }}"
                           class="btn btn-success">{!! __('messages.update') !!}</a>
                        <a href="{{ route('playlists.destroy', $playlist->id) }}"
                           class="btn btn-danger"
                           onclick="return confirm('Do you delete?')">{!! __('messages.delete') !!}</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
</div>


@endsection
