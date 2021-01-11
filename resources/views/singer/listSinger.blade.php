
@extends('layouts.app')

@section('title', 'Singer')

@section('content')

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            List Music
            <a class="btn btn-success" href="{{ route('singer.create') }}">ADD</a>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false">Cancel</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name Singer</th>
                        <th>Dob</th>
                        <th>Country</th>
                        <th>gender</th>
                        <th>description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($singers as $key => $singer)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>
                                {{ $singer->singer_name }}

                            </td>
                            <td>{{ $singer->dob }}</td>
                            <td>{{ $singer->country->country_name }}</td>
{{--                            <td></td>--}}
                            <td>{{ $singer->gender }}</td>
                            <td>{{ $singer->description }}</td>
                            <td>
                                <img src="{{ url('storage/' . $singer->image) }}" height="100px"
                                     width="100px">
                            </td>

                            <td>
                                <a href="{{route('singer.edit',$singer->id)}}"
                                   class="btn btn-success">Update</a>
                                <a href="{{route('singer.destroy',$singer->id)}}"
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


@endsection
