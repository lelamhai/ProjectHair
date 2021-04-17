@extends('_adminView.root')

@section('content')
	<div>
		<input type="text" name="nameStep"><br><br>
	</div>
	<div>
		<div class="input-group">
	   <span class="input-group-btn">
	     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
	       <i class="fa fa-picture-o"></i> Choose
	     </a>
	   </span>
	   <input id="thumbnail" class="form-control" type="text" name="filepath">
 	</div>
 	<img id="holder" style="margin-top:15px;max-height:100px;">
	</div>
	

	<textarea id="my-editor" name="content" class="form-control">{!! old('content', 'test editor content') !!}</textarea>
@endsection

@section('js-editor')
	<script>
		CKEDITOR.replace('my-editor', options);
		
	</script>
@endsection