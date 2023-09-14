<?php
include_once "../common.php";
include_once "../head.php";
?>


<script type="text/javascript">
	function solution(array, commands) {
		var total_array =  commands.length ;
		var result_array  = new Array(total_array);

		for( a = 0 ; a < total_array ; a++){
			console.log('정렬 전 배열 ' +array);

			var array_length = array.length; // 배열 갯수 
			

			var start_index = commands[a][0]-1; //시작수
			var end_index = commands[a][1]; // 끝수
			
			
			
			var answer = array.slice(start_index,end_index);  // 배열 자르기
			var answer_array = answer.length;
			var answer_arrange = Array.of(answer_array);
			//[1 35 12 64]
			
			console.log(commands[a][0] + '번쨰부터' + end_index +  '까지 배열 = ' +answer);  

			for( i = 0 ; i < answer_array ; i++ ){
				var index = 0 ; // 순서정할 변수 초기화

				for ( j = 0 ; j < answer_array ; j++ ) //배열에 각 수 비교
				{
					if(answer[i] < answer[j]){
						index++;
					}

				}
				
					answer_arrange[index] = answer[i] ;

			} // answer 수를 가져와 원하는 배열을 잘라야함

			console.log('배열갯수 = '+ answer_array + ' 정렬 = ' +answer_arrange);
			
			k = commands[a][2];
			
		


			console.log( ' 배열' + a + '의 ' + k + '번째 숫자 = ' + answer_arrange[k-1]);

			console.log(' ');

			result_array[a] = answer_arrange[k-1];

		}

		console.log(result_array);

	}


	$(function(){
		var array = [5,1,35,12,64,74,32,93];
		var commands = [[1, 7, 3], [2, 5, 3], [4, 6, 1]];
		solution(array, commands);
	})

</script>
<div style='width:50%'><p>배열 array의 i번째 숫자부터 j번째 숫자까지 자르고 정렬했을 때, k번째에 있는 수를 구하려 합니다.</p>

<p>예를 들어 array가 [1, 5, 2, 6, 3, 7, 4], i = 2, j = 5, k = 3이라면</p>

<ol>
<li>array의 2번째부터 5번째까지 자르면 [5, 2, 6, 3]입니다.</li>
<li>1에서 나온 배열을 정렬하면 [2, 3, 5, 6]입니다.</li>
<li>2에서 나온 배열의 3번째 숫자는 5입니다.</li>
</ol>

<p>배열 array, [i, j, k]를 원소로 가진 2차원 배열 commands가 매개변수로 주어질 때, commands의 모든 원소에 대해 앞서 설명한 연산을 적용했을 때 나온 결과를 배열에 담아 return 하도록 solution 함수를 작성해주세요.</p>

<h5>제한사항</h5>

<ul>
<li>array의 길이는 1 이상 100 이하입니다.</li>
<li>array의 각 원소는 1 이상 100 이하입니다.</li>
<li>commands의 길이는 1 이상 50 이하입니다.</li>
<li>commands의 각 원소는 길이가 3입니다.</li>
</ul>

<h5>입출력 예</h5>
<table class="table">
        <thead><tr>
<th>array</th>
<th>commands</th>
<th>return</th>
</tr>
</thead>
        <tbody><tr>
<td>[1, 5, 2, 6, 3, 7, 4]</td>
<td>[[2, 5, 3], [4, 4, 1], [1, 7, 3]]</td>
<td>[5, 6, 3]</td>
</tr>
</tbody>
      </table>
<h5>입출력 예 설명</h5>

<p>[1, 5, 2, 6, 3, 7, 4]를 2번째부터 5번째까지 자른 후 정렬합니다. [2, 3, 5, 6]의 세 번째 숫자는 5입니다.<br>
[1, 5, 2, 6, 3, 7, 4]를 4번째부터 4번째까지 자른 후 정렬합니다. [6]의 첫 번째 숫자는 6입니다.<br>
[1, 5, 2, 6, 3, 7, 4]를 1번째부터 7번째까지 자릅니다. [1, 2, 3, 4, 5, 6, 7]의 세 번째 숫자는 3입니다.</p>

<p><a href="https://neerc.ifmo.ru/subregions/northern.html" target="_blank" rel="noopener">출처</a></p>
</div>