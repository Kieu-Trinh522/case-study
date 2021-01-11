
@extends('layouts.app')

@section('title', 'Country')

@section('search')
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"
method="post" action="{{ route('country.search') }}" enctype="multipart/form-data">
    @csrf
    <div class="input-group">
        <input class="form-control" type="search" name="search" placeholder="Search for..." aria-label="Search"
               aria-describedby="basic-addon2"/>
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </div>
</form>

@endsection

@section('content')

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        List Country
                        <div>

                            <a class="btn btn-success" href="{{route('country.create')}}">{{ __('messages.add') }}</a>
                            <button class="btn btn-secondary" onclick="window.history.go(-1); return false">{{ __('messages.cancel') }}</button></div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>{{ __('messages.name_country') }}</th>
                                    <th>{{ __('messages.number') }}</th>
                                    <th>{{ __('messages.action') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($countries as $key=>$country)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$country->country_name}}</td>
                                        <td>{{ count($country->playlist) }}</td>
                                        <td>
                                            <a class="btn btn-success" href="{{route('country.edit',$country->id)}}">{{ __('messages.update') }}</a>
                                            <a class="btn btn-danger" href="{{route('country.delete',$country->id)}}" onclick="return confirm('Do you Delete ?')">{{ __('messages.delete') }}</a>
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

@endsection

{{--=======--}}
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
{{-->>>>>>> dev--}}
