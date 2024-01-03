<html>

<?php
	$con=mysqli_connect("localhost", "root", "1210", "mydb") or die("MySQL 접속 실패!!");

	$sql = "SELECT * FROM real_estate_agent";
	
	$ret = mysqli_query($con, $sql);
	if($ret) {
		$count = mysqli_num_rows($ret);
  	         }
	else{
	echo "estate 데이터 조회 실패!!"."<br>";
	echo "실패 원인: ".mysqli_error($con);
	exit();
}

$ID=$_POST["ID"];

echo "<h1> 중개사 선택 </h1>";
echo "<TABLE border=1>";
echo "<TR>";
echo "<TH>이름</TH><TH>전화번호</TH><TH>주소</TH><TH>선택</TH>";
echo"</TH>";

while($row = mysqli_fetch_array($ret)) 
{
	echo "<TR>";
	echo "<TD>", $row['businessName'], "</TD>";
	echo "<TD>", $row['tel'], "</TD>";
	echo "<TD>", $row['addr'], "</TD>";
	echo "<TD>", "<a href='enterroom.php?ID=".$ID."'> 확인</a></TD>";
	echo "</TR>";
}

mysqli_close($con);
echo "</TABLE>";

?>
</html>	
