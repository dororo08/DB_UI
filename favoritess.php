<html>
<h1> 관심매물 </h1>

<?php
 $con=mysqli_connect("localhost", "root", "1210", "mydb") or die("MySQL 접속 실패!!");

	$ID=$_POST["ID"];

$sql1= "SELECT user_id, estate_id FROM favorite WHERE user_id LIKE '%$ID%'";
$ret1 = mysqli_query($con, $sql1);
echo "<TABLE border=1>";
echo "<TR>";
echo "<TH>유저아이디</TH><TH>건물번호</TH><TH>상세보기</TH>";
echo"</TH>";
while($row = mysqli_fetch_array($ret1)) 
{
   echo "<TR>";
   echo "<TD>", $row['user_id'], "</TD>";
   echo "<TD>", $row['estate_id'], "</TD>";
   echo "<TD>", "<a href='more.php?id=", $row['estate_id'],"'>클릭</a></TD>";
   echo "</TR>";
}

mysqli_close($con);
echo "</TABLE>";
echo "<br> <a href='joins.php'> 로그아웃</a>";
?>

</html>