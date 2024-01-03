<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<fieldset>
<?php

	$ID = $_POST["ID"];
	
  	echo $ID; 
	echo "의 방내놓기" , "<br>";
?>
</fieldset>

<FORM METHOD="post" ACTION="receive_room.php">

<fieldset>
<legend> 방 등록 </legend>

	주소: <INPUT TYPE = "text" NAME="addr"><br> 
	도로명 주소: <INPUT TYPE = "text" NAME="street"> <br> 
	우편번호: <INPUT TYPE = "text" NAME="postcode"> <br> 
	건물 이름: <INPUT TYPE = "text" NAME="building name"> <br> 
	평수: <INPUT TYPE = "text" NAME="area"> <br> 

	유형: <select name="type" size="1">
	<option value="charter" selected>전세</option>
	<option value="monthly rent" selected>월세</option>
	<option value="dealing" selected>매매</option>
	</select> <br> 

	보증금: <INPUT TYPE = "text" NAME="deposit"> <br> 
	가격: <INPUT TYPE = "text" NAME="price"> <br> 
	관리비: <INPUT TYPE = "text" NAME="admin"> <br> 
	방 개수: <INPUT TYPE = "text" NAME="rs"> <br> 
	화장실 개수: <INPUT TYPE = "text" NAME="ts"> <br> 
	옵션: <INPUT TYPE = "text" NAME="option"> <br> 
	
</fieldset> <br>

	<INPUT TYPE="submit" VALUE="확인">
 	<INPUT TYPE="reset" VALUE="리셋">

</FORM>

</BODY>
</HTML>