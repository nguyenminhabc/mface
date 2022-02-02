<?php
include '../config/config.php';
if(isset ($_POST['submit-form'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($username == ""|| $password == ""){
        echo "Bạn chưa nhập đầy đủ thông tin";  
        }else{
		$sql="INSERT INTO `thongtin`(`username`, `password`) VALUES ('$username','$password')";
		$query=mysqli_query($connect,$sql);
	}
}
?>