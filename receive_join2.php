<html>
<?php

	$con=mysqli_connect("localhost", "root", "1210", "mydb") or die("MySQL 접속 실패!!");

	$businessName = $_POST["businessName"];
	$businessID = $_POST["businessID"];
	$businessPaswd = $_POST["businessPaswd"];
	$tel = $_POST["tel"];
	$addr = $_POST["addr"];
	$business_representative_number = $_POST["brn"];
	
	
	$sql = "INSERT INTO real_estate_agent (businessName,businessID,businessPaswd,tel,addr,brn)
	VALUES
	('".$_POST['businessName']."', '".$_POST['businessID']."', '".$_POST['businessPaswd']."', '".$_POST['tel']."', '".$_POST['addr']."', '".$_POST['brn']."')"; 
	$ret = mysqli_query($con, $sql);
	
mysqli_close($con);

?>
<a href='login.php'> 로그인 바로가기 </a>
</html>