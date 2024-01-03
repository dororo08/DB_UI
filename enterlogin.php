<html>
 
<head>
 
<style type="text/css">
   .topline{border-top:2px solid black;
   } /*위쪽에 줄을 긋는다*/
   .botline{border-bottom:2px solid black; 
   }/*아래쪽에 줄을 긋는다*/
   .buttonline{border-top:2px solid black; 
               border-bottom:2px solid black; 
   }/*위, 아래쪽에 줄을 긋는다*/
 a:visited {text-decoration: none; color: #333333; 
 }
 
</style>
 
</head>
 <HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>

<body>
 <h1> <p align=center>--퀵방-- </h1>
 
<h2>  <p align=center>
	<?php

   $ID = $_POST["ID"];
   
     echo $ID; 
   echo "님 환영합니다." , "<br>";
?><br>(메뉴)
</p> </h2>

    <table align=center border=0 cellspacing=0 width=500 bordercolordark=white bordercolorlight=#999999> <!-- table생성 -->
        <tr> 
            <td class="topline" width=150>  
                <p align=center><td class="buttonline" rowspan="2" align=center>  <!-- table 3열 생성, 열2개를 합침 -->
            <FORM METHOD="post" ACTION="favoritess.php">
			<INPUT TYPE="hidden" name ="ID" VALUE="<?php echo $ID ;?>">
 <INPUT type="submit" style="height:100px; width:130px">관심매물</FORM>

</p>
            </td>
                       <td class="topline" width=150>  
                <p align=center><td class="buttonline" rowspan="2" align=center>  <!-- table 3열 생성, 열2개를 합침 -->
            <FORM METHOD="post" ACTION="boss.php">
			<INPUT TYPE="hidden" name ="ID" VALUE="<?php echo $ID ;?>">
 <INPUT type="submit" style="height:100px; width:130px">방 내놓기</FORM>

</p>
            </td>
                       <td class="topline" width=150>  
                <p align=center><td class="buttonline" rowspan="2" align=center>  <!-- table 3열 생성, 열2개를 합침 -->
            <FORM METHOD="post" ACTION="search.php">
			<INPUT TYPE="hidden" name ="ID" VALUE="<?php echo $ID ;?>">
 <INPUT type="submit" style="height:100px; width:130px">방검색</FORM>

</p>
            </td>
           
 

        </tr>
 
        
     
    </table>


</form>
 
</body>
</html>