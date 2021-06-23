@extends('_adminView.index')

@section('content')
<section class="right">
	<div class="right__content">
		<div class="right__head d-flex">
			<div class="right__head-post d-flex">
				<h5 class="right__head-post-title">Đặt vé</h5>
			</div>
		   
		</div>

		<div class="right__head-bar d-flex">
			<div class="right__head-bar-select">
			  <div class="wrap-search-time">
				<div class="dropdown search-time-left">
				  <select class="search-day" name="" id="">
					<option value="">12/12/2020</option>
					<option value="">12/12/2020</option>
					<option value="">12/12/2020</option>
					<option value="">12/12/2020</option>
				  </select>
				</div>

				<div class="search-time-day">
					<button class="search-time-right">Tìm</button>
				</div>
			  </div>
			</div>
			<span class="right__head-bar-count"></span>
		</div>

		<div class="right__table">
			<div class="right__tableWrapper">
				<table>
					<thead>
						<tr>
							<th style="text-align: center;">StyleList</th>
							<th>Dịch vụ</th>
							<th>Thời gian đặt vé</th>
							<th>Khách hàng</th>
							<th>Số điện thoại</th>
							<th>Trạng thái</th>
							<th>Hủy lịch</th>
						</tr>
					</thead>

					<tbody>

						@foreach ($books as $book)
							<tr class="right__table-item">
								<td class="stylelist" data-label="Email">{{$book->emp_book->name}}</td>
								<td data-label="Số Hoá Đơn">{{$book->service_book->title}}</td>
								<td data-label="ID Sản Phẩm">
								  <div class="day-date">{{$book->date}}</div>
								</td>
								<td data-label="Số Hoá Đơn">{{$book->users_book->name}}</td>
								<td data-label="Số Hoá Đơn">{{$book->users_book->phone}}</td>
								<td data-label="Số Hoá Đơn">{{$book->finish}}
								</td>
								<td><button class="btn-delete-booking"><i class="fas fa-times"></i></button></td>

							</tr>
						@endforeach

						
						
					</tbody>
				</table>
				<span>{!! $books->render() !!}</span>
			</div>
		</div>
	</div>
</section>

{{-- popup --}}
{{-- <button id="btn-booking">Open Modal</button> --}}

<!-- The Modal -->
<div id="modal-booking" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>


@endsection
@section('css')
	<link rel="stylesheet" href="/assets/admin/css/booking.css">
@endsection

@section('script')
@endsection