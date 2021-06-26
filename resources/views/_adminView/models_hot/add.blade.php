@extends('_adminView.index')

@section('content')
	<form action="/admin/add-hot" method="POST">
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
	</form>
@endsection

@section('js-editor')
	<script>
		CKEDITOR.replace('my-editor', options);
		
	</script>
@endsection