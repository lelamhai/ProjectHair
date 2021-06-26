@extends('_adminView.index')

@section('content')


<section class="right">
	<h5 class="right__head-post-title">Thêm mới</h5>
	<div class="right__content">
		<form action="/admin/add-details-service" method="POST">
			@csrf
			<input type="hidden" name="idService" value="{{$idService}}">
			<input type="hidden"name="content" value="temp">
			
			<div class="wrap-left">
				<div class="right__add-post">
					<div class="right__head-new-post add-field">
						<input type="text" name="title" class="right__head-new-post-input" placeholder="Tiêu đề">
					</div>

					@if ($message = Session::get('idService'))
					    @if ($message == '1')
					    	<div class="add-field">
								<div class="title-field">Các bước</div>
								<input type="text" name="step" class="right__head-new-post-input" placeholder="Bước 1">
							</div>
					    @endif
    				 @endif

				</div>

			</div>
		
			<div class="wrap-right">
			
				<div class="right__add-image">
					<h5 class="right__add-image-title">Hình đại diện</h5>
					<input type="file" hidden accept="image/*" id="feature-image" onchange="loadFile(event)">
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




	{{-- <form action="/admin/add-details-service" method="POST">
		@csrf
		<div>
			<label>Step</label>
			<input type="text" name="step">
		</div>
		<div>
			<label>Name Step</label>
			<input type="text" name="title"><br><br>
		</div>
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
		</div>
		<input type="hidden" name="idService" value="{{$idService}}">

		<textarea id="my-editor" name="content" class="form-control">{!! old('content', 'test editor content') !!}</textarea>
		<div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
               {{ __('Add') }}
            </button>
        </div>
	</form> --}}
@endsection

@section('js-editor')
	<script>
		CKEDITOR.replace('my-editor', options);
		
	</script>
@endsection