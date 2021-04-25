@extends('index')

@section('content')
	@foreach ($services as $service)
	<h4>{{$service->name}}</h4>
	<h5>{{$service->price}}</h5>
    <a href="/service/{{$service->id}}">
    	<img src="" alt="Loi anh roi!" width="280" height="300	">
    </a>
    <h5>------------------------</h5>
	@endforeach
@endsection
