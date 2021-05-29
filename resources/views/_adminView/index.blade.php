<!DOCTYPE html>
<html>
<head>
	<title>Admin nha!! Giết:))</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="refresh" content="{{ route('form.addDetailsService') }}">
	<link rel="stylesheet" href="/assets/admin/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />

</head>
<body>
	{{-- <h1>Khu vực admin. Thằng lào láo, diệt tộc!!</h1>

	<li><a class="active-menu" href="#"><i
			class="fa fa-dashboard fa-3x"></i> Dashboard</a></li>
	@foreach ($services as $service)
		<li><a href="/admin/service/{{$service->id}}"><i class="fa fa-desktop fa-3x"></i>
			{{$service->title}}</a></li>
	@endforeach

	@yield('content')
	@csrf --}}



	
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
                        <div class="left__logo">Dashboard</div>
                        <div class="left__profile">
                            <div class="left__image"><img src="/assets/admin/assets/avatar.jpg" alt=""></div>
                            <p class="left__name">Hatsune Miku</p>
                        </div>
                        <ul class="left__menu">


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
                                <div class="left__title">
									Sản Phẩm<i class="fas fa-plus"></i>
                                </div>
                                <div class="left__text">
                                    <a class="left__link" href="insert_product.html">Chèn Sản Phẩm</a>
                                    <a class="left__link" href="view_product.html">Xem Sản Phẩm</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title">Danh Mục SP
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="left__text">
                                    <a class="left__link" href="insert_p_category.html">Chèn Danh Mục</a>
                                    <a class="left__link" href="view_p_category.html">Xem Danh Mục</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title">Thể Loại
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="left__text">
                                    <a class="left__link" href="insert_category.html">Chèn Thể Loại</a>
                                    <a class="left__link" href="view_category.html">Xem Thể Loại</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title">Đăng xuất

                            </li>
                        </ul>
                    </div>
                </div>
                <section class="right">
                    <div class="right__content">
                        <div class="right__head d-flex">
                            <div class="right__head-post d-flex">
                                <h5 class="right__head-post-title">Posts</h5>
                                <a href="./NewPost.html" class="right__head-post-add">Add New</a>
                            </div>
                            <div class="right__head-search">
                                {{-- <input type="text" class="right__head-search-input">
                                <button type="button" class="right__head-search-btn">Search Posts</button> --}}
                            </div>
                        </div>
                        <div class="right__head-bar d-flex">
                            <div class="right__head-bar-select">
                                {{-- <input type="checkbox" id="all" class="right__head-bar-checkbox">
                                <label for="all" class="right__head-bar-label">All</label>
                                <button class="right__head-bar-delete">Delete</button> --}}
                            </div>
                            <span class="right__head-bar-count">2 items</span>
                        </div>

                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th style="text-align: left;">Title</th>
                                            <th>Categories</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>

                                    <tbody>


                                        <tr class="right__table-item">
                                            <td data-label="Email" style="text-align: left;">
                                                {{-- <input type="checkbox" name="" id=""> --}}
                                                bài viết số 123
                                                <div class="right__table-item-change">
                                                    <button
                                                        class="right__table-item-btn right__table-item-btn--edit">Edit</button>
                                                    |
                                                    <button
                                                        class="right__table-item-btn right__table-item-btn--delete">Delete</button>
                                                </div>
                                            </td>
                                            <td data-label="Số Hoá Đơn">Uncategorized</td>
                                            <td data-label="ID Sản Phẩm">2/5/2021</td>

                                        </tr>



										
                                        <tr class="right__table-item">
                                            <td data-label="Email" style="text-align: left;">
												{{-- <input type="checkbox" name="" id=""> --}}
													 bài viết số 123
                                                <div class="right__table-item-change">
                                                    <button
                                                        class="right__table-item-btn right__table-item-btn--edit">Edit</button>
                                                    |
                                                    <button
                                                        class="right__table-item-btn right__table-item-btn--delete">Delete</button>
                                                </div>
                                            </td>
                                            <td data-label="Số Hoá Đơn">Uncategorized</td>
                                            <td data-label="ID Sản Phẩm">4/5/2021</td>

                                        </tr>
                                        <tr class="right__table-item">
                                            <td data-label="Email" style="text-align: left;">
												{{-- <input type="checkbox" name="" id=""> --}}
													 bài viết số 123
                                                <div class="right__table-item-change">
                                                    <button
                                                        class="right__table-item-btn right__table-item-btn--edit">Edit</button>
                                                    |
                                                    <button
                                                        class="right__table-item-btn right__table-item-btn--delete">Delete</button>
                                                </div>
                                            </td>
                                            <td data-label="Số Hoá Đơn">Categorized</td>
                                            <td data-label="ID Sản Phẩm">3/5/2021</td>

                                        </tr>
                                        <tr class="right__table-item">
                                            <td data-label="Email" style="text-align: left;">
												{{-- <input type="checkbox"name="" id="">  --}}
												bài viết số 123
                                                <div class="right__table-item-change">
                                                    <button
                                                        class="right__table-item-btn right__table-item-btn--edit">Edit</button>
                                                    |
                                                    <button
                                                        class="right__table-item-btn right__table-item-btn--delete">Delete</button>
                                                </div>
                                            </td>
                                            <td data-label="Số Hoá Đơn">9659544</td>
                                            <td data-label="ID Sản Phẩm">8/5/2021</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="right_pagination d-flex">
                            <span class="right_pagination-item">
                                1
                            </span>
                            <span class="right_pagination-item">
                                2
                            </span>
                            <span class="right_pagination-item">
                                3
                            </span>

                            <span class="right_pagination-item">
                                ...
                            </span>

                            <span class="right_pagination-item">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>




	<!-- đoạn js cho editor -->
	<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="/assets/admin/js/main.js"></script>

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