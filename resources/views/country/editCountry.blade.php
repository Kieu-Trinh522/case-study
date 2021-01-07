@extends('layouts.crud')

@section('title', 'Update Country')

@section('content')
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
        


        <div >
            <input class="btn btn-success" type="submit" value="EDIT">
            <a class=" btn btn-success" href="{{route('country.index')}}">Back</a>
        </div>
    </form>
</div>







@endsection
