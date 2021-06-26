@extends('_adminView.index')

@section('content')
<section class="right">
	<div class="right__content">
		<div class="right__head d-flex">
			<div class="right__head-post d-flex">
				<h5 class="right__head-post-title">Models Hot</h5>
				<a href="{{route('get.addHot')}}" class="right__head-post-add">Thêm mới</a>
			</div>
		   
		</div>

		<!-- <div class="right__head-bar d-flex">
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
		</div> -->

		<div class="right__table">
			<div class="right__tableWrapper">
				<table>
					<thead>
						<tr>
							<th style="text-align: center;">Hình ảnh</th>
							<th>Chức năng</th>
						</tr>
					</thead>

					<tbody>

						@foreach ($hots as $hot)
							<tr class="right__table-item">
								<td class="stylelist" data-label="Email"><img src="{{$hot->thumbnail}}"></td>
								<td data-label="Số Hoá Đơn"><a class="right__table-item-btn right__table-item-btn--delete" href="/admin/delete-hot/{{$hot->id}}">Delete</button></td>

							</tr>
						@endforeach

						
						
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
</section>

<!-- {{-- popup --}}
{{-- <button id="btn-booking">Open Modal</button> --}}


<div id="modal-booking" class="modal">

  Modal content
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div> -->


@endsection
@section('css')
	<link rel="stylesheet" href="/assets/admin/css/booking.css">
@endsection

@section('script')
@endsection