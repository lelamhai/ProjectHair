@extends('_adminView.index')

@section('content')
<section class="right">
	<div class="right__content">
		<div class="right__head d-flex">
			<div class="right__head-post d-flex">
				<h5 class="right__head-post-title">Danh Sách Đơn Hàng</h5>
			</div>
			<div class="right__head-search">
				
			</div>
		</div>
		<div class="right__head-bar d-flex">
			<div class="right__head-bar-select">
			</div>
			<span class="right__head-bar-count">2 items</span>
		</div>

		<div class="right__table">
			<div class="right__tableWrapper">
				<table>
					<thead>
						<tr>
							<th>Mã thanh toán</th>
							<th>Tên Khách Hàng</th>
							<th>Tổng Tiền</th>
							<th>Ngày Đặt</th>
							<th></th>
						</tr>
					</thead>

					<tbody>

						@foreach ($orders as $order)
							<tr class="right__table-item">
								<td>LLH</td>
								<td>{{$order->order_user->name}}</td>
								<td>{{$order->totalMoney}}</td>
								<td>{{$order->created_at}}</td>
								<td><button class="btn-detail-order" data-order="{{$order->idOrder}}" data-toggle="modal" data-target="#detail-order">Chi tiết đơn hàng</button> <button class="btn-delete-order" data-order="{{$order->idOrder}}" >Xóa</button></td>
							</tr>
							{{-- <tr>
								@foreach ($i_orders as $item)
									@if ($order->idOrder == $item->idOrder)
										<td>
											{{$item->order_pro->title}} || {{$item->order_pro->thumbnail}} || {{$item->order_pro->price}}
										</td>
									@endif
								@endforeach
							</tr> --}}
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
		<span>{!! $orders->render() !!}</span>
	</div>
</section>

<div class="modal fade" id="detail-order" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
			<div class="wrap-detail-order">
				
			</div>
        </div>
      </div>
    </div>
  </div>

@endsection