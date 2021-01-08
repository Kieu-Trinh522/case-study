@extends('layouts.crud')

@section('title', 'Edit singer')

@section('content')

    <div class="container">
        <div class="card">

            <div class="form-group">
                <form method="POST" action="{{ route('singer.update', $singer->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="singer_name" value="{{ $singer->singer_name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Singer</label>
                        <input type="text" name="dob" value="{{ $singer->dob }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Country</label>
                        <select class="form-control" name="country_id">
                            @foreach($country as $value)
                                <option @if($singer->country_id == $value->id)
                                        {{ "selected" }}
                                        @endif
                                        value="{{ $value->id }}">{{ $value->country_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label><br>
                        <input type="text" name="gender" value="{{$singer->gender}}" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label><br>
                        <input type="text" name="description" value="{{$singer->description}}" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label><br>
                        <input type="file" name="image" class="form-control-file">
                    </div>


                    <button type="submit" class="btn btn-success">Update</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>



                </form>
            </div>
        </div>
    </div>







@endsection
