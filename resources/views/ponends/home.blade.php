@extends('layouts.home')
@section('title', 'Music 2021')
@section('content')

@foreach($playlists as $key => $playlist)

<div class="col-lg-4 col-md-12 padding_right40">
    <div class="ms_weekly_box">
        <div class="weekly_left">
            <span class="w_top_no">
                {{ ++$key }}
            </span>
            <div class="w_top_song">
                <div class="w_tp_song_img">
                    <img src="{{ url('storage/' . $playlist->image) }}"
                             >
                    <div class="ms_song_overlay">
                    </div>
                    <div class="ms_play_icon">
                        <img src="{{ 'storage/images/play.svg' }}" alt="">
                    </div>
                </div>
                <div class="w_tp_song_name">
                    <h3><a href="{{ route('frontend.play', $playlist->id) }}">{{ $playlist->music_name }}</a></h3>
                    <p>Ava Cornish</p>
                </div>
            </div>
        </div>
        <div class="weekly_right">
            <span class="w_song_time">5:10</span>
            <span class="ms_more_icon" data-other="1">
                <img src="{{ asset('storage/images/more.svg') }}" alt="">
            </span>
        </div>
        <ul class="more_option">
            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
        </ul>
    </div>

</div>


@endforeach

{{-- <ul class="pagination">
    <li class="paginate_button page-item previous disabled" id="dataTable_previous">
        <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
    </li>
    <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
    </li>
    <li class="paginate_button page-item next disabled" id="dataTable_next">
        <a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
    </li>
</ul> --}}
<div class="col-12 pagination" style="font-size:20px; width:30px; height:100px; text-align: right!important;">
    {{ $playlists->links("pagination::bootstrap-4") }}
</div>







@endsection



