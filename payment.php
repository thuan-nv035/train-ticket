<?php 

if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}

if(isset($_SESSION['tracker'])){
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
						<div class="panel panel-warning schedule-item">
							<div class="panel-heading">
								<h3 class="panel-title">4. THÔNG TIN THANH TOÁN</h3>
							</div>
							<div class="panel-body">
								TỔNG TIỀN
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>

<div class="container-fluid">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center>THÔNG TIN THANH TOÁN</center>
			 </h2>
			 <br />
			 <div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title"><center>THÔNG TIN CHUYẾN ĐI</center></h3>
			 	</div>
			 	<div class="panel-body">
			 		<strong>
			 			<i>Công ty Đường sắt Việt Nam / Vietnam Railway Company</i>
			 			<h3>
			 			<?php require_once('data/depart_from_to.php'); 
			 				echo $origin['origin_desc'];
			 			?>
			 			 - 
			 			 <?= $dest['dest_destination']; ?>
			 			 </h3>
			 			<p>Thời gian khởi hành: <?= $_SESSION['departure_date']; ?> - 9:00AM</p>
			 		</strong>
			 			<i>Thời gian đến dự kiến: Ngày tiếp theo - 3:00PM</i><br />
			 			<strong>
			 				<?php require_once('data/get_accomodation.php'); 
			 					echo $accomodation['acc_type'];
			 				?>
			 			</strong>
			 	</div>
			 </div>

			 <div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title">THÔNG TIN LIÊN LẠC</h3>
			 	</div>
			 	<div class="panel-body">
			 	<?php require_once('data/getBooked.php'); ?>
			 	<strong>Đặt Vé Bởi:</strong> <?= ucwords($bookByInfo['book_by']);  ?><br /> 
			 	<strong>Số Điện Thoại:</strong> <?= $bookByInfo['book_contact']; ?><br />
			 	<strong>Địa Chỉ:</strong> <?= $bookByInfo['book_address']; ?><br />
			 	</div>
			 </div>
				<div class="container-fluid">
				<strong>
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				Hành Khách</strong>
					<table id="myTable-party" class="table table-bordered table-hover" cellspacing="0" width="100%">
							<thead>
							    <tr>
							        <th>
							        	<center>
							       			Họ Tên
							        	</center> 
							        </th>
							        <th>
							        	<center>
							        		Tuổi
							        	</center>
						        	</th>
							        <th>
							        	<center>
							        		Giới Tính
							        	</center>
						        	</th>
						        	 <th>
							        	<center>
							        		Giá
							        	</center>
						        	</th>
							    </tr>
							</thead>
						    <tbody>
						    <?php
						    	require_once('data/getBooked.php');
						    	$totalPayment = 0;
						    	$tracker = '';
						     foreach($bookPass as $bp): 
						    	$name = $bp['book_name'];
						    	$name = ucwords($name);
						    	$price = $bp['acc_price'];
						    	$totalPayment += $price;
						    	$tracker = $bp['book_tracker'];
						    ?>
						    	<tr align="center">
						    		<td><?= $name; ?></td>
						    		<td><?= $bp['book_age']; ?></td>
						    		<td><?= $bp['book_gender']; ?></td>
						    		<td><?= $price; ?></td>
						    	</tr>
						    <?php endforeach; ?>
						    	<tr>
						    		<td></td>
						    		<td></td>
						    		<td align="right"><strong>Tổng Tiền	:</strong></td>
						    		<td align="center"><strong><?= $totalPayment; ?></strong></td>
						    	</tr>
						    </tbody>
						    <strong>- ID Đặt Vé: <?= $tracker; ?></strong>
						   </table>
						   <center>
							   <a href="index.php" class="btn btn-success">Quay Lại Trang Chủ
								   <span class="glyphicon glyphicon-backward" aria-hidden="true"></span>
							   </a>
						   </center>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>

<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>



</body>
</html>

<?php
}else{
	echo '<strong>';
	echo 'Page Not Exist';
	echo '</strong>';
}//end if else isset

 ?>