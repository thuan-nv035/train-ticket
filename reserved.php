<?php 
require_once('data/get_origin.php');
require_once('data/get_destination.php');

// echo '<pre>';
// print_r($origins);
// echo '</pre>';
 ?>
<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Online Ticket</title>

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
							<div href="" class="panel panel-default schedule-item">
							<div class="panel-heading">
								<h3 class="panel-title">1. LỊCH TRÌNH
								<span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
								</h3>
							</div>
							<div class="panel-body">
								LỊCH TRÌNH CHUYẾN ĐI
							</div>
							</div>
					</div>
					<div class="col-md-3">
						<a class="step-item" href="accomodation.php">
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
						<a class="step-item" href="passenger.php">
						<div class="panel panel-success schedule-1">
							<div class="panel-heading">
								<h3 class="panel-title">3. THÔNG TIN HÀNH KHÁCH</h3>
							</div>
							<div class="panel-body">
								THÔNG TIN CHI TIẾT
							</div>
						</div>
						</a>
					</div>
					<div class="col-md-3">
						<a class="step-item" href="payment.php">
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
		<div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center>HÀNH TRÌNH</center>
			 </h2>
				<div class="container-fluid">
					<form class="form-horizontal" role="form" id="form-itinerary">
					  <div class="form-group">
					    <label for="">Điểm xuất phát:</label>
					    <select class="btn btn-default" id="orig-id">
					    <?php foreach($origins as $o): ?>
					    	<option value="<?= $o['origin_id']; ?>"><?= $o['origin_desc']; ?></option>
				    	<?php endforeach; ?>
					    </select>
					  </div>
					  <div class="form-group">
					    <label for="">Điểm đến:</label>
					    <select class="btn btn-default" id="dest-id">
				    	<?php foreach($destinations as $d): ?>
					    	<option value="<?= $d['dest_id']; ?>"><?= $d['dest_destination']; ?></option>
				    	<?php endforeach; ?>
					    </select>
					  </div>
					  <div class="form-group">
					    <label for="">Ngày đi:</label>
					    <input type="date" class="btn btn-default" id="dept-date">
					  </div>
					  <button type="submit" class="btn btn-success">Tiếp Theo
					  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
					  </button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>

<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).on('submit', '#form-itinerary', function(event) {
		event.preventDefault();
		/* Act on the event */
		var validate = "";
		var origin = $('select[id=orig-id]').val();
		var dest = $('select[id=dest-id]').val();
		var dept = $('input[id=dept-date]').val();

		if(dept.length == 0){
			alert('Please Select Departure Date!');
		}else{
			$.ajax({
					url: 'data/session_itinerary.php',
					type: 'post',
					dataType: 'json',
					data: {
						oid : origin,
						did : dest,
						dd : dept
					},
					success: function (data) {
						console.log(data);
						if(data.valid == true){
							window.location = data.url;
							console.log('sss');
						}
					},
					error: function(){
						alert('Error: L161+');
					}
				});
		}//end dept kung == 0


	});

</script>

</body>
</html>