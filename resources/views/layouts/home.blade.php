<!DOCTYPE html>

<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('ponend/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ponend/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ponend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ponend/js/plugins/swiper/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ponend/js/plugins/nice_select/nice-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ponend/js/plugins/player/volume.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ponend/js/plugins/scroll/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ponend/css/style.css') }}">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('ponend/images/favicon.png') }}">
</head>

<body>
<!----Loader Start---->
<div class="ms_loader">
    <div class="wrap">
        <img src="{{ 'storage/images/loader.gif' }}" alt="">
    </div>
</div>
<!----Main Wrapper Start---->
<div class="ms_main_wrapper">
    <!---Side Menu Start--->
    <div class="ms_sidemenu_wrapper">
        <div class="ms_nav_close">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </div>
        <div class="ms_sidemenu_inner">
            <div class="ms_logo_inner">
                <div class="ms_logo">
                    <a href="index-2.html"><img src="{{ 'storage/images/logo.png' }}" alt="" class="img-fluid"/></a>
                </div>
                <div class="ms_logo_open">
                    <a href="index-2.html"><img src="{{ 'storage/images/open_logo.png' }}" alt=""
                                                class="img-fluid"/></a>
                </div>
            </div>
            <div class="ms_nav_wrapper">
                <ul>
                    <li><a href="{{asset('ponend/index-2.html')}}" class="active" title="Discover">
						<span class="nav_icon">
							<span class="icon icon_discover"></span>
						</span>
                            <span class="nav_text">
							discover
						</span>
                        </a>
                    </li>
                    <li><a href="{{asset('ponend/album.html')}}" title="Albums">
						<span class="nav_icon">
							<span class="icon icon_albums"></span>
						</span>
                            <span class="nav_text">
							albums
						</span>
                        </a>
                    </li>
                    <li><a href="artist.html" title="Artists">
						<span class="nav_icon">
							<span class="icon icon_artists"></span>
						</span>
                            <span class="nav_text">
							artists
						</span>
                        </a>
                    </li>
                    <li><a href="genres.html" title="Genres">
						<span class="nav_icon">
							<span class="icon icon_genres"></span>
						</span>
                            <span class="nav_text">
							genres
						</span>
                        </a>
                    </li>
                    <li><a href="top_track.html" title="Top Tracks">
						<span class="nav_icon">
							<span class="icon icon_tracks"></span>
						</span>
                            <span class="nav_text">
							top tracks
						</span>
                        </a>
                    </li>
                    <li><a href="free_music.html" title="Free Music">
						<span class="nav_icon">
							<span class="icon icon_music"></span>
						</span>
                            <span class="nav_text">
							free music
						</span>
                        </a>
                    </li>
                    <li><a href="stations.html" title="Stations">
						<span class="nav_icon">
							<span class="icon icon_station"></span>
						</span>
                            <span class="nav_text">
							stations
						</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav_downloads">
                    <li><a href="download.html" title="Downloads">
						<span class="nav_icon">
							<span class="icon icon_download"></span>
						</span>
                            <span class="nav_text">
							downloads
						</span>
                        </a>
                    </li>
                    <li><a href="purchase.html" title="Purchased">
						<span class="nav_icon">
							<span class="icon icon_purchased"></span>
						</span>
                            <span class="nav_text">
							purchased
						</span>
                        </a>
                    </li>
                    <li><a href="favourite.html" title="Favourites">
						<span class="nav_icon">
							<span class="icon icon_favourite"></span>
						</span>
                            <span class="nav_text">
							favourites
						</span>
                        </a>
                    </li>
                    <li><a href="history.html" title="History">
						<span class="nav_icon">
							<span class="icon icon_history"></span>
						</span>
                            <span class="nav_text">
							history
						</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav_playlist">
                    <li><a href="feature_playlist.html" title="Featured Playlist">
						<span class="nav_icon">
							<span class="icon icon_fe_playlist"></span>
						</span>
                            <span class="nav_text">
							featured playlist
						</span>
                        </a>
                    </li>
                    <li><a href="add_playlist.html" title="Create Playlist">
						<span class="nav_icon">
							<span class="icon icon_c_playlist"></span>
						</span>
                            <span class="nav_text">
							create playlist
						</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!---Main Content Start--->
    <div class="ms_content_wrapper padder_top80">
        <!---Header--->
        <div class="ms_header">
            <div class="ms_top_left">
                <div class="ms_top_search">
                    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"
                          method="post" action="{{ route('frontend.search') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <input class="form-control" type="search" name="search" placeholder="Search for..." aria-label="Search"
                                   aria-describedby="basic-addon2"/>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="ms_top_trend">
                    <span><a href="#" class="ms_color">Trending Songs :</a></span> <span class="top_marquee"><a
                            href="#">Dream your moments, Until I Met You, Gimme Some Courage, Dark Alley (+8 More)</a></span>
                </div>
            </div>
            <div class="ms_top_right">
                <div class="ms_top_lang">
                    <span data-toggle="modal" data-target="#lang_modal">languages <img
                            src="{{ 'storage/images/lang.svg' }}" alt=""></span>
                </div>
                @if(!\Illuminate\Support\Facades\Session::has('login'))
                <div class="ms_top_btn">
                    <a href="" class="ms_btn reg_btn"><span>register</span></a>
                    <a href="{{route('user.index')}}" class="ms_btn login_btn"><span>login</span></a>
                </div>
                @else
                    <div class="ms_top_btn">
                        <a href="{{route('user.logout')}}" class="ms_btn reg_btn"><span>Log Out</span></a>
                    </div>
                @endif
            </div>
        </div>
        <!---Banner--->
        <div class="ms-banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="ms_banner_img">
                            <img src="{{ 'storage/images/banner.png' }}" alt="" class="img-fluid">
                        </div>
                        <div class="ms_banner_text">
                            <h1>This Month’s</h1>
                            <h1 class="ms_color">Record Breaking Albums !</h1>
                            <p>Dream your moments, Until I Met You, Gimme Some Courage, Dark Alley, One More Of A
                                Stranger, Endless<br> Things, The Heartbeat Stops, Walking Promises, Desired Games and
                                many more...</p>
                            <div class="ms_banner_btn">
                                <a href="#" class="ms_btn">Listen Now</a>
                                <a href="#" class="ms_btn">Add To Queue</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---Recently Played Music--->
        <div class="ms_rcnt_slider">
            <div class="ms_featured_slider">
                <div class="ms_heading">
                    <h1>Featured Albums</h1>
                    <span class="veiw_all"><a href="#">view more</a></span>
                </div>
                <div class="ms_feature_slider swiper-container">
                    <div class="swiper-wrapper">

                        @foreach($albums as $album)
                        <div class="swiper-slide">
                            <div class="ms_rcnt_box">
                                <div class="ms_rcnt_box_img">
                                    <img src="{{ url('storage/' . $album->image) }}" style="width: 200px; height: 200px" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="ms_rcnt_box_text">
                                    <h3><a href="{{route('frontend.album',$album->id)}}">{{ $album->name_album }}</a></h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next1 slider_nav_next"></div>
                <div class="swiper-button-prev1 slider_nav_prev"></div>
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

                        @yield('content')

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
                        @foreach($singers as $singer)
                        <div class="swiper-slide">
                            <div class="ms_rcnt_box">
                                <div class="ms_rcnt_box_img">
                                    <img src="{{ url('storage/' . $singer->image) }}" style="width: 200px; height: 200px" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="ms_rcnt_box_text">
                                    <h3><a href="{{route('frontend.singer', $singer->id)}}">{{ $singer->singer_name }}</a></h3>
                                </div>
                            </div>
                        </div>
                        @endforeach



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
                            <a href="#"><img src="{{ 'storage/images/adv.jpg' }}" alt="" class="img-fluid"/></a>
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

                    @foreach($categories as $category)
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">

                            <div class="ms_release_box">

                                <div class="w_top_song">

                                    <span class="slider_dot"></span>

                                    <div class="w_tp_song_img">
                                        <img src="{{ 'storage/images/weekly/song1.jpg' }}" alt="">
                                        <div class="ms_song_overlay">
                                        </div>
                                    </div>

                                    <div class="w_tp_song_name">
                                        <h3><a href="{{route('frontend.category',$category->id)}}">{{$category->category_name}}</a></h3>

                                    </div>

                                </div>
                                <div class="weekly_right">
                                    <span class="w_song_time">5:10</span>
                                </div>

                            </div>

                        </div>

                    </div>
                    @endforeach

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
                                    <img src="{{ 'storage/images/album/album1.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
                                    <img src="{{ 'storage/images/album/album2.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
                                    <img src="{{ 'storage/images/album/album3.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
                                    <img src="{{ 'storage/images/album/album4.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
                                    <img src="{{ 'storage/images/album/album5.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
                                    <img src="{{ 'storage/images/album/album6.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
                                    <img src="{{ 'storage/images/album/album1.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
                                    <img src="{{ 'storage/images/album/album2.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
                                    <img src="{{ 'storage/images/album/album3.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
                                    <img src="{{ 'storage/images/album/album4.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
{{--            <div class="ms_genres_wrapper">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="ms_heading">--}}
{{--                            <h1>Top Genres</h1>--}}
{{--                            <span class="veiw_all"><a href="#">view more</a></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4">--}}
{{--                        <div class="ms_genres_box">--}}
{{--                            <img src="{{ 'storage/images/genrs/img1.jpg' }}" alt="" class="img-fluid"/>--}}
{{--                            <div class="ms_main_overlay">--}}
{{--                                <div class="ms_box_overlay"></div>--}}
{{--                                <div class="ms_play_icon">--}}
{{--                                    <img src="{{ 'storage/images/svg/play.svg' }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="ovrly_text_div">--}}
{{--                                    <span class="ovrly_text1"><a href="#">romantic</a></span>--}}
{{--                                    <span class="ovrly_text2"><a href="#">view song</a></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="ms_box_overlay_on">--}}
{{--                                <div class="ovrly_text_div">--}}
{{--                                    <span class="ovrly_text1"><a href="#">romantic</a></span>--}}
{{--                                    <span class="ovrly_text2"><a href="#">view song</a></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-4">--}}
{{--                                <div class="ms_genres_box">--}}
{{--                                    <img src="{{ 'storage/images/genrs/img2.jpg' }}" alt="" class="img-fluid"/>--}}
{{--                                    <div class="ms_main_overlay">--}}
{{--                                        <div class="ms_box_overlay"></div>--}}
{{--                                        <div class="ms_play_icon">--}}
{{--                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="ovrly_text_div">--}}
{{--                                            <span class="ovrly_text1"><a href="#">Classical</a></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms_box_overlay_on">--}}
{{--                                        <div class="ovrly_text_div">--}}
{{--                                            <span class="ovrly_text1"><a href="#">Classical</a></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-8">--}}
{{--                                <div class="ms_genres_box">--}}
{{--                                    <img src="{{ 'storage/images/genrs/img3.jpg' }}" alt="" class="img-fluid"/>--}}
{{--                                    <div class="ms_main_overlay">--}}
{{--                                        <div class="ms_box_overlay"></div>--}}
{{--                                        <div class="ms_play_icon">--}}
{{--                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="ovrly_text_div">--}}
{{--                                            <span class="ovrly_text1"><a href="#">hip hop</a></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms_box_overlay_on">--}}
{{--                                        <div class="ovrly_text_div">--}}
{{--                                            <span class="ovrly_text1"><a href="#">hip hop</a></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-8">--}}
{{--                                <div class="ms_genres_box">--}}
{{--                                    <img src="{{ 'storage/images/genrs/img5.jpg' }}" alt="" class="img-fluid"/>--}}
{{--                                    <div class="ms_main_overlay">--}}
{{--                                        <div class="ms_box_overlay"></div>--}}
{{--                                        <div class="ms_play_icon">--}}
{{--                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="ovrly_text_div">--}}
{{--                                            <span class="ovrly_text1"><a href="#">dancing</a></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms_box_overlay_on">--}}
{{--                                        <div class="ovrly_text_div">--}}
{{--                                            <span class="ovrly_text1"><a href="#">dancing</a></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-4">--}}
{{--                                <div class="ms_genres_box">--}}
{{--                                    <img src="{{ 'storage/images/genrs/img6.jpg' }}" alt="" class="img-fluid"/>--}}
{{--                                    <div class="ms_main_overlay">--}}
{{--                                        <div class="ms_box_overlay"></div>--}}
{{--                                        <div class="ms_play_icon">--}}
{{--                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="ovrly_text_div">--}}
{{--                                            <span class="ovrly_text1"><a href="#">EDM</a></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms_box_overlay_on">--}}
{{--                                        <div class="ovrly_text_div">--}}
{{--                                            <span class="ovrly_text1"><a href="#">EDM</a></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-2">--}}
{{--                        <div class="ms_genres_box">--}}
{{--                            <img src="{{ 'storage/images/genrs/img4.jpg' }}" alt="" class="img-fluid"/>--}}
{{--                            <div class="ms_main_overlay">--}}
{{--                                <div class="ms_box_overlay"></div>--}}
{{--                                <div class="ms_play_icon">--}}
{{--                                    <img src="{{ 'storage/images/svg/play.svg' }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="ovrly_text_div">--}}
{{--                                    <span class="ovrly_text1"><a href="#">rock</a></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="ms_box_overlay_on">--}}
{{--                                <div class="ovrly_text_div">--}}
{{--                                    <span class="ovrly_text1"><a href="#">rock</a></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!----Add Section Start---->
            <div class="ms_advr_wrapper ms_advr2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="#"><img src="{{ 'storage/images/adv1.jpg' }}" alt="" class="img-fluid"/></a>
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
                                    <img src="{{ 'storage/images/radio/img1.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
                                    <img src="{{ 'storage/images/radio/img2.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
                                    <img src="{{ 'storage/images/radio/img3.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
                                    <img src="{{ 'storage/images/radio/img4.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
                                    <img src="{{ 'storage/images/radio/img5.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
                                    <img src="{{ 'storage/images/radio/img6.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
                                    <img src="{{ 'storage/images/radio/img1.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
                                    <img src="{{ 'storage/images/radio/img2.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
                                    <img src="{{ 'storage/images/radio/img3.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
                                    <img src="{{ 'storage/images/radio/img4.jpg' }}" alt="">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        <div class="ms_more_icon">
                                            <img src="{{ 'storage/images/svg/more.svg' }}" alt="">
                                        </div>
                                        <ul class="more_option">
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_fav"></span></span>Add To Favourites</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_queue"></span></span>Add To Queue</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_dwn"></span></span>Download Now</a></li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_playlst"></span></span>Add To Playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><span
                                                            class="icon icon_share"></span></span>Share</a></li>
                                        </ul>
                                        <div class="ms_play_icon">
                                            <img src="{{ 'storage/images/svg/play.svg' }}" alt="">
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
        </div>
        <!----Footer Start---->
        <div class="ms_footer_wrapper">
            <div class="ms_footer_logo">
                <a href="index-2.html"><img src="{{ 'storage/images/open_logo.png' }}" alt=""></a>
            </div>
            <div class="ms_footer_inner">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer_box">
                            <h1 class="footer_title">miraculous music station</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer_box footer_app">
                            <h1 class="footer_title">Download our App</h1>
                            <p>Go Mobile with our app.<br> Listen to your favourite songs at just one click. Download
                                Now !
                            </p>
                            <a href="#" class="foo_app_btn"><img src="{{ 'storage/images/google_play.jpg' }}" alt="" class="img-fluid"></a>
                            <a href="#" class="foo_app_btn"><img src="{{ 'storage/images/app_store.jpg' }}" alt=""
                                                                 class="img-fluid"></a>
                            <a href="#" class="foo_app_btn"><img src="{{ 'storage/images/windows.jpg' }}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer_box footer_subscribe">
                            <h1 class="footer_title">subscribe</h1>
                            <p>Subscribe to our newsletter and get latest updates and offers.</p>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <a href="#" class="ms_btn">sign me up</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer_box footer_contacts">
                            <h1 class="footer_title">contact us</h1>
                            <ul class="foo_con_info">
                                <li>
                                    <div class="foo_con_icon">
                                        <img src="{{ 'storage/images/svg/phone.svg' }}" alt="">
                                    </div>
                                    <div class="foo_con_data">
                                        <span class="con-title">Call us :</span>
                                        <span>(+1) 202-555-0176, (+1) 2025-5501</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="foo_con_icon">
                                        <img src="{{ 'storage/images/svg/message.svg' }}" alt="">
                                    </div>
                                    <div class="foo_con_data">
                                        <span class="con-title">email us :</span>
                                        <span><a href="#">demo@mail.com </a>, <a href="#">dummy@mail.com</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="foo_con_icon">
                                        <img src="{{ 'storage/images/svg/add.svg' }}" alt="">
                                    </div>
                                    <div class="foo_con_data">
                                        <span class="con-title">walk in :</span>
                                        <span>598 Old House Drive, London</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="foo_sharing">
                                <div class="share_title">follow us :</div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!----Copyright---->
            <div class="col-lg-12">
                <div class="ms_copyright">
                    <div class="footer_border"></div>
                    <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                </div>
            </div>
        </div>
        <!----Audio Player Section---->
        <div class="ms_player_wrapper">
            <div class="ms_player_close">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </div>
            <div class="player_mid">
                <div class="audio-player">
                    <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                    <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                        <div class="player_left">
                            {{-- <div class="ms_play_song">
                                <div class="play_song_name">
                                    <a href="javascript:void(0);" id="playlist-text">
                                        <div class="jp-now-playing flex-item">
                                            <div class="jp-track-name"></div>
                                            <div class="jp-artist-name"></div>
                                        </div>
                                    </a>
                                </div>
                            </div> --}}
                            <div class="play_song_options">
                                <ul>
                                    <li><a href="#"><span class="song_optn_icon"><i
                                                    class="ms_icon icon_download"></i></span>download now</a></li>
                                    <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_fav"></i></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="song_optn_icon"><i
                                                    class="ms_icon icon_playlist"></i></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="song_optn_icon"><i
                                                    class="ms_icon icon_share"></i></span>Share</a>
                                    </li>
                                </ul>
                            </div>
                            <span class="play-left-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        </div>
                        <!----Right Queue---->
                        <div class="jp_queue_wrapper">
                            <span class="que_text" id="myPlaylistQueue"><i class="fa fa-angle-up"
                                                                           aria-hidden="true"></i> queue</span>
                            <div id="playlist-wrap" class="jp-playlist">
                                <div class="jp_queue_cls"><i class="fa fa-times" aria-hidden="true"></i></div>
                                <h2>queue</h2>
                                <div class="jp_queue_list_inner">
                                    <ul>
                                        <li>&nbsp;</li>
                                    </ul>
                                </div>
                                <div class="jp_queue_btn">
                                    <a href="javascript:;" class="ms_clear" data-toggle="modal"
                                       data-target="#clear_modal">clear</a>
                                    <a href="clear_modal.html" class="ms_save" data-toggle="modal"
                                       data-target="#save_modal">save</a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="jp-type-playlist">
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
                                        <span class="jp-current-time" role="timer" aria-label="time">&nbsp;</span>
                                        <span class="jp-duration" role="timer" aria-label="duration">&nbsp;</span>
                                    </div>
                                    <div class="jp-progress">
                                        <div class="jp-seek-bar">
                                            <div class="jp-play-bar">
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
                                                    <div class="knob d3"><span></span></div>
                                                    <div class="handle"></div>
                                                    <div class="round">
                                                        <img src="{{ 'storage/images/svg/volume.svg' }}" alt="">
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
                                    <button class="jp-repeat" tabindex="0" title="Repeat"><i
                                            class="ms_play_control"></i>
                                    </button>
                                </div>
                                <div class="jp_quality_optn custom_select">
                                    <select>
                                        <option>quality</option>
                                        <option value="1">HD</option>
                                        <option value="2">High</option>
                                        <option value="3">medium</option>
                                        <option value="4">low</option>
                                    </select>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!--main div-->
        </div>
    </div>
    <!----Language Selection Modal---->
    <div class="ms_lang_popup">
        <div id="lang_modal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <h1>language selection</h1>
                        <p>Please select the language(s) of the music you listen to.</p>
                        <ul class="lang_list">
                            <li>
                                <label class="lang_check_label">
                                    English
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    hindi
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    punjabi
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    French
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>:pe="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Spanish
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Chinese
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Japanese
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Arabic
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Italian
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                        </ul>
                        <div class="ms_lang_btn">
                            <a href="#" class="ms_btn">apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Queue Clear Model ---->
    <div class="ms_clear_modal">
        <div id="clear_modal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <h1>Are you sure you want to clear your queue?</h1>
                        <div class="clr_modal_btn">
                            <a href="#">clear all</a>
                            <a href="#">cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Queue Save Modal---->
    <div class="ms_save_modal">
        <div id="save_modal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <h1>Log in to start sharing your music!</h1>
                        <div class="save_modal_btn">
                            <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i> continue with google
                            </a>
                            <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i> continue with facebook</a>
                        </div>
                        <div class="ms_save_email">
                            <h3>or use your email</h3>
                            <div class="save_input_group">
                                <input type="text" placeholder="Enter Your Name" class="form-control">
                            </div>
                            <div class="save_input_group">
                                <input type="password" placeholder="Enter Password" class="form-control">
                            </div>
                            <button class="save_btn">Log in</button>
                        </div>
                        <div class="ms_dnt_have">
                            <span>Dont't have an account ?</span>
                            <a href="javascript:;" class="hideCurrentModel" data-toggle="modal" data-target="#myModal">Register
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Main js file Style-->
    <script type="text/javascript" src="{{ asset('ponend/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ponend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ponend/js/plugins/swiper/js/swiper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ponend/js/plugins/player/jplayer.playlist.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ponend/js/plugins/player/jquery.jplayer.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ponend/js/plugins/player/audio-player.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ponend/js/plugins/player/volume.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('ponend/js/plugins/nice_select/jquery.nice-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ponend/js/plugins/scroll/jquery.mCustomScrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ponend/js/custom.js') }}"></script>
</div>
</body>

</html>
