@extends('_adminView.index')

@section('content')
	<h3>Chi tiet ca buoc nha may con di!</h3>
	<li><a href="/admin/add-details-service"><i class="fa fa-desktop fa-3x"></i>
			Add new</a></li>
	<table>
		<thead>
			<tr>
				<th>Check box</th>
				<th>Title</th>
				<th>Categories</th>
				<th>Date</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($steps as $step)
				<tr>
					<td>
						Checkbox
					</td>
					<td>
						{{$step->step}} {{$step->title}} <br>
						<a href="http://localhost:8000/admin/edit-step/{{$step->id}}">Edit</a> | <a 
						href="admin/delete-step/{{$step->id}}">Delete</a>
					</td>
					<td>
						{{$service->title}}
					</td>
					<td>
						Created <br>
						{{$step->created_at}} <br>
						Updated <br>
						{{$step->updated_at}}
					</td>
				</tr>
			@endforeach
		</tbody>

	</table>
	<span>{!! $steps->render() !!}</span>
<style>
	.pagination li{
		list-style: none;
		float: left;
		margin-left: 5px;
	}
</style>
	<!--  {{$step->step}} : {{$step->title}}
	<p>{{$step->content}}</p>
    	<img src="{{$step->thumbnail}}" alt="Loi anh roi!" width="500" height="500">
    <h5>------------------------</h5> -->
	
@endsection