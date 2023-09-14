<?php

include_once "../common.php";
include_once "../head.php";

?>


<script type="text/javascript">


	




</script>

<br/>2. 순서도 - 최대공약수, 최소공배수 / 유클리드
<br/>[문제]
<br/>두 수 A, B 에 대한 최대공약수와 최소공배수를 유클리드호제법으로 처리하려고 한다. 제시된 순서도의 괄호 안 내용 (1)~(5)에 가장 적합한 항목을 기입하시오.
<br/>
<br/>[처리조건]
<br/>① 순서도 에 제시되어 있는 미완성 알고리즘을 분석하여, 가장 적절한 로직으로 구현될 수 있도록 답안을 기입하시오.
<br/>② 입력받는 두 수 A, B 는 0이 아닌 서로 다른 양의 정수로 가정한다.
<br/>③ MOD( )는 괄호 안의 연산을 수행하며 나머지를 구하는 함수이다.
<br/>    ex) MOD(5 / 3) 의 값은 2 이며, MOD(10 / 2) 의 값은 0이다.
<br/>④ 기호 " / " 는 나누기 연산, " * " 는 곱하기 연산을 나타낸다.
<br/>
<br/>
<br/>
<br/><img src='./img/euclid.png'>
<br/>
<br/>
<br/>
<br/> 최대공약수를 구하기 위해서는 주어진 두 수를 큰 수(HIGH) 와 작은 수(LOW)로 구분해주어야한다.
<br/>(  A  >  B  )  로 비교하면 참이면 A(큰 수), B(작은 수). 거짓이면, A(작은 수), B(큰 수) 이다
<br/>따라서,
<br/>참일 때,    HIGH = A     LOW = B
<br/>거짓일 때  HIGH = B     LOW = A
<br/>이렇게 대입식을 작성하면 HIGH 에 큰 수 LOW 에 작은 수가 들어간다
<br/>ex)  입력값 A = 12, B = 18  이라고 하면
<br/>       HIGH  = 18,  LOW = 12 가 된다
<br/>
<br/>
<br/>
<br/>최대공약수를 구하기 위해서는 MOD(HIGH / LOW) 연산을 R 이 0 이 될때 까지 수행해야한다.
<br/>R = 0 일 때, LOW 의 값이 최대공약수가 된다.
<br/>
<br/>
<br/>최소공배수는 주어진 두 수를 곱하고 (X*Y),  이를 GCD 로 나누어주면 구할 수 있다
<br/>
<br/>
<br/>① HIGH  =  B
<br/>②  R
<br/>③  LOW
<br/>④  LOW = R
<br/>⑤  A * B



<iframe width="1041" height="595" src="https://www.youtube.com/embed/9NwNqJLEvAE?list=PLimVTOIIZt2Z5Bug0KGrXxUTD-xMom2Ap" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>