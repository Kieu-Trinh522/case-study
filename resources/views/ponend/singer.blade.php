@extends('layouts.home')
@section('title', 'Music 2021')
@section('content')

    @foreach($singers as $key=>$singer)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{url('storage/' .$singer->image)}}" alt="Card image cap">
        <div class="card-body">
            <p class="card-text">{{$singer->description}}</p>
        </div>
    </div>
    @endforeach


@endsection
