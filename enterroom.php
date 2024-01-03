<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<?php
$ID=$_GET["ID"];
?>

<fieldset>
<legend> 방 등록 </legend>
<FORM METHOD="post" ACTION="connect.php">
	

	종류: <INPUT TYPE = "text" NAME="kind"><br> 
	주소: <INPUT TYPE = "text" NAME="addr"> <br> 
	도로명 주소: <INPUT TYPE = "text" NAME="street"> <br> 
	건물 이름: <INPUT TYPE = "text" NAME="names"> <br> 
	우편번호: <INPUT TYPE = "text" NAME="postcode"> <br> 
	평수: <INPUT TYPE = "text" NAME="area"> <br> 
	유형: <select name="money_type" size="1">
	<option value="전세" selected>전세</option>
	<option value="월세" selected>월세</option>
	<option value="매매" selected>매매</option>
	</select> <br>
	보증금: <INPUT TYPE = "text" NAME="deposit"> <br> 
	가격: <INPUT TYPE = "text" NAME="price"> <br> 
	관리비: <INPUT TYPE = "text" NAME="Administrative_expenses"> <br> 
	방 개수: <INPUT TYPE = "text" NAME="number_of_rooms"> <br> 
	화장실 개수: <INPUT TYPE = "text" NAME="number_of_toilets"> <br> 
	옵션: <INPUT TYPE = "text" NAME="options"> <br> 

	
</fieldset> <br>
	<INPUT TYPE="hidden" name ="ID" VALUE="<?php echo $ID ;?>"> <br>
	<INPUT TYPE="submit" VALUE="확인">
 	<INPUT TYPE="reset" VALUE="리셋">

</FORM>

</BODY>
</HTML>