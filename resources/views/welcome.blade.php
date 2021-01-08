@extends('layouts.core.master')

@section('fe-content')

    <!---Recently Played Music--->
    <div class="ms_rcnt_slider">
        <div class="ms_heading">
            <h1>Recently Played</h1>
            <span class="veiw_all"><a href="#">view more</a></span>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/music/r_music1.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Dream Your Moments (Duet)</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next slider_nav_next"></div>
        <div class="swiper-button-prev slider_nav_prev"></div>
    </div>
    <!---Weekly Top 15--->
    <div class="ms_weekly_wrapper">
        <div class="ms_weekly_inner">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ms_heading">
                        <h1>weekly top 15</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 padding_right40">
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                                    <span class="w_top_no">
										01
									</span>
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="images/weekly/song1.jpg" alt="" class="img-fluid">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Until I Met You</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="images/svg/more.svg" alt="">
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
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                                    <span class="w_top_no">
										02
									</span>
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="images/weekly/song2.jpg" alt="" class="img-fluid">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Walking Promises</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="images/svg/more.svg" alt="">
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
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                                    <span class="w_top_no">
										03
									</span>
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="images/weekly/song3.jpg" alt="" class="img-fluid">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Gimme Some Courage</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="images/svg/more.svg" alt="">
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
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                                    <span class="w_top_no">
										04
									</span>
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="images/weekly/song4.jpg" alt="" class="img-fluid">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Desired Games</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="images/svg/more.svg" alt="">
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
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                                    <span class="w_top_no">
										05
									</span>
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="images/weekly/song5.jpg" alt="" class="img-fluid">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Dark Alley Acoustic</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="images/svg/more.svg" alt="">
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
                <div class="col-lg-4 col-md-12 padding_right40">
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                                    <span class="w_top_no">
										06
									</span>
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="images/weekly/song6.jpg" alt="" class="img-fluid">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Walking Promises</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="images/svg/more.svg" alt="">
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
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                                    <span class="w_top_no">
										07
									</span>
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="images/weekly/song7.jpg" alt="" class="img-fluid">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Endless Things</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="images/svg/more.svg" alt="">
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
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box ms_active_play">
                        <div class="weekly_left">
                                    <span class="w_top_no">
										08
									</span>
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="images/weekly/song8.jpg" alt="" class="img-fluid">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <div class="ms_bars">
                                            <div class="bar"></div>
                                            <div class="bar"></div>
                                            <div class="bar"></div>
                                            <div class="bar"></div>
                                            <div class="bar"></div>
                                            <div class="bar"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Dream Your Moments</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="images/svg/more.svg" alt="">
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
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                                    <span class="w_top_no">
										09
									</span>
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="images/weekly/song9.jpg" alt="" class="img-fluid">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Until I Met You</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="images/svg/more.svg" alt="">
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
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                                    <span class="w_top_no">
										10
									</span>
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="images/weekly/song5.jpg" alt="" class="img-fluid">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Gimme Some Courage</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="images/svg/more.svg" alt="">
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
                <div class="col-lg-4 col-md-12">
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                                    <span class="w_top_no">
										11
									</span>
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="images/weekly/song2.jpg" alt="" class="img-fluid">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Dark Alley Acoustic</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="images/svg/more.svg" alt="">
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
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                                    <span class="w_top_no">
										12
									</span>
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="images/weekly/song11.jpg" alt="" class="img-fluid">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">The Heartbeat Stops</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="images/svg/more.svg" alt="">
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
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                                    <span class="w_top_no">
										13
									</span>
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="images/weekly/song12.jpg" alt="" class="img-fluid">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">One More Stranger</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="images/svg/more.svg" alt="">
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
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                                    <span class="w_top_no">
										14
									</span>
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="images/weekly/song13.jpg" alt="" class="img-fluid">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Walking Promises</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="images/svg/more.svg" alt="">
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
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                                    <span class="w_top_no">
										15
									</span>
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="images/weekly/song14.jpg" alt="" class="img-fluid">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Endless Things</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="images/svg/more.svg" alt="">
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
            </div>
        </div>
    </div>
    <!---Featured Artists Music--->
    <div class="ms_featured_slider">
        <div class="ms_heading">
            <h1>Featured Artists</h1>
            <span class="veiw_all"><a href="#">view more</a></span>
        </div>
        <div class="ms_feature_slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/featured/song1.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Best Of Ava Cornish</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/featured/song2.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Until I Met You</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/featured/song3.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Gimme Some Courage</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/featured/song4.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Dark Alley Acoustic</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/featured/song5.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Walking Promises</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/featured/song6.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Desired Games</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/featured/song1.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Dream Your Moments (Duet)</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/featured/song2.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Until I Met You</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/featured/song3.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Gimme Some Courage</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/featured/song4.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Dark Alley Acoustic</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next1 slider_nav_next"></div>
        <div class="swiper-button-prev1 slider_nav_prev"></div>
    </div>
    <!----Add Section Start---->
    <div class="ms_advr_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#"><img src="images/adv.jpg" alt="" class="img-fluid"/></a>
                </div>
            </div>
        </div>
    </div>
    <!----New Releases Section Start---->
    <div class="ms_releases_wrapper">
        <div class="ms_heading">
            <h1>New Releases</h1>
            <span class="veiw_all"><a href="#">view more</a></span>
        </div>
        <div class="ms_release_slider swiper-container">
            <div class="ms_divider"></div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="ms_release_box">
                        <div class="w_top_song">
                            <span class="slider_dot"></span>
                            <div class="w_tp_song_img">
                                <img src="images/weekly/song1.jpg" alt="">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">Dark Alley Acoustic</a></h3>
                                <p>Ava Cornish</p>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_release_box">
                        <div class="w_top_song">
                            <span class="slider_dot"></span>
                            <div class="w_tp_song_img">
                                <img src="images/weekly/song2.jpg" alt="">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">Dark Alley Acoustic</a></h3>
                                <p>Ava Cornish</p>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_release_box">
                        <div class="w_top_song">
                            <span class="slider_dot"></span>
                            <div class="w_tp_song_img">
                                <img src="images/weekly/song3.jpg" alt="">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">Dark Alley Acoustic</a></h3>
                                <p>Ava Cornish</p>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_release_box">
                        <div class="w_top_song">
                            <span class="slider_dot"></span>
                            <div class="w_tp_song_img">
                                <img src="images/weekly/song4.jpg" alt="">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">Dark Alley Acoustic</a></h3>
                                <p>Ava Cornish</p>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_release_box">
                        <div class="w_top_song">
                            <span class="slider_dot"></span>
                            <div class="w_tp_song_img">
                                <img src="images/weekly/song5.jpg" alt="">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="#">Dark Alley Acoustic</a></h3>
                                <p>Ava Cornish</p>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next2 slider_nav_next"></div>
        <div class="swiper-button-prev2 slider_nav_prev"></div>
    </div>
    <!----Featured Albumn Section Start---->
    <div class="ms_fea_album_slider">
        <div class="ms_heading">
            <h1>Featured Albums</h1>
            <span class="veiw_all"><a href="#">view more</a></span>
        </div>
        <div class="ms_album_slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/album/album1.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Bloodlust</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/album/album2.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Time flies</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/album/album3.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Dark matters</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/album/album4.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Eye to eye</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/album/album5.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Cloud nine</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/album/album6.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Cobweb of lies</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/album/album1.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Bloodlust</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/album/album2.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Time flies</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/album/album3.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Dark matters</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/album/album4.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Eye to eye</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next3 slider_nav_next"></div>
        <div class="swiper-button-prev3 slider_nav_prev"></div>
    </div>
    <!----Top Genres Section Start---->
    <div class="ms_genres_wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="ms_heading">
                    <h1>Top Genres</h1>
                    <span class="veiw_all"><a href="#">view more</a></span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ms_genres_box">
                    <img src="images/genrs/img1.jpg" alt="" class="img-fluid" />
                    <div class="ms_main_overlay">
                        <div class="ms_box_overlay"></div>
                        <div class="ms_play_icon">
                            <img src="images/svg/play.svg" alt="">
                        </div>
                        <div class="ovrly_text_div">
                            <span class="ovrly_text1"><a href="#">romantic</a></span>
                            <span class="ovrly_text2"><a href="#">view song</a></span>
                        </div>
                    </div>
                    <div class="ms_box_overlay_on">
                        <div class="ovrly_text_div">
                            <span class="ovrly_text1"><a href="#">romantic</a></span>
                            <span class="ovrly_text2"><a href="#">view song</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ms_genres_box">
                            <img src="images/genrs/img2.jpg" alt="" class="img-fluid" />
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">Classical</a></span>
                                </div>
                            </div>
                            <div class="ms_box_overlay_on">
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">Classical</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ms_genres_box">
                            <img src="images/genrs/img3.jpg" alt="" class="img-fluid" />
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">hip hop</a></span>
                                </div>
                            </div>
                            <div class="ms_box_overlay_on">
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">hip hop</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ms_genres_box">
                            <img src="images/genrs/img5.jpg" alt="" class="img-fluid" />
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">dancing</a></span>
                                </div>
                            </div>
                            <div class="ms_box_overlay_on">
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">dancing</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ms_genres_box">
                            <img src="images/genrs/img6.jpg" alt="" class="img-fluid" />
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">EDM</a></span>
                                </div>
                            </div>
                            <div class="ms_box_overlay_on">
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">EDM</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="ms_genres_box">
                    <img src="images/genrs/img4.jpg" alt="" class="img-fluid" />
                    <div class="ms_main_overlay">
                        <div class="ms_box_overlay"></div>
                        <div class="ms_play_icon">
                            <img src="images/svg/play.svg" alt="">
                        </div>
                        <div class="ovrly_text_div">
                            <span class="ovrly_text1"><a href="#">rock</a></span>
                        </div>
                    </div>
                    <div class="ms_box_overlay_on">
                        <div class="ovrly_text_div">
                            <span class="ovrly_text1"><a href="#">rock</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Add Section Start---->
    <div class="ms_advr_wrapper ms_advr2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#"><img src="images/adv1.jpg" alt="" class="img-fluid"/></a>
                </div>
            </div>
        </div>
    </div>
    <!----Live Radio Section Start---->
    <div class="ms_radio_wrapper">
        <div class="ms_heading">
            <h1>Live Radio</h1>
            <span class="veiw_all"><a href="#">view more</a></span>
        </div>
        <div class="ms_radio_slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/radio/img1.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Top Trendings</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/radio/img2.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">New Romantic Charts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/radio/img3.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Dance Beats - Hip Hops</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/radio/img4.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Workout Time</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/radio/img5.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Best Classics Of All Time</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/radio/img6.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Heart Broken - Soul Music</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/radio/img1.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Dream Your Moments (Duet)</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/radio/img2.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Until I Met You</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/radio/img3.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Gimme Some Courage</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="images/radio/img4.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Dark Alley Acoustic</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next4 slider_nav_next"></div>
        <div class="swiper-button-prev4 slider_nav_prev"></div>
    </div>
    <!----Main div close---->

@endsection
