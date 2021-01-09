@extends('layouts.crud')

@section('title', 'Update Category')
@section('content')

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
    </div>
</div>



@endsection
