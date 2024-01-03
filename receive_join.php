<html>

<?php

	$con=mysqli_connect("localhost", "root", "1210", "mydb") or die("MySQL 접속 실패!!");

	$userName = $_POST["userName"];
	$userID = $_POST["userID"];
	$userPaswd = $_POST["userPaswd"];
	$tel = $_POST["tel"];
	$addr = $_POST["addr"];
	$rrn = $_POST["resident_registration_number"];
	
	
	$sql = "INSERT INTO user (userName,userID,userPaswd,tel,addr,resident_registration_number)
	VALUES
	('".$_POST['userName']."', '".$_POST['userID']."', '".$_POST['userPaswd']."', '".$_POST['tel']."', '".$_POST['addr']."', '".$_POST['resident_registration_number']."')"; 
	$ret = mysqli_query($con, $sql);
	
	
mysqli_close($con);


?>
<a href='login.php'> 로그인 바로가기 </a>
</html>