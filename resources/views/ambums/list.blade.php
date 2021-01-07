@extends('layouts.app')

@section('title', 'Ambum')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Ambum
        </div>
        <div class="card-header">
            <a href="{{ route('ambums.create') }}" class="btn btn-primary">Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Singer Ambum</th>
                        <th>Image</th>
                        <th>Number Of Ambum </th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ambums as $key => $ambum)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>
                                {{ $ambum->name }}

                            </td>
                            <td>{{ $ambum->singer_ambum }}</td>
                            <td>
                                <img src="{{ url('storage/' . $ambum->image) }}" height="100px"
                                     width="100px">
                            </td>
                            <td>{{ count($ambum->playlist) }}</td>
                            <td>
                                <a href="{{ route('ambums.edit', $ambum->id) }}"
                                   class="btn btn-success">Update</a>
                                <a href="{{ route('ambums.destroy', $ambum->id) }}"
                                   class="btn btn-danger"
                                   onclick="return confirm('Do you delete?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
