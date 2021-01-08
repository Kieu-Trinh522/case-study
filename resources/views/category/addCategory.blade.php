@extends('layouts.app')

@section('title', 'Create Category')

@section('content')
    <div class="container">
    <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
        @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">NAME</span>
        <input type="text" name="category_name"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
        <button type="submit" class="btn btn-primary">Add New</button>
           <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">cancel</button>
        </form>
    </div>
    {{--<div class="container">--}}
{{--    <div class="card">--}}
{{--        <div class="input-group">--}}
{{--            <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">--}}
{{--                @csrf--}}
{{--                <div class="form-group">--}}
{{--                    <label>name</label>--}}
{{--                    <input type="text" name="category_name" class="form-control">--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-primary">Add New</button>--}}
{{--                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">cancel</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

@endsection
