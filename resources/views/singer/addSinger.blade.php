@extends('layouts.crud')

@section('title', 'Create Singer')

@section('content')

    <div class="container">
        <div class="card">

            <div class="form-group">
                <form method="POST" action="{{ route('singer.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name Singer</label>
                        <input type="text" name="singer_name"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">DOB</label>
                        <input type="text" name="dob"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Country</label>
                        <select name="country_id" class="form-control">
                            @foreach($country as $value)
                                <option value="{{ $value->id }}">{{ $value->country_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label><br>
                        <input type="text" name="gender" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label><br>
                        <input type="text" name="description" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label><br>
                        <input type="file" name="image" class="form-control-file">
                    </div>
                    <button type="submit" class="btn btn-success">Add</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>

                </form>
            </div>
        </div>
    </div>





@endsection

