@extends('layouts.crud')

@section('title', 'Create Music')

@section('content')

    <div class="container">
        <div class="card">
            <div class="form-group">
                <form method="POST" action="{{ route('ambums.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name_ambum" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Singer Ambum</label>
                        <input type="text" name="singer_ambum" class="form-control">
                    </div>


                        <div class="form-group">
                            <label for="">Image</label><br>
                            <input type="file" name="image" class="form-control-file">
                        </div>

                        <button type="submit" class="btn btn-primary">Add</button>
                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>

                </form>
            </div>
        </div>
    </div>

@endsection

