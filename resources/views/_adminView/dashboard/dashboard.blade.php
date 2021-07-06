@extends('_adminView.index')

@section('content')
<section class="right">
	<div class="right__content">
		<div class="right__head d-flex">
			<div class="right__head-post d-flex">
				<h5 class="right__head-post-title">Thống kê</h5>
			</div>
		   
		</div>

		<div class="wrap-content-dashboard">
			<div class="wrap-booking">
				<b>Dữ liệu đặt vé</b>
				<div class="wrap-data">
					<div class="item-dashboard">Đặt vé:</div>
					<div class="item-dashboard"><?php echo count($booking)?></div>
				</div>
			</div>
	
			<div class="wrap-order">
				<b>Dữ liệu thanh toán</b>
				<div class="wrap-data">
					<div class="item-dashboard">Sản phẩm thanh toán:</div>
					<div class="item-dashboard"><?php echo count($orderPaid)?></div>
				</div>
				<div class="wrap-data">
					<div class="item-dashboard">Sản phẩm chưa thanh toán:</div>
					<div class="item-dashboard"><?php echo count($orderProsecc)?></div>
				</div>
			</div>
	
<?php
	if(session('user')->human_rights == 0)
	{
		?>
			<div class="wrap-products">
				<b>Dữ liệu danh mục</b>
			
					<?php $count = 0;?>
					@foreach ($categories as $cate)
						<div class="wrap-data">
							<div class="item-dashboard">{{$cate->title}}:</div>
							@foreach ($products as $pro)
							<?php
								if($pro->idCate == $cate->idCate)
								{
									$count++;
								}
							?>
							@endforeach
							<div class="item-dashboard"><?php echo $count;?></div>
							<?php $count = 0;?>
						</div>
					@endforeach
			</div>

			
			<div class="wrap-service">
				<b>Dữ liệu dịch vụ</b>
				
					<?php $count = 0;?>
					@foreach ($services as $service)
						<div class="wrap-data">
							<div class="item-dashboard"><?php echo $service->title?>:</div>
							@foreach ($servicesDetail as $detail)
								<?php
									if($service->id == $detail->idService)
									{
										$count++;
									}
								?>
							@endforeach
							<div class="item-dashboard"><?php echo $count;?></div>
							<?php $count = 0;?>
						</div>
					@endforeach
			</div>

			
			<div class="wrap-hair">
				<b>Dữ liệu mẫu tóc</b>
				<div class="wrap-data">
					<div class="item-dashboard">Mẫu tóc:</div>
					<div class="item-dashboard"><?php echo count($hairModels)?></div>
				</div>
			</div>

			<div class="wrap-user">
				<b>Dữ liệu tài khoản</b>
				
				@foreach ($users as $user)
				
				<?php
					if($user->human_rights == 0)
					{
						?>
						<div class="wrap-data">
							<div class="item-dashboard">Aadmin: </div>
							<div class="item-dashboard"><?php echo $user->total;?></div>
						</div>
						<?php
					} else if($user->human_rights == 1)
					{
						?>
						<div class="wrap-data">
							<div class="item-dashboard">Stylelist: </div>
							<div class="item-dashboard"><?php echo $user->total;?></div>
						</div>
						<?php
					} else if($user->human_rights == 2)
					{
						?>
						<div class="wrap-data">
							<div class="item-dashboard">Người dùng: </div>
							<div class="item-dashboard"><?php echo $user->total;?></div>
						</div>
						<?php
					}
				?>
				
				@endforeach
			</div>
		<?php
	} 
?>

			


		</div>
		

	</div>
</section>




@endsection

@section('js-editor')
	<script>
		CKEDITOR.replace('my-editor', options);
		
	</script>
@endsection