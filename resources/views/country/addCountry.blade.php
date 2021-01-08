@extends('layouts.crud')
@section('title', 'Create Country')

@section('content')
<h1 class="header-w3ls">
    Add Country</h1>
<div class="appointment-w3">
    <form method="post" action="{{route('country.create')}}">
        @csrf
        <div class="personal">

            <div class="main">
                <div class="form-left-w3l">

                    <input  type="text" class="top-up" name="country_name" required="">
                </div>

            </div>

        </div>
        <div class="information">

        </div>


        <div >
            <input class="btn btn-success" type="submit" value="ADD">
            <a class=" btn btn-success" href="{{route('country.index')}}">Back</a>
        </div>
    </form>
</div>

@endsection
