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
							<th>Hủy lịch</th>
						</tr>
					</thead>

					<tbody>
						<tr class="right__table-item">
							<td class="stylelist" data-label="Email" style="text-align: left;padding-left: 30px;">
							  <select class="name" name="" id="">
								<option value="">Nguyễn Văn A</option>
								<option value="">Nguyễn Văn B</option>
								<option value="">Nguyễn Văn B</option>
								<option value="">Nguyễn Văn B</option>
							  </select>
							</td>
							<td data-label="Số Hoá Đơn">Combo cắt tóc 10 bước</td>
							<td data-label="ID Sản Phẩm">
							  <div class="day-date">13/05/2021</div>
							  <button type="button" class="change_date btn btn-primary" data-toggle="modal" data-target="#booking">
								Đổi Ngày
							  </button>

							</td>
							<td><button><i class="fas fa-times  fa-lg"></i></button></td>

						</tr>
						<tr class="right__table-item">
							<td class="stylelist" data-label="Email" style="text-align: left;padding-left: 30px;">
							  <select class="name" name="" id="">
								<option value="">Nguyễn Văn A</option>
								<option value="">Nguyễn Văn B</option>
								<option value="">Nguyễn Văn B</option>
								<option value="">Nguyễn Văn B</option>
							  </select>
							</td>
							<td data-label="Số Hoá Đơn">Combo cắt tóc 10 bước</td>
							<td data-label="ID Sản Phẩm">
							  <div class="day-date">13/05/2021</div>
								<button type="button" class="change_date btn btn-primary" data-toggle="modal" data-target="#booking">
								  Đổi Ngày
								</button>
							</td>
							<td><button><i class="fas fa-times  fa-lg"></i></button></td>

						</tr>
						<tr class="right__table-item">
							<td class="stylelist" data-label="Email" style="text-align: left;padding-left: 30px;">
							  <select class="name" name="" id="">
								<option value="">Nguyễn Văn A</option>
								<option value="">Nguyễn Văn B</option>
								<option value="">Nguyễn Văn B</option>
								<option value="">Nguyễn Văn B</option>
							  </select>

							</td>
							<td data-label="Số Hoá Đơn">Combo cắt tóc 10 bước</td>
							<td data-label="ID Sản Phẩm">
							  <div class="day-date">13/05/2021</div>
							  <button type="button" class="change_date btn btn-primary" data-toggle="modal" data-target="#booking">
								Đổi Ngày
							  </button>
							</td>
							<td><button><i class="fas fa-times  fa-lg"></i></button></td>

						</tr>
						<tr class="right__table-item">
							<td class="stylelist" data-label="Email" style="text-align: left;padding-left: 30px;  ">
								<select class="name" name="" id="">
								  <option value="">Nguyễn Văn A</option>
								  <option value="">Nguyễn Văn B</option>
								  <option value="">Nguyễn Văn B</option>
								  <option value="">Nguyễn Văn B</option>
								</select>
							</td>
							<td data-label="Số Hoá Đơn">Combo cắt tóc 10 bước</td>
							<td data-label="ID Sản Phẩm">
							  <div class="day-date">13/05/2021</div>
							  <button type="button" class="change_date btn btn-primary" data-toggle="modal" data-target="#booking">
								Đổi Ngày
							  </button>
							</td>
							<td><button><i class="fas fa-times  fa-lg"></i></button></td>
						</tr>

					   
					</tbody>
				</table>
			</div>
		</div>
		<div class="right_pagination d-flex">
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
		</div>
	</div>
</section>
@endsection
@section('css')
	
@endsection

@section('script')

@endsection