<!DOCTYPE HTML>
<html>
<head>
    <title>Music admin Category</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link href="{{asset('backend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!--js-->
    <script src="{{asset('backend/js/jquery-2.1.1.min.js')}}"></script>
    <!--icons-css-->
    <link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet">
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <!--static chart-->
    <script src="{{asset('backend/js/Chart.min.js')}}"></script>
    <!--//charts-->
    <!-- geo chart -->
    <script src="{{asset('backend/cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js')}}" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="{{asset('backend/lib/modernizr/modernizr-custom.js')}}"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
    <!-- Chartinator  -->
    <script src="{{asset('backend/js/chartinator.js')}}"></script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],

                colIndexes: [2],

                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],

                ignoreCol: [2],

                chartType: 'GeoChart',

                chartAspectRatio: 1.5,

                chartZoom: 1.75,

                chartOffset: [-12, 0],

                chartOptions: {

                    width: null,

                    backgroundColor: '#fff',

                    datalessRegionColor: '#F5F5F5',

                    region: 'world',

                    resolution: 'countries',

                    legend: 'none',

                    colorAxis: {

                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {

                        trigger: 'focus',

                        isHtml: true
                    }
                }


            });
        });
    </script>
    <!--geo chart-->

    <!--skycons-icons-->
    <script src="{{asset('backend/js/skycons.js')}}}"></script>
    <!--//skycons-icons-->
</head>
<body>
<div class="page-container" style="background-color: mediumpurple">
    <div class="left-content">
        <div class="mother-grid-inner">
            <!--header start here-->
            <div class="header-main" >
                <div class="header-left">
                    <div class="logo-name" >
                        <a href="{{route('category.index')}}"><h1 style="color: rebeccapurple">MUSIC</h1>
                            <!--<img id="logo" src="" alt="Logo"/>-->
                        </a>
                    </div>
                    <!--search-box-->
                    <div class="search-box">
                        <form>
                            <input type="text" placeholder="Search..." required="">
                            <input type="submit" value="">
                        </form>
                    </div><!--//end-search-box-->
                    <div class="clearfix"></div>
                </div>
                <div class="header-right">
                    <div class="profile_details_left"><!--notifications of menu start -->
                        <ul class="nofitications-dropdown">
                            <li class="dropdown head-dpdn">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                        class="fa fa-envelope"></i><span class="badge">3</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have 3 new messages</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="{{asset('backend/images/p4.png')}}" alt="">
                                            </div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li class="odd"><a href="#">
                                            <div class="user_img"><img src="{{asset('backend/images/p2.png')}}" alt="">
                                            </div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="{{asset('backend/images/p3.png')}}" alt="">
                                            </div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#">See all messages</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown head-dpdn">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                        class="fa fa-bell"></i><span class="badge blue">3</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have 3 new notification</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="{{asset('backend/images/p5.png')}}" alt="">
                                            </div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li class="odd"><a href="#">
                                            <div class="user_img"><img src="{{asset('backend/images/p6.png')}}" alt="">
                                            </div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="{{asset('backend/images/p7.png')}}" alt="">
                                            </div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#">See all notifications</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown head-dpdn">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                        class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have 8 pending task</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar yellow" style="width:40%;"></div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar green" style="width:90%;"></div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Mobile App</span><span
                                                    class="percentage">33%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar red" style="width: 33%;"></div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Issues fixed</span><span
                                                    class="percentage">80%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar  blue" style="width: 80%;"></div>
                                            </div>
                                        </a></li>
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#">See all pending tasks</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!--notification menu end -->
                    <div class="profile_details">
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">
                                        <span class="prfil-img"><img src="{{asset('backend/images/p1.png')}}"
                                                                     alt=""> </span>
                                        <div class="user-name">
                                            <p style="color: rebeccapurple">Malorum</p>
                                            <span>Administrator</span>
                                        </div>
                                        <i class="fa fa-angle-down lnr"></i>
                                        <i class="fa fa-angle-up lnr"></i>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--heder end here-->
            <!-- script-for sticky-nav -->
            <script>
                $(document).ready(function () {
                    var navoffeset = $(".header-main").offset().top;
                    $(window).scroll(function () {
                        var scrollpos = $(window).scrollTop();
                        if (scrollpos >= navoffeset) {
                            $(".header-main").addClass("fixed");
                        } else {
                            $(".header-main").removeClass("fixed");
                        }
                    });

                });
            </script>
            <!-- /script-for sticky-nav -->
            <!--inner block start here-->
            <div class="inner-block">
                <!--market updates updates-->
                <div class="market-updates">
                    <div class="col-md-4 market-update-gd" >
                        <div class="market-update-block clr-block-1" style="background-color: #a88add">
                            <div class="col-md-8 market-update-left" >
                                <h3>83</h3>
                                <h4>Registered User</h4>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-file-text-o"> </i>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-4 market-update-gd">
                        <div class="market-update-block clr-block-2" style="background-color: rebeccapurple">
                            <div class="col-md-8 market-update-left">
                                <h3>135</h3>
                                <h4>Daily Visitors</h4>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-eye"> </i>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-4 market-update-gd">
                        <div class="market-update-block clr-block-3">
                            <div class="col-md-8 market-update-left">
                                <h3>23</h3>
                                <h4>New Messages</h4>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-envelope-o"> </i>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--market updates end here-->
                <!--mainpage chit-chating-->
                <div class="chit-chat-layer1">
                    <div class="col-md-12 chit-chat-layer1-left">
                        <div class="work-progres">
                            <div class="chit-chat-heading">
                                LIST CATEGORY
                            </div>
                            <div class="table-responsive">
                                <a href="{{route('country.create')}}" class="btn btn-success">ADD</a>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>CATEGORY NAME</th>
                                        <th>ACTION</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($countries as $key=>$country)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$country->country_name}}</td>
                                            <td>
                                                <a class="btn btn-success" href="{{route('country.edit',$country->id)}}">EDIT</a>
                                                <a class="btn btn-danger" href="{{route('country.delete',$country->id)}}">DELETE</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>No data</tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--main page chit chating end here-->
                <!--main page chart start here-->
                <div class="main-page-charts">
                    <div class="main-page-chart-layer1">
                        <div class="col-md-6 chart-layer1-left">
                            <div class="glocy-chart">
                                <div class="span-2c">
                                    <h3 class="tlt">Sales Analytics</h3>
                                    <canvas id="bar" height="300" width="400"
                                            style="width: 400px; height: 300px;"></canvas>
                                    <script>
                                        var barChartData = {
                                            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "jul"],
                                            datasets: [
                                                {
                                                    fillColor: "rebeccapurple",
                                                    data: [65, 59, 90, 81, 56, 55, 40]
                                                },
                                                {
                                                    fillColor: "#337AB7",
                                                    data: [28, 48, 40, 19, 96, 27, 100]
                                                }
                                            ]

                                        };
                                        new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);

                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 chart-layer1-right">
                            <div class="user-marorm">
                                <div class="malorum-top">
                                </div>
                                <div class="malorm-bottom">
                                    <span class="malorum-pro"> </span>
                                    <h4>unde omnis iste</h4>
                                    <h2>Melorum</h2>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising.</p>
                                    <ul class="malorum-icons">
                                        <li><a href="#"><i class="fa fa-facebook"> </i>
                                                <div class="tooltip"><span>Facebook</span></div>
                                            </a></li>
                                        <li><a href="#"><i class="fa fa-twitter"> </i>
                                                <div class="tooltip"><span>Twitter</span></div>
                                            </a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"> </i>
                                                <div class="tooltip"><span>Google</span></div>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--main page chart layer2-->
                <div class="chart-layer-2">



                    <div class="clearfix"></div>
                </div>

                <!--climate start here-->

                <!--climate end here-->
            </div>
            <!--inner block end here-->
            <!--copy rights start here-->
            <div class="copyrights">
                <p>© 2016 Shoppy. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a>
                </p>
            </div>
            <!--COPY rights end here-->
        </div>
    </div>
    <!--slider menu-->
    <div class="sidebar-menu" style="background-color: rebeccapurple">
        <div class="logo"><a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span
                    id="logo"></span>
                <!--<img id="logo" src="" alt="Logo"/>-->
            </a></div>
        <div class="menu">
            <ul id="menu">
                <li id="menu-home"><a href="{{route('category.index')}}"><i class="fa fa-tachometer"></i><span>Home</span></a>
                </li>
                <li><a href="#"><i class="fa fa-cogs"></i><span>Components</span><span class="fa fa-angle-right"
                                                                                       style="float: right"></span></a>
                    <ul>
                        <li><a href="{{route('country.index')}}">Country</a></li>
                        <li><a href="{{asset('backend/portlet.html')}}">Music</a></li>
                    </ul>
                </li>
                <li id="menu-comunicacao"><a href="#"><i class="fa fa-book nav_icon"></i><span>Element</span><span
                            class="fa fa-angle-right" style="float: right"></span></a>
                    <ul id="menu-comunicacao-sub">
                        <li id="menu-mensagens" style="width: 120px"><a
                                href="{{asset('backend/buttons.html')}}">Buttons</a>
                        </li>
                        <li id="menu-arquivos"><a href="{{asset('backend/typography.html')}}">Typography</a></li>
                        <li id="menu-arquivos"><a href="{{asset('backend/icons.html')}}">Icons</a></li>
                    </ul>
                </li>
                <li><a href="{{asset('backend/maps.html')}}"><i class="fa fa-map-marker"></i><span>Maps</span></a></li>
                <li id="menu-academico"><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><span
                            class="fa fa-angle-right" style="float: right"></span></a>
                    <ul id="menu-academico-sub">
                        <li id="menu-academico-boletim"><a href="{{asset('backend/login.html')}}">Login</a></li>
                        <li id="menu-academico-avaliacoes"><a href="{{asset('backend/signup.html')}}">Sign Up</a></li>
                    </ul>
                </li>

                <li><a href="{{asset('backend/charts.html')}}"><i class="fa fa-bar-chart"></i><span>Charts</span></a>
                </li>
                <li><a href="#"><i class="fa fa-envelope"></i><span>Mailbox</span><span class="fa fa-angle-right"
                                                                                        style="float: right"></span></a>
                    <ul id="menu-academico-sub">
                        <li id="menu-academico-avaliacoes"><a href="{{asset('backend/inbox.html')}}">Inbox</a></li>
                        <li id="menu-academico-boletim"><a href="{{asset('backend/inbox-details.html')}}">Compose
                                email</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-cog"></i><span>System</span><span class="fa fa-angle-right"
                                                                                  style="float: right"></span></a>
                    <ul id="menu-academico-sub">
                        <li id="menu-academico-avaliacoes"><a href="{{asset('backend/404.html')}}">404</a></li>
                        <li id="menu-academico-boletim"><a href="{{asset('backend/blank.html')}}">Blank</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i><span>E-Commerce</span><span
                            class="fa fa-angle-right" style="float: right"></span></a>
                    <ul id="menu-academico-sub">
                        <li id="menu-academico-avaliacoes"><a href="{{asset('backend/product.html')}}">Product</a></li>
                        <li id="menu-academico-boletim"><a href="{{asset('backend/price.html')}}">Price</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!--slide bar menu end here-->
<script>
    var toggle = true;

    $(".sidebar-icon").click(function () {
        if (toggle) {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({"position": "absolute"});
        } else {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function () {
                $("#menu span").css({"position": "relative"});
            }, 400);
        }
        toggle = !toggle;
    });
</script>
<!--scrolling js-->
<script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('backend/js/scripts.js')}}"></script>
<!--//scrolling js-->
<script src="{{asset('backend/js/bootstrap.js')}}"></script>
<!-- mother grid end here-->
</body>
</html>

{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <title>Title</title>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

{{--    <!-- Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"--}}
{{--          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--</head>--}}
{{--<body>--}}
{{--<form>--}}
{{--    <a class="btn btn-success" href="{{route('country.create')}}">ADD</a>--}}
{{--    <table class="table">--}}
{{--        <tr>--}}
{{--            <th>STT</th>--}}
{{--            <th>NAME CATEGORY</th>--}}
{{--            <th>ACTION</th>--}}
{{--        </tr>--}}
{{--        @forelse($countries as $key=>$country)--}}
{{--        <tr>--}}
{{--            <td>{{++$key}}</td>--}}
{{--            <td>{{$country->country_name}}</td>--}}
{{--            <td>--}}
{{--                <a class="btn btn-success" href="{{route('country.edit',$country->id)}}">EDIT</a>--}}
{{--                <a class="btn btn-danger" href="{{route('country.delete',$country->id)}}">DELETE</a>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        @empty--}}
{{--        <tr>No data</tr>--}}
{{--        @endforelse--}}
{{--    </table>--}}
{{--</form>--}}
{{--<!-- Optional JavaScript -->--}}
{{--<!-- jQuery first, then Popper.js, then Bootstrap JS -->--}}
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"--}}
{{--        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"--}}
{{--        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"--}}
{{--        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--</body>--}}
{{--</html>--}}
