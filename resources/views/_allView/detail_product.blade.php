@extends('index')

@section('content')

	<img src="{{$product->image}}" alt="Loi anh roi!"> <br>
	{{$product->name}} : {{$product->price}} <br>
	{{$product->detailed_description}}

	<h3>San pham lien quan</h3>
	@foreach ($products as $product)
		<a href="">
    		<img src="{{$product->image}}" alt="Loi anh roi!"> <br>
    	</a>
    	{{$product->name}} <br>
    	{{$product->price}} <br>
	@endforeach

@endsection
