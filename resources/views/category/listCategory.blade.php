
@extends('layouts.app')

@section('title', 'Category')

@section('search')
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"
method="post" action="{{ route('category.search') }}" enctype="multipart/form-data">
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
                        List Category
                    </div>
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        <a class="btn btn-success" href="{{route('category.create')}}">{{ __('messages.add') }}</a>
                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false">{{ __('messages.cancel') }}</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>{{ __('messages.name_category') }}</th>
                                    <th>{{ __('messages.number') }}</th>
                                    <th>{{ __('messages.action') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $key => $category)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$category->category_name}}</td>
                                        <td>{{ count($category->playlist) }}</td>
                                        <td>
                                            <a class="btn btn-success" href="{{route('category.edit',$category->id)}}">{{ __('messages.update') }}</a>
                                            <a class="btn btn-danger" href="{{route('category.destroy',$category->id)}}"
                                               onclick="return confirm('Do you delete?')">{{ __('messages.delete') }}</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

@endsection

