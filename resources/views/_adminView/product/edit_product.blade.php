@extends('_adminView.index')

@section('content')

<section class="right">
	<h5 class="right__head-post-title">Chỉnh sửa</h5>
	<div class="right__content">
		<form action="{{route('post.editProduct')}}" method="POST">
			@csrf
			<input type="hidden" name="idCate" value="{{$idCate}}">
			<input type="hidden" name="short_Description" value="Ty">
			<input type="hidden" name="idPro" value="{{$product->idPro}}">

			<div class="wrap-left">
				<div class="right__add-post">
					<div class="right__head-new-post add-field">
						<input type="text" name="title" class="right__head-new-post-input" value='{{ $product->title }}'>
					</div>
					
					<div class="add-field">
						<textarea id="my-editor" name="detailed_description"  class="form-control">{{ $product->detailed_description }}</textarea>
					</div>

					<div class="add-field">
						<div class="title-field">Giá tiền (₫)</div>
						<input type="text"  class="right__head-new-post-input" name="price" value='{{ $product->price }}'>
					</div>

				</div>
			</div>
		
			<div class="wrap-right">
			
				<div class="right__add-image">
					<h5 class="right__add-image-title">Hình đại diện</h5>
					<input type="file" hidden accept="image/*" id="feature-image" onchange="loadFile(event)">
					<div class="show-image" id="holder">
						<?php
					  		$link = "";
							if($product->thumbnail != null)
							{
								$link = $product->thumbnail;
								?>
									<img src="{{ $product->thumbnail }}" alt="">
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
		</form>
	</div>
</section>

@endsection

@section('js-editor')
	<script>
		CKEDITOR.replace('my-editor', options);
		
	</script>
@endsection