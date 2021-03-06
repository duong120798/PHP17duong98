<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng Kí</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Xem trước ảnh  -->
	<!-- <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />

	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script> -->
	<!-- hết xem trước ảnh -->
</head>
<style type="text/css">
	body{
		background: #EEEEEE;
	}
</style>
<body>
	

<?php if(isset($_COOKIE['themkhktc'])){
	?>
	<script type="text/javascript">
		toastr["error"]("Thêm mới không thành công !", "Thông báo :");
	</script>
	<?php
}
?> 
<hr>
<div class="container bootstrap snippet">
	<div class="row">
		<div class="col-sm-10"><h3>Đăng kí</h3></div>
		<div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
	</div>
	<div class="row">
		<div class="col-sm-3"><!--left col-->

			<form class="form" action="?mod=user&act=sign_in_proces" method="POST" role="form" enctype="multipart/form-data">
				<div class="text-center">
					<img style="border-radius: 50%;" src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
					<h6>Upload a different photo...</h6>
					<input type="file" onchange="readURL(this)" name="customer_image" class="text-center center-block file-upload">
				</div></hr><br>


				<div class="panel panel-default">
					<div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
					<div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
				</div>


				<ul class="list-group">
					<li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
					<li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
					<li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
					<li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
					<li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
				</ul> 

				<div class="panel panel-default">
					<div class="panel-heading">Social Media</div>
					<div class="panel-body">
						<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
					</div>
				</div>

			</div><!--/col-3-->
			<div class="col-sm-9">

				<div class="tab-content">
					<div class="tab-pane active" id="home">
						<hr>

						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">

									<div class="col-xs-6">
										<label for="">Mã khách hàng</label>
										<input type="text" class="form-control" name="customer_code" placeholder="Mã khách hàng" >
									</div>
								</div>
								<div class="form-group">

									<div class="col-xs-6">
										<label for="">Tên khách hàng</label>
										<input type="text" class="form-control" name="customer_name" placeholder="Tên khách hàng">
									</div>
								</div>

								<div class="form-group">

									<div class="col-xs-6">
										<label for="">Ngày sinh khách hàng</label>
										<input type="date" class="form-control" name="customer_birthday" placeholder="Ngày sinh">
									</div>
								</div>

								<div class="form-group">
									<div class="col-xs-6">
										<label for="">Địa chỉ</label>
										<input type="text" class="form-control" name="customer_address" placeholder="Địa chỉ">
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">

									<div class="col-xs-6">
										<label for="">Email</label>
										<input type="email" class="form-control" name="customer_email" placeholder="Địa chỉ email">
									</div>
								</div>
								<div class="form-group">

									<div class="col-xs-6">
										<label for="">Password</label>
										<input type="password" class="form-control" name="customer_password" placeholder="Mật khẩu">
									</div>
								</div>
								<div class="form-group">

									<div class="col-xs-6">
										<label for="">Số điện thoại</label>
										<input type="number" class="form-control" name="customer_mobile" placeholder="Số điện thoại">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12">
								<br>
								<button class="btn btn-lg btn-success" name="submit" value="submit" type="submit"><i class="glyphicon glyphicon-ok-sign" ></i> Đăng Kí</button>
								<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
							</div>
						</div>
					</form>


				</div>

			</div><!--/tab-pane-->
		</div><!--/tab-content-->

	</div><!--/col-9-->
</div><!--/row-->

<script type="text/javascript">
	$(document).ready(function() {


		var readURL = function(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('.avatar').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}


		$(".file-upload").on('change', function(){
			readURL(this);
		});
	});
</script>
</body>
</html>


