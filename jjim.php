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
$ID = $_GET["ID"];
$search = $_GET["search"];

$sql1="select*from estate where id = $id";
$ret=mysqli_query($con,$sql1);
$row=mysqli_fetch_array($ret);
echo "<h1> 관심목록에 추가되었습니다. </h1>";
echo "<TABLE border=1>";

$sql2 = "INSERT INTO favorite (estate_id,user_id) VALUES ('".$_GET['id']."','".$_GET['ID']."');";
$ret = mysqli_query($con,$sql2);
echo "<br> <a href='favoritess.php?ID=".$ID."'> 관심매물로 가기</a>"; 
mysqli_close($con);
echo "</TABLE>";
?>

<FORM METHOD="post" ACTION="searchroom.php">

	<INPUT TYPE="hidden" name ="search" VALUE="<?php echo $search ;?>">
   <INPUT TYPE="hidden" name ="ID" VALUE="<?php echo $ID ;?>"> <br>
	<INPUT TYPE="submit" VALUE="목록">
	
</FORM> 


</html>