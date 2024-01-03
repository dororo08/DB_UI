<html>
<?php
	$con=mysqli_connect("localhost", "root", "1210", "mydb") or die("MySQL 접속 실패!!");

	$sql = "SELECT * FROM estate";
	
	$ret = mysqli_query($con, $sql);
	if($ret) {
		$count = mysqli_num_rows($ret);
  	         }
	else{
	echo "estate 데이터 조회 실패!!"."<br>";
	echo "실패 원인: ".mysqli_error($con);
	exit();
}

$id = $_GET["id"];

$sql1="select*from estate where id = $id";
$ret=mysqli_query($con,$sql1);
$row=mysqli_fetch_array($ret);
echo "<h1> 검색한 매물 </h1>";
echo "<TABLE border=1>";
echo "<TR>";
echo "<TH>종류</TH><TH>주소</TH><TH>도로명주소</TH><TH>이름</TH><TH>우편번호</TH><TH>평수</TH><TH>돈유형</TH><TH>보증금</TH><TH>관리비</TH><TH>가격</TH><TH>방개수</TH><TH>화장실개수</TH><TH>옵션</TH>";
echo"</TH>";

	echo "<TR>";
	echo "<TD>", $row['kind'], "</TD>";
	echo "<TD>", $row['addr'], "</TD>";
    echo "<TD>", $row['street'], "</TD>";
    echo "<TD>", $row['names'], "</TD>";
    echo "<TD>", $row['postcode'], "</TD>";
	echo "<TD>", $row['area'], "</TD>";
	echo "<TD>", $row['money_type'], "</TD>";
	echo "<TD>", $row['deposit'], "</TD>";
	echo "<TD>", $row['Administrative_expenses'], "</TD>";
	echo "<TD>", $row['price'], "</TD>";
	echo "<TD>", $row['number_of_rooms'], "</TD>";
	echo "<TD>", $row['number_of_toilets'], "</TD>";
	echo "<TD>", $row['options'], "</TD>";
    echo "<img src ='$id-1.png' width='300' height='300' />";
    echo "<img src ='$id-2.png' width='300' height='300'/>";
	echo "</TR>";


$sql1="select*from real_estate_agent where id = '1'";
$ret=mysqli_query($con,$sql1);
$row=mysqli_fetch_array($ret);
echo "<TABLE border=1>";
echo "<TR>";
echo "<TH>부동산이름</TH><TH>전화번호</TH><TH>주소</TH>";
echo"</TR>";

	echo "<TR>";
	echo "<TD>", $row['businessName'], "</TD>";
	echo "<TD>", $row['tel'], "</TD>";
    echo "<TD>", $row['addr'], "</TD>";
	echo "</TR>";

mysqli_close($con);
echo "</TABLE>";

echo "<br> <a href='joins.php'> 로그아웃</a>";
?>

</html>