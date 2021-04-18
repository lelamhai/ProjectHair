@extends('_adminView.root')

@section('content')
	<h3>Chi tiet ca buoc nha may con di!</h3>
	<li><a href="/admin/add-details-service"><i class="fa fa-desktop fa-3x"></i>
			Add new</a></li>
	@foreach ($steps as $step)
	{{$step->step}} : {{$step->nameStep}}
	<p>{{$step->content}}</p>
    	<img src="{{$step->image}}" alt="Loi anh roi!" width="500" height="500">
    <h5>------------------------</h5>
	@endforeach
@endsection