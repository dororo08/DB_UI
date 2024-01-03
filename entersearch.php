<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<h1> 퀵방 </h1>
<BODY>

<?php

	$ID = $_POST["ID"];
	
  	echo $ID; 
	echo "님 환영합니다." , "<br>";
?>
<fieldset>
<legend> 메뉴 </legend>


<FORM METHOD="post" ACTION="favorites.php">

	<INPUT TYPE="submit" VALUE="관심매물">
	
</FORM>

<FORM METHOD="post" ACTION="enterroom.php">

	<INPUT TYPE="submit" VALUE="방내놓기">
	
</FORM>

<FORM METHOD="post" ACTION="search.php">

	<INPUT TYPE="submit" VALUE="방검색">
	
</FORM>

</fieldset>


</BODY>
</HTML>