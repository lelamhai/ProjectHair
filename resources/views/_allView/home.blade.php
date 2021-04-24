<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>service and steps</h1>
	@foreach ($steps as $step)
		{{$step->step}}: {{$step->nameStep}} <br>
		{{$step->content}} <br>
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
</body>
</html>