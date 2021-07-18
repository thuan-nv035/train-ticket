<?php 
require_once('../class/Book.php');
if(isset($_POST['tracker'])){
	$tracker = $_POST['tracker'];
	// echo $tracker;

	$result = $book->deleteBook($tracker);
	$return['valid'] = true;
	$return['msg'] = "Vé đã được xóa thành công!";
	echo json_encode($return);
}//isset
	
$book->Disconnect();