@extends('index')
@section('content')
	
	<h3>Danh muc</h3>
	@foreach ($categories as $category)
		<a href="/products-of-categories/{{$category->idCate}}">{{$category->name}}</a>
	@endforeach

	<h3>------------</h3>

	<h3>San pham xuat hien dau tien</h3>
	@foreach ($products as $product)
		<img src="{{$product->image}}" alt="Loi anh roi!"> <br>
		{{$product->name}} : {{$product->price}}
	@endforeach

@endsection