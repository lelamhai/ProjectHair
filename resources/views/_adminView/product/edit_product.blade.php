@extends('_adminView.index')

@section('content')

	<form action="{{route('post.editProduct')}}" method="POST">
		@csrf
		<input type="hidden" name="idCate" value="{{$idCate}}">
		<div class="wrap-left">
			<div class="right__add-post">
				<div class="right__head-new-post add-field">
					<input type="text" name="title" class="right__head-new-post-input" placeholder="Tiêu đề">
				</div>

				<div class="add-field">
					<textarea id="my-editor" name="detailed_description"  class="form-control" ></textarea>
				</div>
				<div class="add-field">
					<input type="text" name="price" class="right__head-new-post-input" placeholder="Giá tiền">
				</div>
			</div>

		</div>

		<div class="wrap-right">
			<div class="right__add-image">
				<h5 class="right__add-image-title">Hình đại diện</h5>
				<input type="file" hidden accept="image/*" id="feature-image" onchange="loadFile(event)">
				<div class="show-image">
					<img id="output" class="img-responsive" />
				</div>
							
				<p class="right__add-image-notify">Click the image to edit or upload image</p>
				<label for="feature-image" class="right__add-image-label">Set feature image</label>

				<div>
					<div class="input-group">
				<span class="input-group-btn">
					<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
					<i class="fa fa-picture-o"></i> Choose
					</a>
				</span>
				<input id="thumbnail" class="form-control" type="text" name="thumbnail">
				</div>
				<button class="right__add-image-btn">{{ __('Thêm') }}</button>
			</div>
		
		</div>
	</form>


	{{-- <form action="{{route('post.editProduct')}}" method="POST"> <!-- sua action  --> 
		@csrf
		<div>
			<label>Title</label>
			<input type="text" name="title" value='{{ $product->title }}'><br><br>
		</div>
		<div>
			<label>Price</label>
			<input type="text" name="price" value='{{ $product->price }}'><br><br>
		</div>
		<div>
			<div class="input-group">
		   <span class="input-group-btn">
		     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
		       <i class="fa fa-picture-o"></i> Choose
		     </a>
		   </span>
		   <input id="thumbnail" class="form-control" type="text" name="thumbnail" value='{{ $product->thumbnail }}'>
	 	</div>
	 	<img id="holder" style="margin-top:15px;max-height:100px;">
		</div>
		<input type="hidden" name="idCate" value="{{$idCate}}">
		<input type="hidden" name="idPro" value="{{ $product->idPro }}">

		<textarea id="my-editor" name="detailed_description"  class="form-control">{{ $product->detailed_description }}</textarea>
		<div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
               {{ __('Edit') }}
            </button>
        </div>
	</form> --}}
@endsection

@section('js-editor')
	<script>
		CKEDITOR.replace('my-editor', options);
		
	</script>
@endsection