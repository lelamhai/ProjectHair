@extends('index')

@section('content')
	<main>
		<div class="book-container">
            <div class="book-container-flex">
                <div class="stylist">
                    <div class="stylist-label">
                      <b>CHỌN STYLIST</b>
                    </div>
                    <div class="list-avatar">

                    <?php $loadFirst = true; ?>
                    @foreach ($emps as $emp)
                      <?php
                        if($loadFirst)
                        {
                          ?>
                            <div class="wrap-avatar-boookig">
                              <div class="icon-info-bookig" data-toggle="modal" data-target="#comment-Modal" data-user="{{$emp->id}}">
                                <img src="assets/img/Book/icon-info.png" alt="" >
                              </div>
                              <div class="list-avatar-item stylish-active" data-user="{{$emp->id}}">
                                <span data-toggle="modal">
                                  <img src="assets/img/Book/avatar-anonymous-300x300.png" alt="Avatar" class="avatar">
                                </span>
                                <p class="user-name">
                                  {{$emp->name}}
                                </p>
                              </div>
                            </div>
                          <?php
                        } else {
                          ?>
                            <div class="wrap-avatar-boookig">
                              <div class="icon-info-bookig" data-toggle="modal"  data-target="#comment-Modal" data-user="{{$emp->id}}">
                                <img src="assets/img/Book/icon-info.png" alt="" >
                              </div>
                              <div class="list-avatar-item" data-user="{{$emp->id}}">
                                <span data-toggle="modal">
                                  <img src="assets/img/Book/avatar-anonymous-300x300.png" alt="Avatar" class="avatar">
                                </span>
                                <p class="user-name">
                                  {{$emp->name}}
                                </p>
                              </div>
                            </div>
                          <?php
                        }
                        $loadFirst = false;
                      ?>
                    @endforeach

                



                    </div>
                </div>

                <div class="schedule">
                    <b>CHỌN NGÀY GIỜ CẮT (301 TRƯƠNG ĐỊNH)</b>
                    <div class="select-day">
                      <ul class="nav nav-tabs time-booking">
                        <li class="time-schedule active">
                          <a data-toggle="tab" href="#today">
                            <b>Hôm nay</b>
                            <span>
                              <?php echo date("d-m-Y", time());?>
                              </span>
                          </a>
                        </li>
                        <li class="time-schedule">
                          <a data-toggle="tab" href="#tomorrow">
                            <b>Ngày mai</b>
                            <span>
                                <?php
                                    $Date = date("Y-m-d", time());;
                                    echo date('d-m-Y', strtotime($Date. ' + 1 days'));
                                  ?>
                            </span>
                          </a>
                        </li>
                        <li class="time-schedule">
                          <a data-toggle="tab" href="#after-tomorrow">
                            <b>Ngày kia</b>
                            <span>
                                <?php 
                                  $Date = date("Y-m-d", time());;
                                    echo date('d-m-Y', strtotime($Date. ' + 2 days'));  
                                ?>
                            </span>
                          </a>
                        </li>
                      </ul>

                        <div class="tab-content">
                          <div id="today" class="tab-pane fade in active">
                            <div class="wrap-day" id="today">
                              <div class="item-time"><div class="time-text">8:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">9:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">9:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">10:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">10:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">11:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">11:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">12:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">12:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">13:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">13:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">14:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">14:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">15:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">15:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">16:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">16:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">17:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">17:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">18:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">18:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">19:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">19:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">20:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">20:30</div><div class="slot-status">Còn chỗ</div></div>
                            </div>
                          </div>
                          <div id="tomorrow" class="tab-pane fade">
                            <div class="wrap-day" id="tomorrow">
                              <div class="item-time"><div class="time-text">8:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">9:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">9:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">10:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">10:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">11:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">11:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">12:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">12:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">13:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">13:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">14:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">14:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">15:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">15:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">16:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">16:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">17:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">17:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">18:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">18:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">19:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">19:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">20:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">20:30</div><div class="slot-status">Còn chỗ</div></div>
                            </div>

                          </div>
                          <div id="after-tomorrow" class="tab-pane fade">
                            <div class="wrap-day" id="aftertomorrow">
                              <div class="item-time"><div class="time-text">8:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">9:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">9:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">10:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">10:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">11:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">11:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">12:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">12:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">13:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">13:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">14:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">14:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">15:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">15:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">16:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">16:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">17:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">17:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">18:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">18:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">19:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">19:30</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">20:00</div><div class="slot-status">Còn chỗ</div></div>
                              <div class="item-time"><div class="time-text">20:30</div><div class="slot-status">Còn chỗ</div></div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="service">
                  <b class="service-tittle" >DỊCH VỤ</b>
                  <div class="ser-cut">
                    <b class="ser-tittle">
                      Cắt tóc
                    </b>
                    <div>
                      <label class="container-checkbox-service">Combo 10 bước
                        <input type="radio" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>

                  <div class="ser-perm">
                    <b class="ser-tittle">Uốn</b>
                    <div>
                      <label class="container-checkbox-service line-1-1">Cao cấp
                        <input type="radio" checked="checked" name="perm">
                        <span class="checkmark"></span>
                      </label>
                      <label class="container-checkbox-service line-1-2">Tiêu chuẩn
                        <input type="radio" name="perm">
                        <span class="checkmark"></span>
                      </label>
                      <label class="container-checkbox-service line-1-3">Con sâu
                        <input type="radio" name="perm">
                        <span class="checkmark"></span>
                      </label>
                      <label class="container-checkbox-service line-1-4">Premlock
                        <input type="radio" name="perm">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>

                  <div class="ser-dye">
                    <b class= "ser-tittle">
                      Nhuộm tóc
                    </b>
                    <div>
                      <label class="container-checkbox-service line-2-1">Đen phủ bạc
                        <input type="radio" checked="checked" name="dye">
                        <span class="checkmark"></span>
                      </label>
                      <label class="container-checkbox-service line-2-2">Nâu cao cấp
                        <input type="radio" name="dye">
                        <span class="checkmark"></span>
                      </label>
                      <label class="container-checkbox-service line-2-3">Đỏ nâu cao cấp
                        <input type="radio" name="dye">
                        <span class="checkmark"></span>
                      </label>
                      <label class="container-checkbox-service line-2-4">Bạc cao cấp
                        <input type="radio" name="dye">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                  <div class="btn-book">
                      <input type="hidden" class="UserId" value="<?php echo session('user')->id;?>">
                      <button type="button" id="btn-booking">
                        Đặt vé
                      </button>
                  </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="comment-Modal">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <img src="assets/img/Book/avatar-anonymous-300x300.png" alt="Avatar" class="avatar">
                <h4 class="modal-title popup-name">Nguyễn Văn An</h4>
                <div class="rate">
                  {{-- <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i> --}}
                </div>
              </div>
              <div class="modal-body">
                <div class="list-cmt" id="list-cmt">
                    
                </div>
            </div>
          </div>
        </div>



</main>

{{-- 
	<br><br><br><br>
	<h3>Danh sach cac stylic</h3>
	@foreach ($emps as $emp)
		{{$emp->name}}
	@endforeach

	<h3>Danh sach lich da duoc dat cua cac stylic</h3>

	@foreach ($listReserved as $item)
		{{$item->emp_book->name}}	|| <p> phuc vu </p> {{$item->users_book->name}} <p> vao luc </p> {{$item->time}} <p> ngay </p> {{$item->date}}
		<h3>/////////////</h3>
	@endforeach


	<h3>Noi dung comment</h3>
	@foreach ($comments as $comment)<!-- if theo mã stylic -->
		{{$comment->idEmp}} : {{$comment->emp_comment->name}} <br>
		{{$comment->idUser}} : {{$comment->users_comment->name}} <p>{{$comment->content}}</p>
		<h3>///</h3>
	@endforeach
@endsection --}}

@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/Book/book.css" >
@endsection

@section('script')
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="assets/js/book.js"></script>
@endsection
