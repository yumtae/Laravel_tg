<?php
include_once "../common.php";
include_once "../head.php";
?>


<script type="text/javascript">
	function solution(scoville, k) {
		
		// 1. 배열 정렬 
		// 2. 최소값이 k 값보다 작은지 확인
		// 3. 작을시 가장작은수 + (두번쨰로 작은수 x 2 )
		// 4. 작지않을 시 계산한 횟수 출력


		console.log(scoville);

		var scoville_arrange = new Array; 
		var count = 0 ;

			for( i = 0 ; i < scoville.length ; i++ ){
				var index = 0 ;

				for(j = 0 ; j < scoville.length ; j++){
					
					if(scoville[i] < scoville[j] ){
						index ++;
					}

				}

				scoville_arrange[i] = scoville[index];

			}
			scoville = scoville_arrange.reverse()



				
			while(scoville[0] < k){
				
				scoville[0] = scoville[0] + (scoville[1]*2);
				scoville.splice(1, 1);
				count++;
				
			}


		console.log('합친 횟수 = ' + count);
	}


	$(function(){
		solution( [20,1,2,3,9,10,12] , 20)
	})

</script>


<div style='width:50%'>

	<h6 class="guide-section-title">문제 설명</h6>
	
	
	
		<div class="markdown solarized-dark">
			<p>매운 것을 좋아하는 Leo는 모든 음식의 스코빌 지수를 K 이상으로 만들고 싶습니다. 모든 음식의 스코빌 지수를 K 이상으로 만들기 위해 Leo는 스코빌 지수가 가장 낮은 두 개의 음식을 아래와 같이 특별한 방법으로 섞어 새로운 음식을 만듭니다.</p>
			<div class="highlight"><pre class="codehilite"><code>섞은 음식의 스코빌 지수 = 가장 맵지 않은 음식의 스코빌 지수 + (두 번째로 맵지 않은 음식의 스코빌 지수 * 2)
			</code></pre></div>
			<p>Leo는 모든 음식의 스코빌 지수가 K 이상이 될 때까지 반복하여 섞습니다.<br>
			Leo가 가진 음식의 스코빌 지수를 담은 배열 scoville과 원하는 스코빌 지수 K가 주어질 때, 모든 음식의 스코빌 지수를 K 이상으로 만들기 위해 섞어야 하는 최소 횟수를 return 하도록 solution 함수를 작성해주세요.</p>

			<h5>제한 사항</h5>

			<ul>
			<li>scoville의 길이는 1 이상 1,000,000 이하입니다.</li>
			<li>K는 0 이상 1,000,000,000 이하입니다.</li>
			<li>scoville의 원소는 각각 0 이상 1,000,000 이하입니다.</li>
			<li>모든 음식의 스코빌 지수를 K 이상으로 만들 수 없는 경우에는 -1을 return 합니다.</li>
			</ul>

			<h5>입출력 예</h5>
			<table class="table">
			<thead><tr>
			<th>scoville</th>
			<th>K</th>
			<th>return</th>
			</tr>
			</thead>
			<tbody><tr>
			<td>[1, 2, 3, 9, 10, 12]</td>
			<td>7</td>
			<td>2</td>
			</tr>
			</tbody>
			</table>
			<h5>입출력 예 설명</h5>

			<ol>
			<li><p>스코빌 지수가 1인 음식과 2인 음식을 섞으면 음식의 스코빌 지수가 아래와 같이 됩니다.<br>
			새로운 음식의 스코빌 지수 = 1 + (2 * 2) = 5<br>
			가진 음식의 스코빌 지수 = [5, 3, 9, 10, 12]</p></li>
			<li><p>스코빌 지수가 3인 음식과 5인 음식을 섞으면 음식의 스코빌 지수가 아래와 같이 됩니다.<br>
			새로운 음식의 스코빌 지수 = 3 + (5 * 2) = 13<br>
			가진 음식의 스코빌 지수 = [13, 9, 10, 12]</p></li>
			</ol>

			<p>모든 음식의 스코빌 지수가 7 이상이 되었고 이때 섞은 횟수는 2회입니다.</p>
	</div>





</div>