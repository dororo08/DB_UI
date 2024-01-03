
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
 
 <!-- 로그인 버튼 클릭시 post형식으로 logincheck.php로 넘긴다. id, pass 검사하는 php파일 --> 
  
	 <table align=center border=0 cellspacing=0 width=400 bordercolordark=white bordercolorlight=#999999> <!-- table생성 -->
		 <tr> <!-- table 1행 생성 -->
			<td class="botline" width=200>  <!-- table 1행1열 생성 -->
				 <FORM METHOD="post" ACTION="login.php">
 
	<INPUT TYPE="submit" VALUE="로그인">
	
 </FORM> 
 
			 </td>
		   <td class="botline" width=200> <!-- table 1행2열 생성 -->
				 <FORM METHOD="post" ACTION="join.php"> 
 <INPUT TYPE="submit" VALUE="일반 회원가입">
  </FORM>
 
			 </td>
	   <td class="botline" width=200> <!-- table 1행2열 생성 -->
				 <FORM METHOD="post" ACTION="join2.php"> 
 <INPUT TYPE="submit" VALUE="중개사무소 회원가입">
  </FORM>
 
			 </td>
  
		 
   <td class="botline" width=200> <!-- table 1행2열 생성 -->
				 <FORM METHOD="post" ACTION="login2.php"> 
 <INPUT TYPE="submit" VALUE="관심매물">
  </FORM>
			 </td>
 
			   <td class="botline" width=200> <!-- table 1행2열 생성 -->
				 <FORM METHOD="post" ACTION="rooms.php"> 
 <INPUT TYPE="submit" VALUE="방 내놓기">
  </FORM>
 
 </td>
		 </fieldset>
 
		 <tr><!-- table 3행 생성 -->
			<td colspan=3 align=center> 
			  <FORM METHOD="post" ACTION="searchroom.php">
	어떤 방을 찾으시나요?  <INPUT TYPE = "text" NAME="search"placeholder="건물명or지역을 입력하세요"> 
	<INPUT TYPE="submit" VALUE="찾기">
			</td>
		 </tr>
 <tr>
 <td>
  <IMG src='1-1.png' width=400 height=300> <br>
 </td>
 </tr>
	  
	 </table>
 
 
 
  
 </body>
 </html>