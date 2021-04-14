<!DOCTYPE html>
<html>
<head>
	<title>10 Step</title>
</head>
<body>
	@include('header')

	@foreach ($steps as $step)
	{{$step->step}} : {{$step->nameStep}}
	<p>{{$step->content}}</p>
    	<img src="{{$step->image}}" alt="Loi anh roi!" width="500" height="500">
    <h5>------------------------</h5>
	@endforeach

	@include('footer')
</body>
</html>