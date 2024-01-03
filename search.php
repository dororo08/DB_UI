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
 
<body>
 
 
<h1>  <p align=center>--퀵방--</p> </h1>

<h2>  <p align=center>방검색</p> </h2>
<form method="post" action="searchroom.php"> 
<?php

$ID=$_POST["ID"];

?>
    <table align=center border=0 cellspacing=0 width=500 bordercolordark=white bordercolorlight=#999999> <!-- table생성 -->
        <tr> <!-- table 1행 생성 -->
            <td class="topline" width=150>  <!-- table 1행1열 생성 -->
                <p align=center>검색  :</p>
            </td>
            <td class="topline" width=200> <!-- table 1행2열 생성 -->
                <input type="text" name="search" style="height:25px">
				<INPUT TYPE="hidden" name ="ID" VALUE="<?php echo $ID ;?>">
            </td>
 
            <td class="topline" rowspan="1" align=center>  <!-- table 3열 생성, 열2개를 합침 -->
                <INPUT type="submit" style="height:100px; width:130px">
         <button type="reset" style="height:50px; width:130px">리셋</FORM>
   </td>
 
        </tr>
 <tr>
<td class="topline" width=150>
</td>
<td class="topline" width=150>
</td>
<td class="topline" width=150>
</td>
</tr>
         
    </table>


</form>
 
</body>
</html>