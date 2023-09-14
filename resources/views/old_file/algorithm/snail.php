<?php
include_once "../common.php";
include_once "../head.php";
?>

<style type="text/css">
	.ex_div{display: inline-block; width: 20px; height: 20px; border: 1px solid #ddd; font-size: 10px; text-align: center; line-height: 20px;}
</style>

<script type="text/javascript">

function snail_array(col,row) {
	
	var count = 0;
	var x = 0;
	var y = 0;
	var snail = new Array()
	for ( i = 0; i < col; i++) {
		snail[i] = new Array();                // 2차 배열
		for ( j = 0; j < row; j++) {
			snail[i][j] = '0';              // 임시값(*) 입력
		}
	}
	



		for ( i = 0 ; i < col ; i++ )
		{
						
			for ( j = 0 ; j < row ; j++ )
			{
			
				if ( j == 4 )
				{
					count++;
					snail[col][j] = count;

				
				}else{
					count++;
					snail[i][j] = count;
				}

			}

		}

	
		

		 // 출력
		for (i = 0; i < col; i++) {
			for ( j = 0; j < row; j++) {
				$('#ex_div_wrap').text( snail[i][j] );

			}
			$('#ex_div_wrap').text('<br>');
		}






}







$(function(){
	snail_array(5,5)
})


</script>

<style type="text/css">
	#cogs {
    width: 100%;
    height: 100%;
    position: fixed;
    text-align: center;
    overflow: hidden;
    z-index: -100;
}

@keyframes rotateCogOne {
    0% {
        -webkit-transform:rotate(0deg);
    }
    100% {
        -webkit-transform:rotate(360deg);
    }
}
#cogOne {
    animation: rotateCogOne 60s infinite linear;'
    // which means...
    animation: [name], [duration], [repeat], [easing]
}

</style>
<body>
    <div id="cogs">
        // Your awesome cog pictures
    </div>
    <div id="content">
        // Your awesome content
    </div>
</body>


<div class='ex_div_wrap'>


</div>

<div style='width:80%'>

	

	<img src='./img/snail_array.png' style='width:100%'>


	
	<div id="mainTextBodyDiv" style="width:100%; padding:0;">
		
	<style type="text/css">


		/* 작성자, 홈페이지, 카테고리 등의 subject 출력 부분에 적용 */
		.b_detail_left{color:#666666; background-color:#FFFFFF; width:120; font:normal 11px 맑은 고딕,돋움;}

		/* 작성자, 홈페이지, 카테고리 등에 해당되는 '데이타'에 적용 */
		.b_detail_right{color:#777777; background-color:#ffffff; border-bottom:1px solid #fafafa; font:normal 11px 맑은 고딕,돋움; padding-left:3;}

		/* 조회, 추천, 아이피 등의  글자에 적용 */
		.b_detail_right2{color:#777777; background-color:#ffffff; font-size:11px; font-family:맑은 고딕,돋움; }

		/*  본문내용 */
		.b_body_text{color:#353535; line-height:1.9;}
		.b_body_text a{color:#0055dd;}
		.b_body_text a:hover{color:#ee3300;}
		.b_body_text a:visited{color:#0055dd;}

		/*  댓글내용 */
		.b_reply_text{color:#414141; line-height:2;}
		.b_reply_text a{color:#0055dd;}
		.b_reply_text a:hover{color:#ee3300;}
		.b_reply_text a:visited{color:#0055dd;}

		/* 회원사진 - 본문내에 출력 */
		.b_mphoto_body{width:50px; margin-top:5px; filter:alpha(style=2, opacity=80, finishopacity=5); cursor:pointer;}

		/* 회원사진 - 댓글에 출력 */
		.b_mphoto_reply	{width:40px; filter:alpha(style=2, opacity=100, finishopacity=5); margin-top:2; cursor:pointer;}

		/* 댓글 입력란의 이름,메일,비밀번호 입력칸에 적용 */
		.b_reply_input{font-size:12px; font-family:돋움; width:100px; height:17px; color:#555555;
						border:1px solid #e5e5e5; background-color:#ffffff; text-align:center;}

		.b_hand{cursor:pointer;}
		.b_list_subject{width:px; word-break:break-all;}
		.b_list_name{text-align:center;}
		.b_list_date{text-align:center; font-size:11px; font-family:Tahoma,굴림;}
		.b_list_hit{text-align:center; font-size:7pt; font-family:Tahoma,굴림;}

		/* 글쓰기-편집기로 작성해 넣은 표의 <td> */
		.b_insert_td{line-height:110%;}

		/* url 자동링크 글자색*/
		.b_autolink{color:#0184FF; text-decoration: underline;}

		.b_imagine_table{} /*편집기-공간분할 <table>*/
		.b_imagine_td{}  /*편집기-공간분할 <td>*/
        
        .button {background-color:#091D32;color:#fff;padding:0 10px;}

	</style>



<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border:1px solid #FFFFFF; margin-bottom:4px;">
  <tbody><tr>
    <td>

		<table border="0" cellpadding="1" cellspacing="1" width="100%">

			
			
			
							<tbody><tr>
					<td class="b_detail_left">ㆍ분 류</td>
					<td class="b_detail_right">SW 시각화 알고리즘</td>
				</tr>
			
			
			
			
			
			
		</tbody></table>


	</td>
	<td align="right" valign="top">

			<table border="0" cellpadding="0" cellspacing="0" style="margin:1px;">

			<tbody><tr>
				<td class="b_detail_right2">
					<nobr>
										</nobr>
				</td>
			</tr>
			<tr><td height="1" bgcolor="#fafafa"></td></tr>


		
			</tbody></table>


    </td>
  </tr>
</tbody></table>



<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border:0px solid #FFFFFF; margin-bottom:15px; table-layout:fixed;">
    <tbody>
	<tr>
		<td id="bodytextID34" class="b_body_text" bgcolor="#ffffff" style="  ;">


			
			<!--본문내용-->
			<strong><font color="#0028e7" size="4">1. 달팽이 배열 처리 </font></strong><br>&nbsp;<br>달팽이 배열은 2차원 배열에 숫자를 소용돌이 모양으로 채우는 배열입니다.<br>달팽이 배열을 그림으로 나타내면 아래와 같습니다.<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>&nbsp;<br>달팽이 배열이 채워지는 방향은 알고리즘을 이해하고 나면, 쉽게 바꿀 수 있습니다.<br><br>달팽이 배열은 일반적으로 되풀이(반복)문을 사용하여 처리할 수 있습니다.<br>&nbsp;<br>
<blockquote style="MARGIN-RIGHT: 0px" dir="ltr">#include &lt;stdio.h&gt;<br>&nbsp;<br>#define MAXSIZE 100<br>&nbsp;<br>void setSnail(int snailArr[MAXSIZE][MAXSIZE], int snailSize, int direction);<br>void displaySnail(int snailArr[MAXSIZE][MAXSIZE], int snailSize);<br>&nbsp;<br>void main(void) {<br>&nbsp;&nbsp; int snailArr[MAXSIZE][MAXSIZE];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // 달팽이 배열 선언<br>&nbsp;&nbsp; int snailSize;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // 달팽이 배열 크기 변수 선언<br>&nbsp;<br>&nbsp;&nbsp; //.일반적인 방법으로 달팽이 배열 처리를 한다. <br>&nbsp;&nbsp; {<br>&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; //.달팽이 배열의 크기를 입력받는다. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("달팽이 배열의 크기를 입력하세요=&gt;");<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; scanf_s("%d", &amp;snailSize, sizeof(snailSize));<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br>&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; //.일반적인 방법으로 달팽이 배열의 설정 처리를 한다. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; setSnail(snailArr, snailSize, 1);&nbsp; <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br>&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; //.달팽이 배열의 내용을 출력한다. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("\n일반적인 방법으로 달팽이 배열 처리한 결과입니다.\n");<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("====================================\n");<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; displaySnail(snailArr, snailSize); <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br>&nbsp;&nbsp; }<br>}<br>&nbsp;<br>&nbsp;<br>void setSnail(int snailArr[MAXSIZE][MAXSIZE], int snailSize, int direction) {<br>&nbsp;&nbsp; int i;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // 달팽이 배열 인덱스<br>&nbsp;&nbsp; int numCnt = 0;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // 정수 카운터 선언 및 초기화<br>&nbsp; &nbsp;int xAxis = -1;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // x축 배열 위치 변수 선언 및 초기화<br>&nbsp;&nbsp; int yAxis = 0;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;// y축 배열 위치 변수 선언 및 초기화<br>&nbsp;<br>&nbsp;&nbsp; //.일반적인 방법으로 달팽이 배열의 설정 처리를 한다. <br>&nbsp;&nbsp; while (!(snailSize==0)) {<br>&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; //.달팽이 배열의 x축과 y축 위치를 결정하여 숫자를 집어넣는다. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; for (i=0; i&lt;snailSize*2-1; i++) {<br>&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; //.인덱스가 달팽이 배열의 크기에 도달했는가에 따른 처리 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if (i &lt; snailSize) { <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; xAxis += direction;&nbsp;&nbsp; // 방향에 따른 x축 위치 증감 처리<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; else {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; yAxis += direction;&nbsp;&nbsp; // 방향에 따른 y축 위치 증감 처리<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; numCnt++;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // 정수 카운터 증가<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; snailArr[yAxis][xAxis] = numCnt;&nbsp;&nbsp; // 달팽이 배열에 정수 값 대입<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; direction *= -1;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // 달팽이 배열 내의 방향 반전<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; snailSize--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // 달팽이 배열의 크기를 1만큼 감소<br>&nbsp;&nbsp; }<br>}<br>&nbsp;<br>void displaySnail(int snailArr[MAXSIZE][MAXSIZE], int snailSize) {<br>&nbsp;&nbsp; int i; <br>&nbsp;&nbsp; int j;<br>&nbsp;<br>&nbsp;&nbsp; //.달팽이 배열의 내용을 출력한다. <br>&nbsp;&nbsp; for (i = 0; i &lt; snailSize; i++) {<br>&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; //.연속된 정수 한 줄을 배열에서 꺼내 출력한다. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; for (j = 0; j &lt; snailSize; j++) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("%4d", snailArr[i][j]);<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("\n");<br>&nbsp;&nbsp; }<br>}<br></blockquote>&nbsp;
		</td>
	</tr>
</tbody></table>



</div>
