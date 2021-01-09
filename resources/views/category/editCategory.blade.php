@extends('layouts.app')

@section('title', 'Edit Country')

@section('content')

<<<<<<< HEAD
<div class="container">
    <div class="card">
        <div class="form-group">
            <form method="POST" action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>name</label>
                    <input type="text" name="category_name" value="{{ $category->category_name }}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Add New</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">cancel</button>
            </form>
        </div>
=======

    <div class="container">
        <form method="POST" action="{{ route('category.update',$category->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">NAME</span>
                <input type="text" name="category_name" value="{{ $category->category_name }}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">cancel</button>
        </form>
>>>>>>> 6d7e2e9634cfbeaa30dbf8f53c1ba39e573061ae
    </div>
{{--<div class="container">--}}
{{--    <div >--}}
{{--        <div class="form-group">--}}
{{--            <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">--}}
{{--                @csrf--}}
{{--                <div class="form-group">--}}
{{--                    <label ><h3  >name</h3></label>--}}
{{--                    <input type="text" name="category_name" value="{{ $category->category_name }}" class="form-control">--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-primary">Add New</button>--}}
{{--                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">cancel</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}



@endsection
