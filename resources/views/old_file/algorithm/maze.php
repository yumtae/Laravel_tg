<?php

include_once "../common.php";
include_once "../head.php";

?>


<!-- 
ㅇㅇㅇㅇxㅇ
ㅇxㅇㅇㅇㅇ
ㅇㅇxㅇㅇㅇ
ㅇㅇxㅇㅇㅇ
 -->

<script type="text/javascript">


	function min_maze(n,m){

		var maze = new Array(n);
		var min = n*m ; //임시값지정
		var x=0,y=0,count=0; //초기화
		




		for(i = 0 ; i < n ;i++){
			maze[i] = new Array(n);  
			
			for(j = 0 ; j < m ; j++){
				maze[i][j] = 0 ;
			}


		}//2차원배열생성




		maze[1][1] = 'x';//장애물 생성
		maze[0][3] = 'x';//장애물 생성
		maze[2][2] = 'x';//장애물 생성
		maze[3][0] = 'x';//장애물 생성
		maze[1][5] = 'x';//장애물 생성
		maze[2][4] = 'x';//장애물 생성



		while(1){


			if( maze[n-1][m-1]  > 0 ){
				break;
			}//마지막 도착시 종료

			
			
			
			if(x >= m-1 || maze[y][x+1] == 'x' ){
				y++;
			}else{
				x++	;
			}

			
			count++;
			maze[y][x] = count; //지나온길 체크
			





		}

			if(count < min ){
				min = count; //최소값 교체
			}


		

		console.log(maze);
		
		
		console.log(min);

	}


	$(function(){
			min_maze(4,6);
	})



</script>





	<ul>
		<li>1. 전 값 0 / 완성된값  으로지정</li>

		<li>2. 전값에 1을더한다</li>
		<li>3. 장애물일경우 그부분은제외 or 아닐경우 =1 </li>
		<li>4. </li>
		<li></li>
	</ul>


<div id="" class="">
[0, 1, 2]
[1, 2, 3]
[2, 3, 4]
</div>



<div id="" class="">
[3, 4, 5]
[4, 5, 6]
[5, 6, 7]
</div>

<div id="" class="">
[3, 4, 5]
[4, 5, 6]
[5, 6, 7]
</div>


<div id="" class="">
[6, 7, 8]
[7, 8, 9]

</div>


<div id="" class="">
[0, 1, 2, 3, 4, 5]
[1, 2, 3, 4, 5, 6]
[2, 3, 4, 5, 6, 7]
[3, 4, 5, 6, 7, 8]
[4, 5, 6, 7, 8, 9]

</div>






</br>
</br>
</br>
</br>









<div id="" class="">
[0, 1, 2]
[1, 2, 3]
[2, 3, 4]
</div>



<div id="" class="">
[x, 4, 5]
[4, 5, 6]
[5, 6, 7]
</div>

<div id="" class="">
[x, 4, x]
[4, 5, 6]
[5, 6, 7]
</div>


<div id="" class="">
[x, 7, 8]
[7, x, 9]

</div>


<div id="" class="">
[0, 1, 2, x, 4, 5]
[1, 2, 3, 4, 5, 6]
[x, 3, x, 5, 6, 7]
[3, 4, 5, x, 7, 8]
[4, 5, 6, 7, x, 9]

</div>


밑의 값으로 변경

<div id="" class="">
[0, 1, 2]
[1, 2, 3]
[2, 3, 4]
</div>



<div id="" class="">
[x, x, x]
[4, 5, 6]
[5, 6, 7]
</div>

<div id="" class="">
[x, 4, x]
[x, 5, 6]
[x, 6, 7]
</div>


<div id="" class="">
[x, 7, 8]
[x, x, 9]

</div>


<div id="" class="">
[0, 1, 2, x, x, x]
[1, 2, 3, 4, 5, 6]
[x, x, x, 5, 6, 7]
[x, x, x, x, 7, 8]
[x, x, x, x, x, 9]

</div>
