<?php
   $con=mysqli_connect("localhost:3306", "root", "1210") or die("MySQL 접속 실패");
   phpinfo();
   mysqli_close($con);
?>