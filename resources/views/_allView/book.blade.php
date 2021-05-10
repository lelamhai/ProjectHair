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


	<h3>Noi dung comment</h3>
	@foreach ($comments as $comment)<!-- if theo mã stylic -->
		{{$comment->idEmp}} : {{$comment->emp_comment->name}} 
		{{$comment->idUser}} : {{$comment->users_comment->name}} <p>{{$comment->content}}</p>
		<h3>///</h3>
	@endforeach
@endsection

