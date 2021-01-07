@extends('layouts.crud')

@section('title', 'Update Ambum')

@section('content')

<div class="container">
    <div class="card">
        <div class="form-group">
            <form method="POST" action="{{ route('ambums.update', $ambum->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{ $ambum->name_ambum }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Singer Ambum</label>
                    <input type="text" name="singer_ambum" value="{{ $ambum->singer_ambum }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Image</label><br>
                    <input type="file" name="image" value="{{ $ambum->image }}" class="form-control-file">
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
</div>

@endsection
