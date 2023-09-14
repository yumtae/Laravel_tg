<?php
include_once "../common.php";
include_once "../head.php";
?>


<script type="text/javascript">
var a = [1, 2, 3];
function permu(a) {
  return a.reduce(
    function(list, element) {
      var newlist = [];

      list.forEach(function(seq) {
        for (var i = seq.length; i >= 0; i--) {
          var newseq = [].concat(seq);
          newseq.splice(i, 0, element);
          newlist.push(newseq);
        }
      });
      return newlist;
    },
    [[]]
  );


	

}



$(function(){
	console.log(permu(a));
})


</script>


<div style='width:80%'><div class="post-thumbnail"><img src="./img/permu.png" alt=""></div><div class="contents"><div class="MarkdownRender github" id="markdown-render"><div>



<h2 id="목-차">목 차</h2><ul>
<li>"결론" _순열 함수코드</li>
<li>"결론" _순열 함수의 결과(ver.1)</li>
<li>"결론" _순열 함수의 결과(ver.2)</li>
<li>순열 함수의 작동과정</li>
<li>순열 함수 코드 작동 순서와 의미해석</li>
</ul>
<h2 id="결론-순열-함수-코드">"결론" _순열 함수 코드</h2><pre><code>function permu(a) {
  return a.reduce(
    function(list, element) {
      var newlist = [];

      list.forEach(function(seq) {
        for (var i = seq.length; i >= 0; i--) {
          var newseq = [].concat(seq);
          newseq.splice(i, 0, element);
          newlist.push(newseq);
        }
      });
      return newlist;
    },
    [[]]
  );
}

var a = [1, 2, 3];
</code></pre><h2 id="결론-순열-함수의-결과ver.1">"결론" _순열 함수의 결과(ver.1)</h2><p>함수 permu가 배열a(요소 1,2,3)를 모두 순회하면 다음의 결과를 출력합니다.</p>
<pre><code>배열 a 요소 1를 순회 할 때 :  [[1]]
배열 a 요소 2를 순회 할 때 :  [[1,2], [2,1]] 
배열 a 요소 3을 순회 할 때 :  [[1,2,3],[1,3,2],[3,1,2],[2,1,3],[2,3,1],[3,2,1]]</code></pre><p>즉. 함수 permu는 배열[1,2,3]으로 순열  [[1,2,3],[1,3,2],[3,1,2],[2,1,3],[2,3,1],[3,2,1]]을 만듦니다.</p>
<h2 id="결론-순열-함수의-결과ver.2">"결론" _순열 함수의 결과(ver.2)</h2><pre><code>배열 a 요소 1일 경우(element=1) : 
-> (초기) list:[[ ]]
-> seq:0
-> newlist:[[1]]

즉 (이후)list: [[]]에서 [[1]]로 변경</code></pre><pre><code>배열 a 요소 2일 경우(element=2) : 
-> (초기)list: [[1]]
-> seq:1
-> for문 i=1 일 경우: [1,2]
         i=0 일 경우: [2,1]
-> newlist : [[1,2],[2,1]]

즉 (이후)list: [[1]]에서 [[1,2],[2,1]]로 변경</code></pre><pre><code>배열 a 요소 3일 경우(element=3) : 
-> (초기)list: [[1,2],[2,1]]
-> seq:2

[1,2]일 경우
-> for문 i=2 일 경우: [1,2,3]
         i=1 일 경우: [1,3,2]
         i=0 일 경우: [3,1,2]         
-> newlist : [[1,2,3],[1,3,2],[3,1,2]]

[2,1]일 경우
-> for문 i=2 일 경우: [2,1,3]
         i=1 일 경우: [2,3,1]
         i=0 일 경우: [3,2,1]         
-> newlist : [[1,2,3],[1,3,2],[3,1,2],
[2,1,3], [2,3,1],[3,2,1]]

즉 (이후)list: [[1,2,3],[1,3,2],[3,1,2]]에서
[[1,2,3],[1,3,2],[3,1,2],
[2,1,3],[2,3,1],[3,2,1]]로 변경</code></pre><p>즉. 함수 permu는 배열[1,2,3]으로 순열 [[1,2,3],[1,3,2],[3,1,2],[2,1,3],[2,3,1],[3,2,1]]을 만듦니다.</p>
<h2 id="순열-함수의-작동과정">"순열 함수의 작동과정</h2><blockquote>
<p>함수 permu는 배열을 받는 함수이며, 매번 호출 시, reduce함수를 반환(return) 합니다, 즉 reduce 함수가 실행됩니다.</p>
</blockquote>
<p>reduce 함수의 <code>accumulator는 list</code>를 가리키고, element는 reduce 함수를 “이용”할 배열 요소 1,2,3 각각을 의미합니다<br>여기서 <code>accumulator를 list로 지칭할 수 있는 건, 초기값으로 “[[ ]]”가 주어졌기 때문</code>입니다.</p>
<p>이로써 배열은 배열 인덱스 0번부터 즉, 1,2,3 순서별로 reduce 함수에 들어갑니다.</p>
<p>빈 배열인 [[ ]] , list는 forEach 함수를 만나 자신(list)의 배열 요소 각각에 콜백함수(forEach 함수의 인자)을 실행합니다.</p>
<p>forEach의 실행결과는 빈 배열 [ ]로 정의한 newlist에 push 되고 그 결과인 newlist를 반환(return) 됩니다. forEach함수의 한 사이클이 돌았습니다. </p>
<p>forEach 스코프를 나와 reduce로 이동합니다.<br>forEach 함수의 결과값인 newlist가 reduce 함수의 새로운 accumulator로 “갱신”이 되어서 작동됩니다. </p>
<p>reduce 함수는 배열요소 1,2,3 각각을 순외하면서 단일값(single value)을 만듭니다.</p>
<h2 id="순열-함수-코드-작동-순서와-의미해석">순열 함수 코드 작동 순서와 의미해석</h2><h2 id="1.-reduce함수-배열-요소-1-실행">1. reduce함수 "배열 요소 1" 실행</h2><p>콜백함수(reduce) 첫번째 인자 <code>accumulator, list</code> 즉, <code>빈배열 [[ ]]</code> 입니다.<br>콜백함수가 다루는 인자는 1 입니다.<br>초깃값 [[ ]] 이 주어졌기 때문에 요소 1부터 실행됩니다.</p>
<pre><code>list =[[ ]],
element= 1,
seq = 0,</code></pre><p>seq가 0인 이유는,<br>list가 빈배열 [[ ]]로 아무런 요소를 가지 않기 때문입니다.</p>
<pre><code>list =[[ ]],
element= 1,
seq = 0,
i=0,</code></pre><p>i=0가 0인 이유는,<br>list가 빈 배열 [ ]로 아무런 요소를 가지 않아 seq는 0 입니다.<br>그러므로 seq.length는 0 이고,<br>결국 i=0 입니다.</p>
<pre><code>list =[[ ]],
element= 1,
seq = 0,
i=0,
for(var i=0; i&lt;=0;</code></pre><p>i >=0 임으로 i=0입니다.<br>아래 내용을 for문은 1번 실행합니다</p>
<pre><code>newseq = [].concat(seq)</code></pre><p>없는 seq를 빈 배열[ ]에 넣으면 newseq는 [ ] 이 됩니다.</p>
<pre><code>list =[[ ]],
element= 1,
seq = 0,
i=0,
for(var i=0; i&lt;=0;</code></pre><p>element가 1인 상태임으로</p>
<pre><code>[]. splice(0,0,1)</code></pre><p>splice 2번째 인자가 "0"임으로 세번째 인자 "1"을 넣을 수 있습니다.</p>
<pre><code>[1]</code></pre><p>빈 배열은 요소 1을 갖는 배열이 됐습니다.</p>
<pre><code>newlist.push([1])</code></pre><p>배열 [1]을 newlist에 push 합니다.</p>
<pre><code>newlist = [[1]]</code></pre><p>이로써, newlist는 요소 1을 갖는 배열을 갖습니다.</p>
<pre><code>newlist는 빈 배열 []인데, 여기에 배열 [1]을 넣어 배열을 갖는 배열이 됐습니다.

newlist=[[1]]</code></pre><h3 id="결론-4">[결론]</h3><pre><code>list 는 [[]]에서 [[1]]로 변경 됩니다. 
[[1]]은 reduce 함수가 배열요소 2를 실행하는데 사용할, 초깃값(list, accumulator)이 됩니다.</code></pre><h2 id="2.-reduce함수-배열-요소-2-실행">2. reduce함수 "배열 요소 2" 실행</h2><p>콜백함수(reduce) 첫번째 인자 accumulator, list 즉, 배열 [[1]] 입니다.<br>콜백함수가 다루는 인자는 2 입니다.</p>
<pre><code>list = [[1]],
element= 2,
seq = 1,</code></pre><p>seq가 1인 이유는,<br>list가 배열 [1]로 요소 한 개를 갖고 있기 때문입니다.</p>
<pre><code>list = [[1]],
element= 2,
seq = 1,
i=1,</code></pre><p>list가 배열 [1]로 요소 한개를 갖고 있어 seq는 1 입니다.<br>그러므로 seq.length는 1 이고,<br>결국 i=1 입니다.</p>
<pre><code>list = [[1]],
element= 2,
seq =1,
i=1,
for(var i=0; 1&lt;=0;</code></pre><h3 id="i-0-임으로-i1과-i0입니다.">i >=0 임으로 i=1과 i=0입니다.</h3><h3 id="즉아래-내용을-for문은-2번-실행합니다">즉,아래 내용을 for문은 2번 실행합니다</h3><h3 id="i1일-경우">[i=1일 경우]</h3><pre><code>newseq = [].concat(seq)</code></pre><p>1인 seq를 빈 배열[ ]에 넣으면 newseq는 [1] 이 됩니다.</p>
<pre><code>list =[[1]],
element= 2,
seq = 1,
i=1,
for(var i=1; i&lt;=0;</code></pre><p>element가 2인 상태이고<br>i가 1일 경우기 때문에</p>
<pre><code>[1]. splice(1,0,2)</code></pre><p>splice 2번째 인자가 "0"임으로,<br>세번째 인자 "2"을 인덱스 1번 바로 앞에 넣을 수 있습니다.</p>
<pre><code>[1,2]</code></pre><p>빈 배열은 요소 1,2를 갖는 배열이 됐습니다.</p>
<pre><code>newlist.push([1,2])</code></pre><p>배열 [1,2]을 newlist에 push 합니다.</p>
<pre><code>newlist = [[1,2]]</code></pre><p>이로써, newlist는 요소 1,2을 갖는 배열을 갖습니다.</p>
<pre><code>newlist는 배열 [1]인데, 여기에 요소 2를 넣어 배열을 갖는 배열이 됐습니다.

newlist=[[1,2]]</code></pre><h3 id="i0일-경우">[i=0일 경우]</h3><pre><code>newseq = [].concat(seq)</code></pre><p>1인 seq를 빈 배열[ ]에 넣으면 newseq는 [1] 이 됩니다.</p>
<pre><code>list =[[1]],
element= 2,
seq = 1,
i=1,
for(var i=1; i&lt;=0;</code></pre><p>element가 2인 상태이고<br>i가 0일 경우기 때문에</p>
<pre><code>[1]. splice(0,0,2)</code></pre><p>splice 2번째 인자가 "0"임으로,<br>세번째 인자 "2"을 인덱스 0번 바로 앞에 넣을 수 있습니다.</p>
<pre><code>[2,1]</code></pre><p>빈 배열은 요소 2,1를 갖는 배열이 됐습니다.</p>
<pre><code>newlist.push([2,1])</code></pre><p>배열 [2,1]을 newlist에 push 합니다.</p>
<pre><code>newlist = [[1,2][2,1]]</code></pre><p><strong>주목할 점은 기존에 [1,2]배열을 갖는 배열에 [2,1]이 추가됐다.</strong></p>
<p>이로써, newlist는 배열 [1,2],[2,1]을 갖는 배열을 갖습니다.</p>
<pre><code>newlist는 배열 [[1,2]]인데, 여기에 배열[2,1]를 넣어 배열을 갖는 배열[[1,2],[2,1]]이 됐습니다.

newlist=[[1,2][2,1]]</code></pre><h3 id="결론-5">[결론]</h3><pre><code>list 는 [[1]]에서 [[1,2],[2,1]]로 변경 됩니다. 
[[1,2][2,1]]은 reduce 함수가 배열요소 3를 실행하는데 사용할, 초깃값(list, accumulator)이 됩니다.</code></pre><h2 id="3.-reduce함수-배열-요소-3-실행">3. reduce함수 "배열 요소 3" 실행</h2><p>콜백함수(reduce) 첫번째 인자 accumulator, list 즉, 배열 [[1,2],[2,1]] 입니다.<br>콜백함수가 다루는 인자는 2 입니다.</p>
<pre><code>list = [[1,2],[2,1]] ,
element= 3,
seq = 2,</code></pre><p>seq가 2인 이유는,<br>forEach는 [1,2],[2,1] 각각을 [1,2] 한 요소, [2,1]를 한 요소 라고 인식합니다.<br>이때 [1,2]는 seq이며 배열의 길이가 2기 때문에 seq가 2 입니다.</p>
<pre><code>list = [[1,2],[2,1]] ,
element= 3,
seq = 2,
i=2,</code></pre><p>list가 배열 [1,2]혹은 [2,1] 로 요소 두개를 갖고 있어 seq는 2입니다.<br>그러므로 seq.length는 2이고,<br>결국 i=2 입니다.</p>
<pre><code>list = [[1,2],[2,1]] ,
element= 3,
seq = 2,
i=2,
for(var i=2; i&lt;=0;</code></pre><h3 id="i-0-임으로-i2i1i0입니다.">i >=0 임으로 i=2,i=1,i=0,입니다.</h3><h3 id="즉아래-내용을-for문은-3번-실행합니다">즉,아래 내용을 for문은 3번 실행합니다</h3><h3 id="foreach는-12일-때와-12일때를-순회합니다.">forEach는 [1,2]일 때와 [1,2]일때를 순회합니다.</h3><h3 id="seq가-12-이고-i2일-경우">[seq가 [1,2] 이고 i=2일 경우]</h3><pre><code>newseq = [].concat(seq)</code></pre><p>1,2인 seq를 빈 배열[ ]에 넣으면 newseq는 [1,2] 이 됩니다.</p>
<pre><code>list = [[1,2],[2,1]] ,
element= 3,
seq = 2,
i=2,
for(var i=2; i&lt;=0;</code></pre><p>element가 3인 상태이고<br>i가 2일 경우기 때문에</p>
<pre><code>[1,2]. splice(2,0,3)</code></pre><p>splice 2번째 인자가 "0"임으로,<br>세번째 인자 "3"을 인덱스 2번 바로 앞에 넣을 수 있습니다.</p>
<p>여기서 인덱스 2 바로 앞이란 말은<br>1,”a””b”라고 할때,<br>a 와b 사이에 값을 넣는것과 같습니다.<br>결론적으로 1,a 다음에 값을 넣는 것과 같습니다.</p>
<pre><code>[1,2,3]</code></pre><p>빈 배열은 요소 1,2,3를 갖는 배열이 됐습니다.</p>
<pre><code>newlist.push([1,2,3])</code></pre><p>배열 [1,2,3]을 newlist에 push 합니다.</p>
<pre><code>newlist = [[1,2,3]]</code></pre><p>이로써, newlist는 요소 1,2,3을 갖는 배열을 갖습니다.</p>
<pre><code>newlist는 빈 배열 []인데, 여기에 요소 1,2,3인 배열 [1,2,3]를 넣어 배열을 갖는 배열이 됐습니다.

newlist=[[1,2,3]]</code></pre><h3 id="-12-이고-i1일-경우">[ [1,2] 이고 i=1일 경우]</h3><pre><code>newseq = [].concat(seq)</code></pre><p>1,2인 seq를 빈 배열[ ]에 넣으면 newseq는 [1,2] 이 됩니다.</p>
<pre><code>list = [[1,2],[2,1]] ,
element= 3,
seq = 2,
i=2,
for(var i=2; i&lt;=0;</code></pre><p>element가 3인 상태이고<br>i가 2일 경우기 때문에</p>
<pre><code>[1,2]. splice(1,0,3)</code></pre><p>splice 2번째 인자가 "0"임으로,<br>세번째 인자 "3"을 인덱스 2번 바로 앞에 넣을 수 있습니다.</p>
<pre><code>[1,3,2]</code></pre><p>빈 배열은 요소 1,2,3를 갖는 배열이 됐습니다.</p>
<pre><code>newlist.push([1,3,2])</code></pre><p>배열 [1,3,2]을 newlist에 push 합니다.</p>
<pre><code>newlist = [[1,2,3][1,3,2]]</code></pre><p>이로써, newlist는 요소 1,2,3,3,2,1을 갖는 배열을 갖습니다.</p>
<pre><code>newlist는 배열 [[1,2,3]]인데, 여기에 요소 [1,3,2]인 배열 를 넣어 배열을 갖는 배열이 됐습니다.

newlist=[[1,2,3][1,3,2]]</code></pre><h3 id="-12-이고-i0일-경우">[ [1,2] 이고 i=0일 경우]</h3><pre><code>newseq = [].concat(seq)</code></pre><p>1,2인 seq를 빈 배열[ ]에 넣으면 newseq는 [1,2] 이 됩니다.</p>
<pre><code>list = [[1,2],[2,1]] ,
element= 3,
seq = 2,
i=2,
for(var i=2; i&lt;=0;</code></pre><p>element가 3인 상태이고<br>i가 0일 경우기 때문에</p>
<pre><code>[1,2]. splice(0,0,3)</code></pre><p>splice 2번째 인자가 "0"임으로,<br>세번째 인자 "3"을 인덱스 0번 바로 앞에 넣을 수 있습니다.</p>
<pre><code>[3,1,2]</code></pre><p>빈 배열은 요소 3,1,2를 갖는 배열이 됐습니다.</p>
<pre><code>newlist.push([3,1,2])</code></pre><p>배열 [3,1,2]을 newlist에 push 합니다.</p>
<pre><code>newlist = [[1,2,3][1,3,2][3,1,2]]</code></pre><p>이로써, newlist는 요소 1,2,3,3,2,1,3,2,1을 갖는 배열을 갖습니다.</p>
<pre><code>newlist는 배열 [[1,2,3][1,3,2]]인데, 여기에 요소 [3,1,2]인 배열 를 넣어 배열을 갖는 배열이 됐습니다.

newlist=[[1,2,3][1,3,2],[3,1,2]]
</code></pre><h3 id="seq가-21-이고-i2일-경우">[seq가 [2,1] 이고 i=2일 경우]</h3><p>[같은 내용으로 중복되 간략하게 정리하겠습니다.]</p>
<pre><code>i=2일 때, 
[2.1].splice(2,0,3)
=> [2,1,3]
이것이 newlist.push 된다면
newlist의 값은 
[[1,2,3],[1,3,2],[3,1,2],[2,1,3] ]</code></pre><pre><code>i=1일 때, 
[2.1].splice(1,0,3)
=> [2,3,1]
이것이 newlist.push 된다면
newlist의 값은 
[[1,2,3],[1,3,2],[3,1,2],[2,1,3],[2,3,1] ]</code></pre><pre><code>i=0일 때, 
[2.1].splice(0,0,3)
=> [3,2,1]
이것이 newlist.push 된다면
newlist의 값은 
[[1,2,3],[1,3,2],[3,1,2],[2,1,3],[2,3,1],[3,2,1]]</code></pre><h3 id="결론-6">[결론]</h3><pre><code>list 는 [[1,2],[2,1]]에서 [[1,2,3],[1,3,2],[3,1,2],[2,1,3],[2,3,1],[3,2,1]] 로 변경 됩니다. 
reduce는 모든 배열요소를 순회 완료하여, 
결괏값 [[1,2,3],[1,3,2],[3,1,2],[2,1,3],[2,3,1],[3,2,1]]을 출력합니다.</code></pre></div></div></div></div>