	<?php 
include './database/Connection.php';
if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}
$conn = mysqli_connect('localhost','root','','medallion');
if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{} ;
	
if (isset($_POST['email'])) {
	// code...
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM customer WHERE email = '$email'";
	$query = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($query);
	$checkEmail = mysqli_num_rows($query);
	if ($checkEmail ==1) {
		// code...
		
		$checkPass = password_verify($password, $data['password']);
		
		if ($checkPass) {
			// luu vao session
			$_SESSION['customer'] = $data;
			header('location: index.php');
		}
		else{
			echo "Sai mat khau";
		}
	}
	else {
		echo "Email khong ton tai";
	}
}

 ?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Đăng Nhập</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<style>
			.has-error {
				color: red
			}
		</style>
		
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<form action="" method="POST" role="form">
						<legend>Đăng Nhập</legend>
					
						<div class="form-group">
							<label for="">Email</label>
							<input type="text" class="form-control" id="" name="email" >
							<div class="has-error">
								<span>
									<?php echo (isset($err['email']))?$err['email']: '' ?>
								</span>
							</div>
						</div>
						<div class="form-group">
							<label for="">Mật khẩu</label>
							<input type="password" class="form-control" id="" name="password" >
							<div class="has-error">
								<span>
									<?php echo (isset($err['password']))?$err['password']: '' ?>
								</span>
							</div>
						</div>
						
						<button type="submit" class="btn btn-primary">Đăng nhập</button>
					</form>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html> 