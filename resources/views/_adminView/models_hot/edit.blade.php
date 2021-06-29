@extends('_adminView.index')

@section('content')
<section class="right">
	<h5 class="right__head-post-title">Chỉnh sửa</h5>
	<div class="right__content">
		<form action="{{route('models.update')}}" method="POST">
			@csrf
			@foreach ($models as $model)
			<input type="hidden" name="id" value="{{$model->id}}">

			<div class="wrap-left">
				<div class="right__add-post">
					<div class="right__head-new-post add-field">
						<input type="text" name="title" class="right__head-new-post-input" value='{{ $model->title }}'>
					</div>
				</div>
			</div>
		
			<div class="wrap-right">
			
				<div class="right__add-image">
					<h5 class="right__add-image-title">Hình đại diện</h5>
					<div class="show-image" id="holder">
						<?php
					  		$link = "";
							if($model->thumbnail != null)
							{
								$link = $model->thumbnail;
								?>
									<img src="{{ $model->thumbnail }}" alt="">
								<?php
							}
					   ?>
					</div>

					<div class="input-group">
					   <span class="input-group-btn">
						 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
						   <i class="fa fa-picture-o"></i> Hình ảnh
						 </a>
					   </span>
					  
					   <input id="thumbnail" class="form-control" type="text" name="thumbnail" value="<?php echo $link;?>">
					</div>
					

					<div class="wrap-submit">
						<button class="right__add-image-btn">{{ __('Lưu dữ liệu') }}</button>
					</div>
				</div>
			
			</div>
			@endforeach
		</form>
	</div>
</section>
@endsection

@section('js-editor')
	<script>
		CKEDITOR.replace('my-editor', options);
	</script>
@endsection