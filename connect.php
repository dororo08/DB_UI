<html>

<?php

	$ID=$_POST["ID"];
	
?>

<?php

	$con=mysqli_connect("localhost", "root", "1210", "mydb") or die("MySQL 접속 실패!!");

	$kind = $_POST['kind'];
	$addr = $_POST["addr"];
	$street = $_POST["street"];
	$names = $_POST["names"];
	$postcode = $_POST["postcode"];
	$area = $_POST["area"];
	$money_type = $_POST["money_type"];
	$deposit = $_POST["deposit"];
	$price = $_POST["price"];
	$Administrative_expenses = $_POST["Administrative_expenses"];
	$number_of_rooms = $_POST["number_of_rooms"];
	$number_of_toilets= $_POST["number_of_toilets"];
	$options = $_POST["options"];
	

	//echo "전달 받은 건물유형 : ", $type, "<br>";
  	//echo "전달 받은 주소 : ", $addr, "<br>";
	//echo "전달 받은 도로명 주소 : ", $street, "<br>";
	//echo "전달 받은 건물 이름 : ", $name, "<br>";
	//echo "전달 받은 우편번호 : ", $postcode, "<br>";
	//echo "전달 받은 평수 : ", $area, "<br>";
	//echo "전달 받은 보증금 : ", $deposit, "<br>";
	//echo "전달 받은 유형 : ", $money_type, "<br>";
	//echo "전달 받은 가격 : ", $price, "<br>";
	//echo "전달 받은 관리비 : ", $Administrative_expenses, "<br>";
	//echo "전달 받은 방 개수 : ", $number_of_rooms, "<br>";
	//echo "전달 받은 화장실 개수 : ", $number_of_toilets, "<br>";
	//echo "전달 받은 옵션 : ", $option, "<br>";
	
	$sql = "INSERT INTO estate (kind,addr,street,names,postcode,area,money_type,deposit,Administrative_expenses,price,number_of_rooms,number_of_toilets,options)
	VALUES
	('".$_POST['kind']."', '".$_POST['addr']."', '".$_POST['street']."', '".$_POST['names']."', '".$_POST['postcode']."', '".$_POST['area']."', '".$_POST['money_type']."','".$_POST['deposit']."', '".$_POST['Administrative_expenses']."','".$_POST['price']."', '".$_POST['number_of_rooms']."', '".$_POST['number_of_toilets']."', '".$_POST['options']."')"; 
	$ret = mysqli_query($con, $sql);
	
	echo  "<a href='search.php?ID=".$ID."'> 등록된 방 확인하기</a>";
mysqli_close($con);


?>

</html>