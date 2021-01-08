@extends('layouts.crud')

@section('title', 'Update Category')
@section('content')
<h1 class="header-w3ls">
    Edit Category</h1>
<div class="appointment-w3">
    <form method="post" action="{{route('category.update',$category->id)}}">
        @csrf
        <div class="personal">

            <div class="main">
                <div class="form-left-w3l">

                    <input value="{{$category->category_name}}" type="text" class="top-up" name="category_name" required="">
                </div>

            </div>

        </div>
        


        <div >
            <input class="btn btn-success" type="submit" value="EDIT">
            <a class=" btn btn-success" href="{{route('category.index')}}">Back</a>
        </div>
    </form>
</div>



@endsection
