<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Category</title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Table Booking Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!-- Meta tags -->
    <!--stylesheets-->
    <link href="{{asset('CRUD/web/css/style.css')}}" rel='stylesheet' type='text/css' media="all">
    <!--//style sheet end here-->
    <!-- Calendar -->
    <link rel="stylesheet" href="{{asset('CRUD/web/css/jquery-ui.css')}}" />
    <!-- //Calendar -->
    <link href="{{asset('CRUD/web/css/wickedpicker.css')}}" rel="stylesheet" type='text/css' media="all" />
    <!-- Time-script-CSS -->

    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
</head>

<body>
<h1 class="header-w3ls">
    Edit Country</h1>
<div class="appointment-w3">
    <form method="post" action="{{route('country.update',$country->id)}}">
        @csrf
        <div class="personal">

            <div class="main">
                <div class="form-left-w3l">

                    <input value="{{$country->country_name}}" type="text" class="top-up" name="country_name" required="">
                </div>

            </div>

        </div>
        <div class="information">

        </div>


        <div >
            <input class="btn btn-success" type="submit" value="EDIT">
            <a class=" btn btn-success" href="{{route('country.index')}}">Back</a>
        </div>
    </form>
</div>
<div class="copy">
    <p>&copy;2018 Table Booking Form. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
</div>
<!-- js -->
<script type='text/javascript' src="{{asset('CRUD/web/js/jquery-2.2.3.min.js')}}"></script>
<!-- //js -->
<!-- Calendar -->
<script src="{{asset('CRUD/web/js/jquery-ui.js')}}"></script>
<script>
    $(function () {
        $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
    });
</script>
<!-- //Calendar -->
<!-- Time -->
<script type="text/javascript" src="{{asset('CRUD/web/js/wickedpicker.js')}}"></script>
<script type="text/javascript">
    $('.timepicker,.timepicker1').wickedpicker({ twentyFour: false });
</script>
<!-- //Time -->

</body>

</html>
{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <title>Add</title>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

{{--    <!-- Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"--}}
{{--          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--</head>--}}
{{--<body>--}}

{{--<div class="search-form">--}}
{{--    <div class="search">--}}
{{--        <h3>Enter a name</h3>--}}
{{--        <div class="table-form">--}}
{{--            <form method="post" action="{{route('country.update',$country->id)}}">--}}
{{--                @csrf--}}
{{--                <input value="{{$country->country_name}}" type="text" name="country_name" class="textbox"  />--}}
{{--                <input  type="submit" class="form-button btn btn-primary" value="Edit">--}}
{{--            </form>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}


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
