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
                        <img src="{{ 'storege/images/play.svg' }}" alt="">
                    </div>
                </div>
                <div class="w_tp_song_name">
                    <h3><a href="#">{{ $playlist->music_name }}</a></h3>
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
<div class="player_mid">
    <div class="audio-player">
        <div id="jquery_jplayer_1" class="jp-jplayer" style="width: 0px; height: 0px;"><img id="jp_poster_0" style="width: 0px; height: 0px; display: none;"><audio id="jp_audio_0" preload="metadata" src="http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg" title="Cro Magnon Man"></audio></div>
        <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
            <div class="player_left">
                <div class="ms_play_song">
                    <div class="play_song_name">
                        <a href="javascript:void(0);" id="playlist-text">
                            <div class="jp-now-playing flex-item"><div class="jp-track-name"><span class="que_img"><img src="images/weekly/song1.jpg"></span><div class="que_data">Cro Magnon Man <div class="jp-artist-name">Mushroom Records</div></div></div></div>
                        </a>
                    </div>
                </div>
                <div class="play_song_options">
                    <ul>
                        <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_download"></i></span>download now</a></li>
                        <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_fav"></i></span>Add
                                To Favourites</a></li>
                        <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_playlist"></i></span>Add To Playlist</a></li>
                        <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_share"></i></span>Share</a>
                        </li>
                    </ul>
                </div>
                <span class="play-left-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            </div>
            <!----Right Queue---->
            <div class="jp_queue_wrapper">
                <span class="que_text" id="myPlaylistQueue"><i class="fa fa-angle-up" aria-hidden="true"></i> queue</span>
                <div id="playlist-wrap" class="jp-playlist find_li">
                    <div class="jp_queue_cls"><i class="fa fa-times" aria-hidden="true"></i></div>
                    <h2>queue</h2>
                    <div class="jp_queue_list_inner mCustomScrollbar _mCS_2 mCS-autoHide mCS_no_scrollbar" style="height: 345px; position: relative; overflow: visible;"><div id="mCSB_2" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" tabindex="0" style="max-height: 345px;"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                <ul style=""><li class="jp-playlist-current"><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0"><span class="que_img"><img src="images/weekly/song1.jpg"></span><div class="que_data">Cro Magnon Man <span class="jp-artist">by Mushroom Records</span></div></a><div class="action"><span class="que_more"><img src="images/svg/more.svg"></span><span class="que_close"><img src="images/svg/close.svg"></span></div></div><ul class="more_option"><li class="jp-playlist-current"><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0"><span class="que_img"><img src="images/weekly/song2.jpg"></span><div class="que_data">Your Face <span class="jp-artist">by Ministry</span></div></a><div class="action"><span class="que_more"><img src="images/svg/more.svg"></span><span class="que_close"><img src="images/svg/close.svg"></span></div></div><ul class="more_option"><li class="jp-playlist-current"><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0"><span class="que_img"><img src="images/weekly/song3.jpg"></span><div class="que_data">Cyber Sonnet <span class="jp-artist">by You Am I</span></div></a><div class="action"><span class="que_more"><img src="images/svg/more.svg"></span><span class="que_close"><img src="images/svg/close.svg"></span></div></div><ul class="more_option"><li class="jp-playlist-current"><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0"><span class="que_img"><img src="images/weekly/song4.jpg"></span><div class="que_data">Tempered Song <span class="jp-artist">by Shelter</span></div></a><div class="action"><span class="que_more"><img src="images/svg/more.svg"></span><span class="que_close"><img src="images/svg/close.svg"></span></div></div><ul class="more_option"><li class="jp-playlist-current"><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0"><span class="que_img"><img src="images/weekly/song5.jpg"></span><div class="que_data">Hidden <span class="jp-artist">by Bad Religion</span></div></a><div class="action"><span class="que_more"><img src="images/svg/more.svg"></span><span class="que_close"><img src="images/svg/close.svg"></span></div></div><ul class="more_option"><li class="jp-playlist-current"><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0"><span class="que_img"><img src="images/weekly/song6.jpg"></span><div class="que_data">Lentement <span class="jp-artist">by Apollo 440</span></div></a><div class="action"><span class="que_more"><img src="images/svg/more.svg"></span><span class="que_close"><img src="images/svg/close.svg"></span></div></div><ul class="more_option"><li class="jp-playlist-current"><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0"><span class="que_img"><img src="images/weekly/song7.jpg"></span><div class="que_data">Lismore <span class="jp-artist">by Bloodhound Gang</span></div></a><div class="action"><span class="que_more"><img src="images/svg/more.svg"></span><span class="que_close"><img src="images/svg/close.svg"></span></div></div><ul class="more_option"><li class="jp-playlist-current"><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0"><span class="que_img"><img src="images/weekly/song8.jpg"></span><div class="que_data">The Separation <span class="jp-artist">by Friendly Fires </span></div></a><div class="action"><span class="que_more"><img src="images/svg/more.svg"></span><span class="que_close"><img src="images/svg/close.svg"></span></div></div><ul class="more_option"><li class="jp-playlist-current"><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0"><span class="que_img"><img src="images/weekly/song9.jpg"></span><div class="que_data">Beside Me <span class="jp-artist">by Friendly Fires </span></div></a><div class="action"><span class="que_more"><img src="images/svg/more.svg"></span><span class="que_close"><img src="images/svg/close.svg"></span></div></div><ul class="more_option"><li class="jp-playlist-current"><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0"><span class="que_img"><img src="images/weekly/song2.jpg"></span><div class="que_data">Bubble <span class="jp-artist">by Skunkhour</span></div></a><div class="action"><span class="que_more"><img src="images/svg/more.svg"></span><span class="que_close"><img src="images/svg/close.svg"></span></div></div><ul class="more_option"><li class="jp-playlist-current"><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0"><span class="que_img"><img src="images/weekly/song2.jpg"></span><div class="que_data">Stirring of a fool <span class="jp-artist">by The Meanies</span></div></a><div class="action"><span class="que_more"><img src="images/svg/more.svg"></span><span class="que_close"><img src="images/svg/close.svg"></span></div></div><ul class="more_option"><li class="jp-playlist-current"><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0"><span class="que_img"><img src="images/weekly/song2.jpg"></span><div class="que_data">Partir <span class="jp-artist">by The Living End</span></div></a><div class="action"><span class="que_more"><img src="images/svg/more.svg"></span><span class="que_close"><img src="images/svg/close.svg"></span></div></div><ul class="more_option"><li class="jp-playlist-current"><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0"><span class="que_img"><img src="images/weekly/song2.jpg"></span><div class="que_data">Thin Ice <span class="jp-artist">by Screaming Trees</span></div></a><div class="action"><span class="que_more"><img src="images/svg/more.svg"></span><span class="que_close"><img src="images/svg/close.svg"></span></div></div><ul class="more_option"><li class="jp-playlist-current"><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul></li></ul>
                            </div></div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-minimal mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
                    <div class="jp_queue_btn">
                        <a href="javascript:;" class="ms_clear" data-toggle="modal" data-target="#clear_modal">clear</a>
                        <a href="clear_modal.html" class="ms_save" data-toggle="modal" data-target="#save_modal">save</a>
                    </div>
                </div>
            </div>
            <div class="jp-type-playlist">
                <div class="jp-gui jp-interface flex-wrap">
                    <div class="jp-controls flex-item">
                        <button class="jp-previous" tabindex="0">
                            <i class="ms_play_control"></i>
                        </button>
                        <button class="jp-play" tabindex="0">
                            <i class="ms_play_control"></i>
                        </button>
                        <button class="jp-next" tabindex="0">
                            <i class="ms_play_control"></i>
                        </button>
                    </div>
                    <div class="jp-progress-container flex-item">
                        <div class="jp-time-holder">
                            <span class="jp-current-time" role="timer" aria-label="time">00:00</span>
                            <span class="jp-duration" role="timer" aria-label="duration">04:27</span>
                        </div>
                        <div class="jp-progress">
                            <div class="jp-seek-bar" style="width: 100%;">
                                <div class="jp-play-bar" style="width: 0%;">
                                    <div class="bullet">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="jp-volume-controls flex-item">
                        <div class="widget knob-container">
                            <div class="knob-wrapper-outer">
                                <div class="knob-wrapper">
                                    <div class="knob-mask">
                                        <div class="knob d3" style="transform: rotateZ(270deg);"><span></span></div>
                                        <div class="handle" style="transform: rotateZ(270deg);"></div>
                                        <div class="round">
                                            <img src="storage/images/svg/volume.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- <input></input> -->
                            </div>
                        </div>
                    </div>
                    <div class="jp-toggles flex-item">
                        <button class="jp-shuffle" tabindex="0" title="Shuffle">
                            <i class="ms_play_control"></i></button>
                        <button class="jp-repeat" tabindex="0" title="Repeat"><i class="ms_play_control"></i>
                        </button>
                    </div>
                    <div class="jp_quality_optn custom_select">
                        <select style="display: none;">
                            <option>quality</option>
                            <option value="1">HD</option>
                            <option value="2">High</option>
                            <option value="3">medium</option>
                            <option value="4">low</option>
                        </select><div class="nice-select" tabindex="0"><span class="current">quality</span><ul class="list"><li data-value="quality" class="option selected">quality</li><li data-value="1" class="option">HD</li><li data-value="2" class="option">High</li><li data-value="3" class="option">medium</li><li data-value="4" class="option">low</li></ul></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach








@endsection
