@extends('index')

@section('content')
	<link rel="stylesheet" href="css/test.css">
	<script src="js/test.js"></script>

	<h1>service and steps</h1>
	@foreach ($steps as $step)
		{{$step->step}}: {{$step->nameStep}} <br>
		{{$step->content}} <br>
		<img src="{{$step->image}}">
	@endforeach
	<h1>models hot (products)</h1>
	@foreach ($models_hot as $model)
		<img src="{{$model->image}}">
	@endforeach
	<h1>san pham tieu bieu</h1>
	@foreach ($products as $product)
		<a href="/detail-product/{{$product->idPro}}">
    		<img src="{{$product->image}}" alt="Loi anh roi!"> <br>
    	</a>
    	<a href="/detail-product/{{$product->idPro}}">{{$product->name}}</a>  <br>
    	{{$product->price}} <br>
	@endforeach
@endsection
