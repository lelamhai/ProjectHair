@extends('_adminView.index')

@section('content')
<style>
@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
#rating{border:none;float:left;}
#rating>input{display:none;}/*ẩn input radio - vì chúng ta đã có label là GUI*/
#rating>label:before{margin:5px;font-size:1.25em;font-family:FontAwesome;display:inline-block;content:"\f005";}/*1 ngôi sao*/
#rating>.half:before{content:"\f089";position:absolute;}/*0.5 ngôi sao*/
#rating>label{color:#ddd;float:right;}/*float:right để lật ngược các ngôi sao lại đúng theo thứ tự trong thực tế*/
/*thêm màu cho sao đã chọn và các ngôi sao phía trước*/
#rating>input:checked~label,
#rating:not(:checked)>label:hover, 
#rating:not(:checked)>label:hover~label{color:#FFD700;}
/* Hover vào các sao phía trước ngôi sao đã chọn*/
#rating>input:checked+label:hover,
#rating>input:checked~label:hover,
#rating>label:hover~input:checked~label,
#rating>input:checked~label:hover~label{color:#FFED85;}
</style>

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
				{{-- <div class="dropdown search-time-left">
				  <select class="search-day" name="" id="">
					<option value="">12/12/2020</option>
					<option value="">12/12/2020</option>
					<option value="">12/12/2020</option>
					<option value="">12/12/2020</option>
				  </select>
				</div>

				<div class="search-time-day">
					<button class="search-time-right">Tìm</button>
				</div> --}}
			  </div>
			</div>
			<span class="right__head-bar-count"><?php echo count($books);?></span>
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
							<th></th>
							<?php
									if(intval(session('user')->human_rights) == 2)
									{
										?>
											<th></th>

										<?php
									}
								?>
						</tr>
					</thead>

					<tbody>
						<?php $indexx = 0;?>
						@foreach ($books as $book)
							<tr class="right__table-item">
								<td>{{$book->emp_book->name}}</td>
								<td>{{$book->service_book->title}}</td>
								<td>
								  <div class="day-date">{{$book->date}}</div>
								</td>
								<td>{{$book->users_book->name}}</td>
								<td>{{$book->users_book->phone}}</td>
								<td>
										<select data-book="{{$book->id}}" class="status-service">
											<?php
												if($book->finish == 0)
												{
													?>
														<option value="0" selected>Đang sử dụng dịch vụ</option>
														<option value="1">Hoàn thành dịch vụ</option>
													<?php
												} else {
													?>
														<option value="0">Đang sử dụng dịch vụ</option>
														<option value="1" selected>Hoàn thành dịch vụ</option>
													<?php
												}
											?>
											
											
										</select>
								</td>
								<td><button class="btn-delete-booking"><a class="right__table-item-btn right__table-item-btn--delete" href="/admin/delete-booking/{{$book->id}}">Xóa</button></td>
								
								<?php
									if(intval(session('user')->human_rights) == 2)
									{
										?>
											<td>
												<button type="button" data-index=<?php echo $indexx;?> data-stylist="{{$book->users_book->id}}" class="btn btn-primary report-stylist" data-toggle="modal" data-target="#report-styleist">
													Đánh giá
												</button>
											</td>
										<?php
									}
								?>
							</tr>
							<?php $indexx ++;?>
						@endforeach

						
						
					</tbody>
				</table>
				<span class="pagination-admin">{!! $books->render() !!}</span>
			</div>
		</div>
	</div>

</section>


<div class="modal fade" id="report-styleist" tabindex="-1" role="dialog" aria-labelledby="report-styleistLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Đánh giá Stylist</h5>
		  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button> --}}
		</div>
		<div class="modal-body">
			@foreach ($books as $book)
			<div class="item-report" id="report-{{$book->users_book->id}}">
				<form action="{{route('booking.createReport')}}" method="POST">
					@csrf
					<input type="text" name="idUser" value="{{$book->users_book->id}}">
					<input type="text" name="idEmp" value="{{$book->emp_book->id}}">

					<div class="wrap-stylelist">
						<div class="avatar-stylelist">
							<img src="{{asset('avatars/'. $book->emp_book->avata)}}" alt="">
						</div>
						<div class="name-stylelist">
							{{$book->emp_book->name}}
						</div>
					</div>

					<div class="report-content">
						<div class="wrap-rating">
							<div class="title-rating">Đánh giá: </div>
							<div id="rating">
								<input type="radio" id="star5" name="rating" value="5" />
								<label class = "full" for="star5"></label>
							 
								<input type="radio" id="star4" name="rating" value="4" />
								<label class = "full" for="star4"></label>
							 
								<input type="radio" id="star3" name="rating" value="3" />
								<label class = "full" for="star3"></label>
							 
								<input type="radio" id="star2" name="rating" value="2" />
								<label class = "full" for="star2"></label>
							 
								<input type="radio" id="star1" name="rating" value="1" />
								<label class = "full" for="star1"></label>
							</div>
						</div>


						<div class="wrap-comment">
							<textarea name="comment" cols="30" rows="5" placeholder="Bình luận"></textarea>
						</div>


					</div>
					<div class="wrap-button">
						<button class="btn btn-primary" class="btn-save">Lưu lại</button>
					</div>
				</form>
			</div>
			@endforeach
		</div>
		
	  </div>
	</div>
  </div>

@endsection
@section('css')
@endsection

@section('script')
@endsection