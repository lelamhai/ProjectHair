@extends('_adminView.index')

@section('content')
<section class="right">
	<div class="right__content">
		<div class="right__head d-flex">
			<div class="right__head-post d-flex">
				<h5 class="right__head-post-title">Tài khoản</h5>
			</div>
		   
		</div>
        <div class="right__head-bar d-flex">
            <div class="right__head-bar-select">
            </div>
            <span class="right__head-bar-count"><?php echo count($users)?></span>
        </div>

		<div class="right__table">
            <div class="right__tableWrapper">
                <table>
                    <thead>
                        <tr>
                            <th style="text-align: left;">Tên</th>
                            <th>Gmail</th>
                            <th>Số điện thoại</th>
                            <th>Quyền</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr class="right__table-item">
                                <td style="text-align: left;">
                                   {{$user->name}}
                                </td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>
                                    <?php
                                        if($user->human_rights == 0)
                                        {
                                            echo "Admin";
                                        } else if($user->human_rights == 1)
                                        {
                                            echo "Stylelist";
                                        } else if($user->human_rights == 2)
                                        {
                                            echo "Người dùng";
                                        }
                                    ?>
                                </td>
                                <td>
                                    <button>
                                        <a href="/admin/user/edit/{{$user->id}}">
                                            chi tiết
                                        </a>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
	</div>
</section>




@endsection

@section('js-editor')
	<script>
		CKEDITOR.replace('my-editor', options);
		
	</script>
@endsection