<!DOCTYPE html>
<html>
<head>
	<title>Trang admin</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="refresh" content="{{ route('form.addDetailsService') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
	<link rel="stylesheet" href="/assets/admin/css/main.css">
    <link rel="stylesheet" href="/assets/admin/css/booking.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="/assets/admin/css/popup.css"> --}}
    <link rel="stylesheet" href="/assets/admin/css/add.css" >
</head>
<body>
	
<div class="wrapper">
        <div class="container">
            <div class="dashboard">
                <div class="left">
                    <span class="left__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <div class="left__content">
                        <div class="left__profile">
                            <div class="left__image"><img src="{{asset('avatars/'. session('user')->avata)}}" alt=""></div>
                            <p class="left__name">
                                
                               
                                <?php
                                    if (session('user'))
                                    {
                                        echo session('user')->name;
                                    }    
                                ?>
                            </p>
                        </div>
                        <ul class="left__menu">
                            <li class="left__menuItem">
                                <a class="left__title" href="/admin/index">Bảng điều khiển</a>
                            </li>

                            <li class="left__menuItem">
                                <div class="left__title">
									Sản Phẩm<i class="fas fa-plus"></i>
                                </div>
                                <div class="left__text">
                                    @foreach ($categories as $cate)
                                        <a class="left__link" href="/admin/product/{{$cate->idCate}}">{{$cate->title}}</a>
                                    @endforeach
                                </div>
                            </li>

                            <li class="left__menuItem">
                                <div class="left__title">
									Dịch vụ<i class="fas fa-plus"></i>
                                </div>
                                <div class="left__text">
									@foreach ($services as $service)
										<a class="left__link" href="/admin/service/{{$service->id}}">{{$service->title}}</a>
									@endforeach
                                </div>
                            </li>

                            <li class="left__menuItem">
                                <a class="left__title" href="/admin/hot">Mẫu tóc</a>
                            </li>

                            <li class="left__menuItem">
                                <a class="left__title" href="/admin/order">Đơn hàng</a>
                            </li>

                            <li class="left__menuItem">
                                <a class="left__title" href="/admin/booking">Đặt vé</a>
                            </li>
							
                            <li class="left__menuItem">
                                <a class="left__title" href="{{route('getLogout')}}">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                </div>


                    {{--Sản phẩm--}}
                    <table>
                        <thead>
                            <tr>
                                <th>Tên danh mục</th>
                                <th>Số lượng</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($categories as $categorie)
                                <tr>
                                    <td>{{$categorie->title}}</td>
                                </tr>
                            @endforeach
                            @foreach ($arrNumberOfProduct as $key => $item)
                                <tr>
                                    <td>{{$item}}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {{--Service--}}
                    <table>
                        <thead>
                            <tr>
                                <th>Tên các dịch vụ</th>
                                <th>Dữ liệu</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td>{{$service->title}}</td>
                                </tr>
                            @endforeach
                            @foreach ($arrNumberOfService as $key => $item)
                                <tr>
                                    <td>{{$item}}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {{--Models Hot--}}
                    <div>Mẫu tóc có {{$numHot}} dữ liệu</div>

                    {{--Book--}}
                    <div>Có {{$numBook}} vé được đặt</div>

                    {{--Order--}}
                    Có {{$arrNumberOfOrder[0]}} đơn hàng được thanh toán
                    Có {{$arrNumberOfOrder[1]}} đơn hàng chưa được thanh toán

                    {{--Account--}}
                    <table>
                        <thead>
                            <tr>
                                <th>Loại tài khoản</th>
                                <th>Số lượng</th>
                            </tr>
                        </thead>

                        <tbody>
                                <tr>
                                    <td>Quản trị viên</td>
                                </tr>
                                <tr>
                                    <td>Nhân viên</td>
                                </tr>
                                <tr>
                                    <td>Khách hàng</td>
                                </tr>
                            @foreach ($arrNumberOfAcc as $key => $item)
                                <tr>
                                    <td>{{$item}}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                @yield('content')
	            @csrf 
            </div>
        </div>
    </div>




	<!-- đoạn js cho editor -->
	<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="/assets/admin/js/main.js"></script>

    
    {{-- <script src="/assets/admin/js/popup.js"></script> --}}

	<script>
		$('#lfm').filemanager('image');
	  var options = {
	    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
	    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
	    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
	    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
	  };
	  
	</script>
	@yield('js-editor')
</body>
</html>