@extends('_adminView.index')

@section('content')
<section class="right">
	<h5 class="right__head-post-title">Thêm mới</h5>
	<div class="right__content">
		<form action="{{route('models.insert')}}" method="POST">
			@csrf
			<div class="wrap-left">
				<div class="right__add-post">
					<div class="right__head-new-post add-field">
						<input type="text" name="title" class="right__head-new-post-input" placeholder="Tiêu đề">
					</div>
				</div>

			</div>
		
			<div class="wrap-right">
				<div class="right__add-image">
					<h5 class="right__add-image-title">Hình đại diện</h5>
					<div class="show-image" id="holder">
					</div>

					<div class="input-group">
					   <span class="input-group-btn">
						 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
						   <i class="fa fa-picture-o"></i> Choose
						 </a>
					   </span>
					   <input id="thumbnail" class="form-control" type="text" name="thumbnail">
					</div>
					

					<div class="wrap-submit">
						<button class="right__add-image-btn">{{ __('Lưu dữ liệu') }}</button>
					</div>
				</div>
			
			</div>
		</form>
	</div>
</section>









	{{-- <form action="/admin/add-hot" method="POST">
		@csrf
		<div>
			<div class="input-group">
		   <span class="input-group-btn">
		     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
		       <i class="fa fa-picture-o"></i> Choose
		     </a>
		   </span>
		   <input id="thumbnail" class="form-control" type="text" name="thumbnail">
	 	</div>
	 	<img id="holder" style="margin-top:15px;max-height:100px;">
		<div class="wrap-submit">
			<button class="right__add-image-btn">{{ __('Lưu dữ liệu') }}</button>
		</div>
	</form> --}}
@endsection

@section('js-editor')
	<script>
		CKEDITOR.replace('my-editor', options);
		
	</script>
@endsection