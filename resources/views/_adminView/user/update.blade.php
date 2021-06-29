@extends('_adminView.index')

@section('content')

 <section class="right">
		<h5 class="right__head-post-title">Thêm mới</h5>
        <form action="/admin/user/update" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="right__content">
				<div class="wrap-left">
					<div class="right__add-post">
                        @foreach ($users as $user)
                            <input type="hidden" name="userId" value="{{$user->id}}">

                            <div class="add-field">
                                <div class="title-field">Tên người dùng</div>
                                <input type="text" name="name" class="right__head-new-post-input" value="{{$user->name}}">
                            </div>

                            <div class="add-field">
                                <div class="title-field">Email</div>
                                <input type="text" name="email" class="right__head-new-post-input"  value="{{$user->email}}" disabled readonly>
                            </div>

                            <div class="add-field">
                                <div class="title-field">Số điện thoại</div>
                                <input type="number" name="phone" class="right__head-new-post-input"  value="{{$user->phone}}" disabled readonly>
                            </div>

                            <div class="add-field">
                                <div class="title-field">Quyền</div>
                                <Select class="role-user" name="role">
                                    <option value="2" selected>Người dùng</option>
                                    <option value="1">Stylelist</option>
                                    <option value="0">Admin</option>
                                </Select>
                            </div>

                            <div class="add-field">
                                <div class="title-field">Mật khẩu</div>
                                <input type="password" name="password" class="right__head-new-post-input"  value="********" disabled readonly>
                            </div>
                        @endforeach
					</div>

				</div>
			
				<div class="wrap-right">
                    <div class="right__add-image">
                        <h5 class="right__add-image-title">Hình đại diện</h5>
                        <div class="show-image" id="holder">
                            <img src="{{asset('avatars/'. $user->avata)}}" alt="" id="output">
                        </div>
    
                        <div class="input-group">
                            <input type="file" name="avatar" id="imgInp" accept="image/*">
                        </div>
                        
    
                        <div class="wrap-submit">
                            <button class="right__add-image-btn">{{ __('Lưu dữ liệu') }}</button>
                        </div>
                    </div>
                
                </div>
                
    	</div>
        </form>
</section>
	
@endsection

@section('css')

@endsection

@section('js-editor')
	<script>
		CKEDITOR.replace('my-editor', options);
		
	</script>
@endsection