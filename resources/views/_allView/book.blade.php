@extends('index')

@section('content')
	<br><br><br><br>
	<h3>Danh sach cac stylic</h3>
	@foreach ($emps as $emp)
		{{$emp->name}}	
	@endforeach
	
	<h3>Danh sach lich da duoc dat cua cac stylic</h3>

	@foreach ($listReserved as $item)
		{{$item->emp_book->name}}	|| <p> phuc vu </p> {{$item->users_book->name}} <p> vao luc </p> {{$item->time}} <p> ngay </p> {{$item->date}}
		<h3>/////////////</h3>
	@endforeach
@endsection

