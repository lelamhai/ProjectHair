@extends('_adminView.index')

@section('content')

<section class="right">
	<h5 class="right__head-post-title">Đánh giá stylelist</h5>
	<form action="/admin/user/update" method="POST">
	@csrf
	<div class="right__content">
		<div class="wrap-report">
			<div class="wrap-info-stylelist">
				<div class="avatar-stylelist">
					<img src="{{asset('avatars/'. $stylelist->avata)}}" alt="">
				</div>
				<div class="name-stylelist">
					{{$stylelist->name}}
				</div>
			</div>
			<div class="wrap-content-report">
				<div class="rating-report">

				</div>
				<div class="comment-report">

				</div>
			</div>
		</div>
	</div>
	</form>
</section>

@endsection
@section('css')
@endsection

@section('script')
@endsection