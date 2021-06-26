@extends('_adminView.index')

@section('content')

<section class="right">
	<h5 class="right__head-post-title">Chỉnh sửa</h5>
	<div class="right__content">
		<form action="{{route('post.editProduct')}}" method="POST">
			@csrf
			<input type="hidden" name="idCate" value="{{$idCate}}">
			<div class="wrap-left">
				<div class="right__add-post">
					<div class="right__head-new-post add-field">
						<input type="text" name="title" value='{{ $product->title }}'>
					</div>

					<div class="add-field">
						<textarea id="my-editor" name="detailed_description"  class="form-control" ></textarea>
					</div>
					<div class="add-field">
						<input type="text"  class="right__head-new-post-input" name="price" value='{{ $product->price }}'>
					</div>
				</div>

			</div>
		
			<div class="wrap-right">
			
				<div class="right__add-image">
					<h5 class="right__add-image-title">Hình đại diện</h5>
					<input type="file" hidden accept="image/*" id="feature-image" onchange="loadFile(event)">
					<div class="show-image" id="holder">
						{{-- <img id="output" class="img-responsive" /> --}}
					</div>

					<div class="input-group">
					   <span class="input-group-btn">
						 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
						   <i class="fa fa-picture-o"></i> Hình ảnh
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