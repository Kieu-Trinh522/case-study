<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->

<head>
    <base href="{{asset('/ ')}}">
    <title>Miraculous - Online Music Store Html Template</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/swiper/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/nice_select/nice-select.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/player/volume.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/scroll/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
</head>

<body>
<!----Loader Start---->
<!--	<div class="ms_loader">-->
<!--		<div class="wrap">-->
<!--		  <img src="images/loader.gif" alt="">-->
<!--		</div>-->
<!--	</div>-->
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
                    <a href="index-2.html"><img src="images/logo.png" alt="" class="img-fluid"/></a>
                </div>
                <div class="ms_logo_open">
                    <a href="index-2.html"><img src="images/open_logo.png" alt="" class="img-fluid"/></a>
                </div>
            </div>
            <div class="ms_nav_wrapper">
                <ul>
                    <li><a href="index-2.html" title="Discover">
						<span class="nav_icon">
							<span class="icon icon_discover"></span>
						</span>
                            <span class="nav_text">
							discover
						</span>
                        </a>
                    </li>
                    <li><a href="album.html" title="Albums">
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
                    <input type="text" class="form-control" placeholder="Search Music Here..">
                    <span class="search_icon">
							<img src="images/svg/search.svg" alt="">
						</span>
                </div>
                <div class="ms_top_trend">
                    <span><a href="#"  class="ms_color">Trending Songs :</a></span> <span class="top_marquee"><a href="#">Dream your moments, Until I Met You, Gimme Some Courage, Dark Alley (+8 More)</a></span>
                </div>
            </div>
            <div class="ms_top_right">
                <div class="ms_top_lang">
                    <span data-toggle="modal" data-target="#lang_modal">languages <img src="images/svg/lang.svg" alt=""></span>
                </div>
                <div class="ms_top_btn">
                    <a href="javascript:;" class="ms_btn reg_btn" data-toggle="modal" data-target="#myModal"><span>register</span></a>
                    <a href="javascript:;" class="ms_btn login_btn" data-toggle="modal" data-target="#myModal1"><span>login</span></a>
                </div>
            </div>
        </div>
        <!---Banner--->
        <div class="ms-banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="ms_banner_img">
                            <img src="images/banner.png" alt="" class="img-fluid">
                        </div>
                        <div class="ms_banner_text">
                            <h1>This Month’s</h1>
                            <h1 class="ms_color">Record Breaking Albums !</h1>
                            <p>Dream your moments, Until I Met You, Gimme Some Courage, Dark Alley, One More Of A Stranger, Endless<br> Things, The Heartbeat Stops, Walking Promises, Desired Games and many more...</p>
                            <div class="ms_banner_btn">
                                <a href="#" class="ms_btn">Listen Now</a>
                                <a href="#" class="ms_btn">Add To Queue</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
