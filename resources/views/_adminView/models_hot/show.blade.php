@extends('_adminView.index')

@section('content')
<section class="right">
	<div class="right__content">
		<div class="right__head d-flex">
			<div class="right__head-post d-flex">
				<h5 class="right__head-post-title">Mẫu tóc</h5>
				<a href="{{route('get.addHot')}}" class="right__head-post-add">Thêm mới</a>
			</div>
		</div>

		<div class="right__table">
			<div class="right__tableWrapper">
				<table>
					<thead>
						<tr>
							<th>Tên hình</th>
							<th style="text-align: center;">Hình ảnh</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($hots as $hot)
							<tr class="right__table-item">
								<td style="text-align: left;">
									tên hình
									<div class="right__table-item-change">
										<a class="right__table-item-btn right__table-item-btn--edit" href="/admin/edit-product/">Chỉnh sửa</a>
										|
										<a class="right__table-item-btn right__table-item-btn--delete" href="/admin/delete-hot/">Xóa</button>
									</div>
								</td>
								<td class="stylelist" ><img src="{{$hot->thumbnail}}"></td>
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