<html>
<FORM METHOD="post" ACTION="searchroom.php">
<?php

	$ID=$_POST["ID"];
	
?>
	검색: <INPUT TYPE = "text" NAME="search"> 
	<INPUT TYPE="hidden" name ="ID" VALUE="<?php echo $ID ;?>">
	<INPUT TYPE="submit" VALUE="찾기">
	
</FORM> 
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

$search = $_POST['search'];
$ID = $_POST['ID'];

function mq($sql1)
{
   global $con;
   return $con->query($sql1);
}

$sql1=mq("select*from estate where addr like '%$search%' or kind like '%$search'" ) ;

echo "<h1> 검색한 매물 </h1>";
echo "<TABLE border=1>";
echo "<TR>";
echo "<TH>종류</TH><TH>주소</TH><TH>돈유형</TH><TH>평수</TH><TH>보증금</TH><TH>가격</TH><TH>상세보기</TH><TH>관심목록</TH>";
echo"</TH>";

$a=$_POST['search'];

while($search = $sql1 -> fetch_array()) 
{
   echo "<TR>";
   echo "<TD>", $search['kind'], "</TD>";
   echo "<TD>", $search['addr'], "</TD>";
   echo "<TD>", $search['money_type'], "</TD>";
   echo "<TD>", $search['area'], "</TD>";
   echo "<TD>", $search['deposit'], "</TD>";
   echo "<TD>", $search['price'], "</TD>";
   echo "<TD>", "<a href='more.php?id=", $search['id'],"'>클릭</a></TD>";
   echo "<TD>", "<a href='jjim.php?id=".$search['id']."&ID=".$ID."&search=".$a."'>추가</a></TD>";
   echo "</TR>";
}

mysqli_close($con);
echo "</TABLE>";
echo "<br> <a href='joins.php'> 로그아웃</a>";
?>



</html>