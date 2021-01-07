@extends('layouts.app')

@section('title', 'Country')

@section('content')
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        List Country
                        <div>

                            <a class="btn btn-success" href="{{route('country.create')}}">Add New</a>
                            <button class="btn btn-secondary" onclick="window.history.go(-1); return false">Cancel</button></div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name Country</th>
                                    <th>Number Of Country</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($countries as $key=>$country)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$country->country_name}}</td>
                                        <td>{{ count($country->playlist) }}</td>
                                        <td>
                                            <a class="btn btn-success" href="{{route('country.edit',$country->id)}}">Update</a>
                                            <a class="btn btn-danger" href="{{route('country.delete',$country->id)}}" onclick="return confirm('Do you Delete ?')">Delete</a>
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

