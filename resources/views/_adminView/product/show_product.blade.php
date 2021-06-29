@extends('_adminView.index')

@section('content')
<section class="right">
	<div class="right__content">
		<div class="right__head d-flex">
			<div class="right__head-post d-flex">
				<h5 class="right__head-post-title">{{$category->title}}</h5>
				<a href="{{route('get.addProduct')}}" class="right__head-post-add">Thêm mới</a>
			</div>
			<div class="right__head-search">
			</div>
		</div>
		<div class="right__head-bar d-flex">
			<div class="right__head-bar-select">
				
			</div>
			<span class="right__head-bar-count"><?php echo count($products)?> dữ liệu</span>
		</div>

		<div class="right__table">
			<div class="right__tableWrapper">
				<table>
					<thead>
						<tr>
							<th style="text-align: left;">Tên sản phẩm</th>
							<th>Danh mục</th>
							<th>Ngày tạo</th>
						</tr>
					</thead>

					<tbody>

						@foreach ($products as $product)

						<tr class="right__table-item">
							<td data-label="Email" style="text-align: left;">
								{{$product->title}}
								<div class="right__table-item-change">
									<a class="right__table-item-btn right__table-item-btn--edit" href="/admin/edit-product/{{$product->idPro}}">Chỉnh sửa</a>
									|
									<a class="right__table-item-btn right__table-item-btn--delete" href="/admin/delete-product/{{$product->idPro}}">Xóa</button>
								</div>
							</td>
							<td data-label="Số Hoá Đơn">{{$category->title}}</td>
							<td data-label="ID Sản Phẩm">{{$product->created_at}}</td>

						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
		<span class="pagination-admin">{!! $products->render() !!}</span>
	</div>
</section>
@endsection