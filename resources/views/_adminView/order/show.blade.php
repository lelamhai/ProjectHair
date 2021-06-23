@extends('_adminView.index')

@section('content')
<section class="right">
	<div class="right__content">
		<div class="right__head d-flex">
			<div class="right__head-post d-flex">
				<h5 class="right__head-post-title">Danh Sách Đơn Hàng</h5>
				<!--<a href="{{route('get.addProduct')}}" class="right__head-post-add">Add New</a> -->
			</div>
			<div class="right__head-search">
				{{-- <input type="text" class="right__head-search-input">
				<button type="button" class="right__head-search-btn">Search Posts</button> --}}
			</div>
		</div>
		<div class="right__head-bar d-flex">
			<div class="right__head-bar-select">
				{{-- <input type="checkbox" id="all" class="right__head-bar-checkbox">
				<label for="all" class="right__head-bar-label">All</label>
				<button class="right__head-bar-delete">Delete</button> --}}
			</div>
			<span class="right__head-bar-count">2 items</span>
		</div>

		<div class="right__table">
			<div class="right__tableWrapper">
				<table>
					<thead>
						<tr>
							<th style="text-align: left;">Mã Đơn Hàng</th>
							<th>Tổng Tiền</th>
							<th>Ngày Đặt</th>
							<th>Trạng Thái</th>
							<th>Hình Thức Thanh Toán</th>
							<th>Mã Khách Hàng</th>
							<th></th>
						</tr>
					</thead>

					<tbody>

						@foreach ($orders as $order)

						<tr class="right__table-item">
							<td data-label="Email" style="text-align: left;">
								{{$order->idOrder}}
							</td>
							<td data-label="Số Hoá Đơn">{{$order->totalMoney}}</td>
							<td data-label="ID Sản Phẩm">{{$order->created_at}}</td>
							<td data-label="ID Sản Phẩm">{{$order->status}}</td>
							<td data-label="ID Sản Phẩm">{{$order->payMents}}</td>
							<td data-label="ID Sản Phẩm">{{$order->order_user->id}}</td>
							<td></td>
							
						</tr>
						<tr>
							@foreach ($i_orders as $item)
								@if ($order->idOrder == $item->idOrder)
									<td>
										{{$item->order_pro->title}} || {{$item->order_pro->thumbnail}} || {{$item->order_pro->price}}
									</td>
								@endif
							@endforeach
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
		<span>{!! $orders->render() !!}</span>

		{{-- <div class="right_pagination d-flex">

			<span class="right_pagination-item">
				1
			</span>
			<span class="right_pagination-item">
				2
			</span>
			<span class="right_pagination-item">
				3
			</span>

			<span class="right_pagination-item">
				...
			</span>

			<span class="right_pagination-item">
				<i class="fas fa-arrow-right"></i>
			</span>
		</div> --}}
	</div>
</section>
@endsection