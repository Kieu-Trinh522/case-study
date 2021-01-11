
@extends('layouts.app')

@section('title', 'editUser')

@section('content')

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Edit user
        </div>
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false">Cancel</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>email</th>
                        <th>Level</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $key=>$user)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->level}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td>
                                <a @if(\Illuminate\Support\Facades\Auth::user()->level!=='Admin' || $user->level == "Admin") hidden @endif class="btn btn-success" href="{{route('user.edit',$user->id)}}">Update</a>
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

