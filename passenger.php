<?php 

if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}

if(isset($_SESSION['accomodation'])){
?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Online Tickets</title>

		<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="./css/reserved.css">

	</head>
<body style="background-color: lightblue;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Online Tickets</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">
      	<a href="#">Đặt Vé
      	<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
      	</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-backward"></span> Trở Về Trang Chủ</a></li>
    </ul>
  </div>
</nav>


<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">Các Bước Đặt Vé</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3">
						<a href="reserved.php" class="step-item">
						<div class="panel panel-default schedule-1">
							<div class="panel-heading">
								<h3 class="panel-title">1. LỊCH TRÌNH
								<span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
								</h3>
							</div>
							<div class="panel-body">
								LỊCH TRÌNH CHUYẾN ĐI
							</div>
						</div>
						</a>
					</div>
					<div class="col-md-3">
						<a href="accomodation.php" class="step-item">
							<div class="panel panel-info schedule-1">
							<div class="panel-heading">
								<h3 class="panel-title">2. Ghế</h3>
							</div>
							<div class="panel-body">
								Loại ghế
							</div>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<div class="panel panel-success schedule-item">
							<div class="panel-heading">
								<h3 class="panel-title">3. THÔNG TIN HÀNH KHÁCH</h3>
							</div>
							<div class="panel-body">
								THÔNG TIN CHI TIẾT
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<a href="payment.php" class="step-item">
							<div class="panel panel-warning schedule-1">
							<div class="panel-heading">
								<h3 class="panel-title">4. THÔNG TIN THANH TOÁN</h3>
							</div>
							<div class="panel-body">
								TỔNG TIỀN
							</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>

<div class="container-fluid">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Thông báo!</strong> Vui lòng xem lại thông tin hành khách của bạn. Bạn không thể thay đổi thông tin sau khi bạn tiếp tục.. 
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center>Thông Tin Đặt Vé</center>
			 </h2>
				<div class="container-fluid">
					<form class="form-horizontal" role="form" id="form-pass">
					  <div class="form-group">
					    <label for="">Đặt vé bởi:</label>
					    <input type="text" class="form-control" id="book-by" placeholder="Nhập Tên Đầy Đủ"
					    autofocus="" required="" autocomplete="off">
					  </div>
					  <div class="form-group">
					    <label for="">Số Điện Thoại:</label>
					    <input type="number" class="form-control" id="cont" placeholder="Nhập Số Điện Thoại" required="" autocomplete="off">
					  </div>
					  <div class="form-group">
					    <label for="">Địa Chỉ:</label>
					    <input type="text" class="form-control" id="address" placeholder="Nhập Địa Chỉ" required="" autocomplete="off">
					  </div>
					<br />
					<?php 
						$tb = $_SESSION['totalPass'];	
					 	$count = 1;
					 	for($i = 0; $i < $tb; $i++){
					?>
					  <div class="panel panel-primary">
					  	<div class="panel-heading">
					  		<h3 class="panel-title">Hành Khách <?= $count; ?></h3>
					  	</div>
					  	<div class="panel-body">
					  		<div class="container-fluid">
					  			<div class="form-group">
								    <label for="">Tên Đầy Đủ</label>
								    <input type="text" class="form-control" id="fN<?php echo $i; ?>"
								    placeholder="Nhập Tên Đầy Đủ" required autocomplete="off">
								  </div>

								  <div class="form-group">
								    <label for="">Tuổi</label>
								    <input type="number" class="form-control" id="age<?php echo $i; ?>"
								    placeholder="Nhập Tuổi" required autocomplete="off">
								  </div>
								  <div class="form-group">
								    <label for="">Giới Tính</label>
								    <select class="btn btn-default" id="gender<?php echo $i; ?>">
								    	<option value="Nam">Nam</option>
								    	<option value="Nữ">Nữ</option>
								    </select>
								  </div>
					  		</div>
					  	</div>
					  </div>
					<?php
					$count++;
					 	}//end for
					 ?>
					  <button type="submit" class="btn btn-success">Tiếp theo
					  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
					  </button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>

<?php require_once('admin/modal/message.php'); ?>

<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).on('submit', '#form-pass', function(event) {
		event.preventDefault();
		/* Act on the event */
		var bookBy = $('#book-by').val();
		var cont = $('#cont').val();
		var address = $('#address').val();
		
		var counter = <?= $i; ?>;
		for(var i = 0; i < counter; i++){
			var fN = $('#fN'+i).val();
			var age = $('#age'+i).val();
			var gender = $('#gender'+i).val();
			$.ajax({
					url: 'data/save_booked.php',
					type: 'post',
					dataType: 'json',
					data: {
						bookBy : bookBy,
						cont : cont,
						address : address,
						fN : fN,
						age : age,
						gender : gender
					},
					success: function (data) {
						// console.log(data);
						if(data.valid == true){
							window.location = data.url;
						}
					},
					error: function(){
						// alert('Error: L192+');
					}
				});
		}//end for
		alert('Booked Successfully!');	
	});

</script>


</body>
</html>

<?php
}else{
	echo '<strong>';
	echo 'Page Not Exist';
	echo '</strong>';
}//end if else isset

 ?>