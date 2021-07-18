<?php 
include './database/Connection.php';

if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}
$err = [];
if (isset($_POST['name'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$rPassword = $_POST['rPassword'];

	$conn = mysqli_connect('localhost','root','','medallion');
    if (mysqli_connect_errno()){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }else{} ;

    if (empty($name)) {
    	// code...
    	$err['name'] = 'Bạn chưa nhập tên';
    }
    if (empty($email)) {
    	// code...
    	$err['email'] = 'Bạn chưa nhập email';
    }
    if (empty($password)) {
    	// code...
    	$err['password'] = 'Bạn chưa nhập mật khẩu';
    }
    if ($password != $rPassword) {
    	// code...
    	$err['rPassword'] = 'Mật khẩu nhập lại không đúng';
    }
    // var_dump($err);
    // die();
    if (empty($err)) {
    	// code...
    	$password = password_hash($password, PASSWORD_DEFAULT);
    	// var_dump($pass);
    	// die();
    	$sql = "INSERT INTO customer(name,email, password) VALUES ('$name','$email','$password')";
		$query = mysqli_query($conn,$sql);
		if ($query) {
			// code...
			header('location: dang-nhap.php');
		}
    }
	
}
 ?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Đăng ký</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<style>
			.has-error {
				color: red
			}
		</style>
		<link rel="shortcut icon" type="image/x-icon" href="images/icon.png">


	</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<form action="" method="POST" role="form">
						<legend>Đăng ký tài khoản</legend>
					
						<div class="form-group">
							<label for="">Tên người dùng</label>
							<input type="text" class="form-control" id="" name="name" >
							<div class="has-error">
								<span>
									<?php echo (isset($err['name']))?$err['name']: '' ?>
								</span>
							</div>
						</div>
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
						<div class="form-group">
							<label for="">Nhập lại mật khẩu</label>
							<input type="password" class="form-control" id="" name="rPassword">
						<div class="has-error">
								<span>
									<?php echo (isset($err['rPassword']))?$err['rPassword']: '' ?>
								</span>
							</div> 
						</div>
					
						
					
						<button type="submit" class="btn btn-primary">Đăng ký</button>
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