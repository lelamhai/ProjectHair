<!DOCTYPE html>
<html>
<head>
	<title>Detail Product/title></title>
</head>
<body>
	@include('header')

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

	@include('footer')
</body>
</html>