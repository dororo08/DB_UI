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
 
 
<h1>  <p align=center>로그인</p> </h1>
<!-- 로그인 버튼 클릭시 post형식으로 logincheck.php로 넘긴다. id, pass 검사하는 php파일 --> 
<form method="post" action="enterlogin.php"> 
    <table align=center border=0 cellspacing=0 width=500 bordercolordark=white bordercolorlight=#999999> <!-- table생성 -->
        <tr> <!-- table 1행 생성 -->
            <td class="topline" width=150>  <!-- table 1행1열 생성 -->
                <p align=center>아이디</p>
            </td>
            <td class="topline" width=200> <!-- table 1행2열 생성 -->
                <input type="text" name="ID" style="height:25px">
            </td>
 
            <td class="buttonline" rowspan="2" align=center>  <!-- table 3열 생성, 열2개를 합침 -->
                <button type="submit" style="height:100px; width:130px">로그인</button>
         <button type="reset" style="height:50px; width:130px">리셋</button>
   </td>
 
        </tr>
 
        <tr> <!-- table 2행 생성 -->
            <td class="botline" width=150>  <!-- table 2행1열 생성 -->
                <p align=center>비밀번호</p>
            </td>
 
            <td class="botline" width=200> <!-- table 2행2열 생성 -->
                <input type="password" name="Paswd" style="height:25px">
            </td>
 
        </tr>

        <tr><!-- table 3행 생성 -->
           <td colspan=3 align=center> 
              <a href="join.php" target="_self" style="text-decoration:none">회원가입 하시겠습니까?</p> 
           </td>
        </tr>
     
    </table>


</form>
 
</body>
</html>