
@extends('layouts.app')

@section('title', 'Category')

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
                                @forelse($categories as $key=>$category)
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
                                @empty
                                    <tr>No data</tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

@endsection

