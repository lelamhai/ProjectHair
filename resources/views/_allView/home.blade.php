@extends('index')

@section('content')


<main class="content">

<!-- Begin sidebar -->
<section class="sidebar">
    <div class="container">
        <div class="owl-carousel owl-theme">
            <a href="#"><img src="./assets/img/Home/banner1.png" alt="" class="img-responsive"></a>
            <a href="#"><img src="./assets/img/Home/banner2.png" alt="" class="img-responsive"></a>
            <a href="#"><img src="./assets/img/Home/banner3.png" alt="" class="img-responsive"></a>
        </div>
    </div>
</section>
<!-- End sidebar -->

<!-- Begin service -->

<section class="service">
    <div class="container">
        <div class="heading-content">
            <h3 class="heading-title">DỊCH VỤ 30 SHIDE</h3>
            <a href="" class="heading-more">Xem thêm >></a>
        </div>
        <div class="service__content">
            <a href="" class="service__content-link"><img src="./assets/img/Home/service.png" alt=""
                    class="service__content-img img-responsive"></a>
        </div>
    </div>
</section>
<!-- End service -->

<!-- Begin ten-step -->
<section class="ten-step">
    <div class="container">
        <div class="heading-content">
            <h3 class="heading-title">QUY TRÌNH 10 BƯỚC</h3>
        </div>
        <div class="row">
            <div class="col l-6 m-6 s-0">
                <div class="ten-step__sidebar">
                    <div class="ten-step__sidebar-list">
						<?php 
							$count = 1;
							?>
								@foreach ($steps as $step)
								<div class="ten-step__sidebar-item" onclick="currentSlide(<?php echo $count;?>)">
									<p class="ten-step__sidebar-desc">{{$step->step}}: {{$step->nameStep}}</p>
								</div>
								<?php $count ++; ?>
								@endforeach
							<?php
							
						?>
						
                    </div>
                </div>
            </div>
            <div class="col l-6 m-6 s-0">
                <div class="wrap-images">
					@foreach ($steps as $step)
						<div class="mySlides">
							<img src="{{$step->image}}">
						</div>
					@endforeach
                </div>
            </div>


        </div>
    </div>
</section>

<section class="ten-step-mobile">
    <div class="container">
        <div class="owl-carousel owl-theme">
            <div class="ten-step-mobile-box">
                <div class="ten-step__sidebar-item" onclick="currentSlide(1)">
                    <p class="ten-step__sidebar-desc">Bước 1. Massage khai huyệt điều hòa (mới)</p>
                </div>
                <div class=" img-responsive">
                    <img src="https://www.w3schools.com/howto/img_woods_wide.jpg">
                </div>
            </div>

            <div class="ten-step-mobile-box">
                <div class="ten-step__sidebar-item" onclick="currentSlide(1)">
                    <p class="ten-step__sidebar-desc">Bước 2. Massage khai huyệt điều hòa (mới)</p>
                </div>
                <div class=" img-responsive ">
                    <img src="https://www.w3schools.com/howto/img_5terre_wide.jpg">
                </div>
            </div>

            <div class="ten-step-mobile-box">
                <div class="ten-step__sidebar-item" onclick="currentSlide(1)">
                    <p class="ten-step__sidebar-desc">Bước 3. Massage khai huyệt điều hòa (mới)</p>
                </div>
                <div class=" img-responsive">
                    <img src="https://www.w3schools.com/howto/img_woods_wide.jpg">
                </div>
            </div>

            <div class="ten-step-mobile-box">
                <div class="ten-step__sidebar-item" onclick="currentSlide(1)">
                    <p class="ten-step__sidebar-desc">Bước 4. Massage khai huyệt điều hòa (mới)</p>
                </div>
                <div class=" img-responsive ">
                    <img src="https://www.w3schools.com/howto/img_5terre_wide.jpg">
                </div>
            </div>

            <div class="ten-step-mobile-box">
                <div class="ten-step__sidebar-item" onclick="currentSlide(1)">
                    <p class="ten-step__sidebar-desc">Bước 5. Massage khai huyệt điều hòa (mới)</p>
                </div>
                <div class=" img-responsive">
                    <img src="https://www.w3schools.com/howto/img_woods_wide.jpg">
                </div>
            </div>

            <div class="ten-step-mobile-box">
                <div class="ten-step__sidebar-item" onclick="currentSlide(1)">
                    <p class="ten-step__sidebar-desc">Bước 6. Massage khai huyệt điều hòa (mới)</p>
                </div>
                <div class=" img-responsive ">
                    <img src="https://www.w3schools.com/howto/img_5terre_wide.jpg">
                </div>
            </div>

            <div class="ten-step-mobile-box">
                <div class="ten-step__sidebar-item" onclick="currentSlide(1)">
                    <p class="ten-step__sidebar-desc">Bước 7. Massage khai huyệt điều hòa (mới)</p>
                </div>
                <div class=" img-responsive">
                    <img src="https://www.w3schools.com/howto/img_woods_wide.jpg">
                </div>
            </div>

            <div class="ten-step-mobile-box">
                <div class="ten-step__sidebar-item" onclick="currentSlide(1)">
                    <p class="ten-step__sidebar-desc">Bước 8. Massage khai huyệt điều hòa (mới)</p>
                </div>
                <div class=" img-responsive ">
                    <img src="https://www.w3schools.com/howto/img_5terre_wide.jpg">
                </div>
            </div>

            <div class="ten-step-mobile-box">
                <div class="ten-step__sidebar-item" onclick="currentSlide(1)">
                    <p class="ten-step__sidebar-desc">Bước 9. Massage khai huyệt điều hòa (mới)</p>
                </div>
                <div class=" img-responsive">
                    <img src="https://www.w3schools.com/howto/img_woods_wide.jpg">
                </div>
            </div>

            <div class="ten-step-mobile-box">
                <div class="ten-step__sidebar-item" onclick="currentSlide(1)">
                    <p class="ten-step__sidebar-desc">Bước 10. Massage khai huyệt điều hòa (mới)</p>
                </div>
                <div class=" img-responsive ">
                    <img src="https://www.w3schools.com/howto/img_5terre_wide.jpg">
                </div>
            </div>


        </div>
    </div>
</section>
<!-- End ten-step -->

<!-- Begin hair-hot -->
<section class="hair-hot">

    <div class="container">
        <div class="heading-content">
            <h3 class="heading-title">TÓC HOT</h3>
            <a href="" class="heading-more">Xem thêm >></a>
        </div>
        <div class="hair-hot__content">
            <div class="owl-carousel owl-theme">
                <div class="hair-hot__thumb">
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/4.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/5.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/3.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/7.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/8.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/2.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/3.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/1.jpg" alt=""
                            class="img-responsive"></a>
                </div>

                <div class="hair-hot__thumb">
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/1.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/2.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/3.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/4.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/5.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/6.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/7.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/8.jpg" alt=""
                            class="img-responsive"></a>
                </div>

                <div class="hair-hot__thumb">
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/8.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/7.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/6.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/5.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/5.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/6.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/7.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="#" class="hair-hot__item"><img src="./assets/img/Home/8.jpg" alt=""
                            class="img-responsive"></a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End hair-hot -->

<!-- Begin branch -->
<section class="brand">
    <div class="container">
        <div class="heading-content">
            <h3 class="heading-title">THƯƠNG HIỆU ĐỘC QUYỀN</h3>
            <a href="" class="heading-more">Xem thêm >></a>
        </div>
        <div class=" owl-carousel owl-theme">
            <div class="brand__item">
                <div class="product__item ">
                    <a href="#" class="product__thumb">
                        <img src="./assets/img/Detail/product-1.png" alt=""
                            class="product__photo img-responsive">
                    </a>

                    <div class="product__detail">
                        <a href="#" class="product__link">Bộ đôi DẦU GỘI - XẢ TIGI RESURRECTION
                            970ml -
                            Phiên
                            bản
                            mới 2021</a>
                        <p class="product__price--new">780,000₫ <span class="product__price--old">1.500.000₫
                            </span> </p>
                    </div>

                </div>

                <div class="product__item">
                    <a href="#" class="product__thumb">
                        <img src="./assets/img/Detail/product-2.png" alt=""
                            class="product__photo img-responsive">
                    </a>

                    <div class="product__detail">
                        <a href="#" class="product__link">Bộ đôi DẦU GỘI - XẢ TIGI RESURRECTION
                            970ml -
                            Phiên
                            bản
                            mới 2021</a>
                        <p class="product__price--new">780,000₫ <span class="product__price--old">1.500.000₫
                            </span> </p>
                    </div>

                </div>

                <div class="product__item">
                    <a href="#" class="product__thumb">
                        <img src="./assets/img/Detail/product-3.png" alt=""
                            class="product__photo img-responsive">
                    </a>

                    <div class="product__detail">
                        <a href="#" class="product__link">Bộ đôi DẦU GỘI - XẢ TIGI RESURRECTION
                            970ml -
                            Phiên
                            bản
                            mới 2021</a>
                        <p class="product__price--new">780,000₫ <span class="product__price--old">1.500.000₫
                            </span> </p>
                    </div>

                </div>

                <div class="product__item">
                    <a href="#" class="product__thumb">
                        <img src="./assets/img/Detail/product-4.png" alt=""
                            class="product__photo img-responsive">
                    </a>

                    <div class="product__detail">
                        <a href="#" class="product__link">Bộ đôi DẦU GỘI - XẢ TIGI RESURRECTION
                            970ml -
                            Phiên
                            bản
                            mới 2021</a>
                        <p class="product__price--new">780,000₫ <span class="product__price--old">1.500.000₫
                            </span> </p>
                    </div>

                </div>
            </div>

            <div class="brand__item">
                <div class="product__item">
                    <a href="#" class="product__thumb">
                        <img src="./assets/img/Detail/product-2.png" alt=""
                            class="product__photo img-responsive">
                    </a>

                    <div class="product__detail">
                        <a href="#" class="product__link">Bộ đôi DẦU GỘI - XẢ TIGI RESURRECTION
                            970ml -
                            Phiên
                            bản
                            mới 2021</a>
                        <p class="product__price--new">780,000₫ <span class="product__price--old">1.500.000₫
                            </span> </p>
                    </div>

                </div>

                <div class="product__item">
                    <a href="#" class="product__thumb">
                        <img src="./assets/img/Detail/product-3.png" alt=""
                            class="product__photo img-responsive">
                    </a>

                    <div class="product__detail">
                        <a href="#" class="product__link">Bộ đôi DẦU GỘI - XẢ TIGI RESURRECTION
                            970ml -
                            Phiên
                            bản
                            mới 2021</a>
                        <p class="product__price--new">780,000₫ <span class="product__price--old">1.500.000₫
                            </span> </p>
                    </div>

                </div>

                <div class="product__item">
                    <a href="#" class="product__thumb">
                        <img src="./assets/img/Detail/product-4.png" alt=""
                            class="product__photo img-responsive">
                    </a>

                    <div class="product__detail">
                        <a href="#" class="product__link">Bộ đôi DẦU GỘI - XẢ TIGI RESURRECTION
                            970ml -
                            Phiên
                            bản
                            mới 2021</a>
                        <p class="product__price--new">780,000₫ <span class="product__price--old">1.500.000₫
                            </span> </p>
                    </div>

                </div>

                <div class="product__item">
                    <a href="#" class="product__thumb">
                        <img src="./assets/img/Detail/product-3.png" alt=""
                            class="product__photo img-responsive">
                    </a>

                    <div class="product__detail">
                        <a href="#" class="product__link">Bộ đôi DẦU GỘI - XẢ TIGI RESURRECTION
                            970ml -
                            Phiên
                            bản
                            mới 2021</a>
                        <p class="product__price--new">780,000₫ <span class="product__price--old">1.500.000₫
                            </span> </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End branch -->
</div>

</main>

@endsection

@section('css')
	<!-- <link rel="stylesheet" href="css/test.css">  -->
	<link rel="stylesheet" href="assets/css/Home/responsive.css">
    <link rel="stylesheet" href="assets/css/Home/style.css">
@endsection

@section('script')
	<!-- <script type="text/javascript" src="js/test.js"></script> -->
@endsection
