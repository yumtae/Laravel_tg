@include('user._layouts.common_css');




@if ($no==1)


<div id='gisa_engineer'>


	<h2>자바</h2>




	<p>접근 제한자</p>
	<ul >
		<li><b>public</b> - 모든 접근 허용</li>
		<li><b>protected</b> - 일 패키지내의 클래스와 다른 패키지의 상속 관계에 있는 클래스에서도 접근가능</li>
		<li><b>default</b> - 자신을 포함하는 패키지만 접근 가능</li>
		<li><b>prevate</b> - 자신을 포함하는 클래스에서만 참조 가능</li>

	</ul>
		


	<p>다형성 (Polymorphism)</p>
	<ul >
		<li><b>오버라이딩</b> - 부모 클래스의 메소드를 재정의 (암기 : 부모와 함께 라이딩)</li>
		<li><b>오버로딩</b> - 매개변수의 수 또는 타입을 달리하여 구분</li>

	</ul>
		
	<p>자바_ 캡슐화 (Encapsulation)</p>
	<ul >
		<li>정의 : <b>데이터(속성)</b>와 <b>기능(메소드)</b>를 하나의 객체로 묶어 구성</li>
		<li>- <b>메시지</b> - 매개변수의 수 또는 타입을 달리하여 구분</li>
		<li>- <b>정보 은폐, 정보은닉 (Information Hiding)</b> - 다른 객체로부터 자신의 자료룰 숨기고 자신의 연산만을 통해 접근 허용</li>

	</ul>





	<h2>파이썬</h2>


	<ul >
		<li>print f(값1, 값2, .... , sep=분리문자 , end = 종료문자)  </li>
		<li>input(출력문자).split(분리문자) // 입력된 값은 숫자가아닌 문자로 인식</li>
		<li> <img src='/img/System_management/python1.png' > </li>
	

	</ul>



	<h2>기억 클래스</h2>


	<ul >
		<li> <img src='/img/System_management/memory_class.png' > </li>
	

	</ul>
	

</div>







<div id='youtube_engineer'>
	 <img src='/img/System_management/System_management1.png' > 
	 <img src='/img/System_management/System_management1-2.png' > 
	 <img src='/img/System_management/System_management1-3.png' > 
	 <img src='/img/System_management/System_management1-4.png' > 

	<p>비선점 스케줄링</p>
	<ul >
		<li><p >이미 할당된 CPU를 다른 프로세스가 강제로 빼앗아 사용할 수 없는 스케줄링 기법</p></li>
		<li><p >프로세스가 CPU를 할당받으면 해당 프로세스가 완료될 때까지 CPU를 사용</p></li>
		<li><p >모든 프로세스에 대한 요구를 공정하게 처리 가능</p></li>
		<li><p >일괄 처리 방식에 적합, 중요한 작업이 기다리는 경우가 발생할 수 있음</p></li>
		<li><p >응답시간 예측이 용이</p></li><li><p >종류 : FCFS(FIFO), SJF, 우선순위, HRN, 기한부 등 알고리즘</p></li>
	</ul>


	<p>선점 스케줄링</p>
	<ul><li><div ><span >하나의 프로세스가 CPU를 할당받아 실행하고 있을 때 우선순위가 높은 다른 프로세스가 CPU를 강제로 빼앗아 사용할 수 있는 스케줄링 기법</span></div></li><li><div ><span >우선순위가 높은 프로세스를 빠르게 처리할 수 있음</span></div></li><li><div ><span >주로 빠른 응답시간을 요구하는 대화식 시분할 시스템에 사용</span></div></li><li><div ><span >선점으로 인한 많은 오버헤드를 초래함</span></div></li><li><div ><span >선점을 위해 시간 배당을 위한 인터럽트용 타이머 클럭(Clock)이 필요</span></div></li><li><div ><span >종류 : SRT, 선점 우선순위, RR(Round Robin), 다단계 큐, 다단계 피드백 큐 등 알고리즘</span></div></li></ul>




	<p>비선점 스케줄링 종류</p>
	<ul ><li><div ><span >FCFS(First-Come First-Service) = FIFO(First In First Out)<br>- 준비상태 큐에 도착한 순서에 따라 차례로 CPU를 할당<br>- 먼저 도착한 것이 먼저 처리되어 공평성 유지, 짧은 작은이 긴 작업을 기다리는 경우 발생<br><br></span></div></li><li><div ><span >SJF(Shortest Job First)<br>- 실행시간이 가장 짧은 프로세스에 먼저 CPU를 할당하는 기법<br>- 가장 적은 평균 대기 시간을 제공하는 최적 알고리즘<br><br></span></div></li><li><div ><span >HRN(Hightest Responseratio Next)<br>- 실행시간이 긴 프로세스에 불리한 SJF 기법을 보완하기 위한 것으로, 대기 시간과 서비스 시간을 이용하는 기법<br>- 우선순위 계산 공식 = 대기시간 + 서비스시간 / 서비스시간<br>- 우선 순위 계산 결과값이 높은 것부터 우선 순위가 부여, 대기 시간이 긴 프로세스일 경우 계산 결과값이 높게 나옴<br><br></span></div></li><li><div ><span >기한부(Deadline)<br>- 프로세스에게 일정한&nbsp;시간을 주어 그 시간 안에 프로세스를 완료하도록 하는 기법<br>- 시스템은 프로세스에게 할당할 정확한 시간을 추정해야함<br>- 사용자는 시스템이 요구한 프로세스에 대한 정확한 정보를 제공해야함<br><br></span></div></li><li><div ><span >우선순위(Priority)<br>- 준비상태 큐에서 기다리는 각 프로세스마다 우선순위를 부여하여 그 중 가장 높은 프로세스에게 먼저 CPU를 할당하는 기법</span></div></li></ul>


	
	<p>선점 스케줄링 종류</p>
	<ul ><li><div ><span >선점 우선순위<br>준비 상태 큐의 프로세스들 중에서 우선순위가 가장 높은 프로세스에게 먼저 CPU를 할당하는 기법<br><br></span></div></li><li><div ><span >SRT(Shortest Remaining Time)<br>- 비선점 기법 SJF 알고리즘을 선점 형태로 변경한 기법<br>- 현재 실행중 프로세스의 남은 시간과 준비상태 큐에 새로 돛가한 프로세스의 실행시간을 비교해 가장 짧은 실행 시간을 요구하는 프로세스에게 CPU를 할당하는 기법<br><br></span></div></li><li><div ><span >RR(Round Robin)<br>- 시분할 시스템(Time Sharing System)을 위해 고안된 방식, FCFS 알고리즘을 선점 형태로 변형한 기법<br>- FCFS(FIFO) 기법과 같이 준비상태 큐에 먼저 들어온 프로세스가 먼저 CPU를 할당받지만 각 프로세스는 할당된 시간(Time Slice Quantum)동안만 실행한 후 실행이 완료되지 않으면 다음 프로세스에게 CPU를 넘겨주고 준비상태 큐의 가장 뒤로 배치함<br>- 할당되는 시간이 클 경우 FCFS기법과 같아지고, 할당되는 시간이 작을 경우 문맥 교환 및 오버헤드가 자주 발생<br><br></span></div></li><li><div ><span >다단계 큐(Multi level Queue)<br>프로세스를 특정 그룹으로 분류할 수 있는 경우 그룹에 따라 각기 다른 준비상태 큐를 사용하는 기법<br><br></span></div></li><li><div ><span >다단계 피드백 큐(Multi level Feedback Queue)<br>특정 그룹의 준비상태 큐에 들어간 프로세스가 다른 준비상태 큐로 이동할 수 없는 다단계 큐기법을 준비상태 큐 사이를 이동할 수 있도록 개선한 기법</span></div></li></ul>



	 <img src='/img/System_management/System_management1-5.png' > 
	 <img src='/img/System_management/System_management1-6.png' > 
	 <img src='/img/System_management/System_management1-7.png' > 
	 <img src='/img/System_management/System_management1-8.png' > 
	 <img src='/img/System_management/System_management1-9.png' > 

</div>



@elseif ($no==2)


<div id='gisa_engineer'>


	<h2>절차적 프로그래밍 언어</h2>


	<p>C언어</p>
	<ul >
		<li> - 시스템 프로그램 언어로 널리 사용</li>
		<li> - UNIX의 일부가 C언어로 구성</li>
		<li> - 고급 프로그래밍 언어이면서 저급 프로그래밍 언어의 특징(하드웨어 제어 등 시스템 프로그램 개발)을 모두갖춤춤</li>
		<li> - 이식성이 좋아 컴퓨터 기종에 관계없이 작성 가능</li>

	</ul>
		


	<p>ALGOL</p>
	<ul >
		<li> - 수치계산 이나 논리연산 같은 <b>알고리즘</b> 연구개발 목적 언어</li>

	</ul>

	<p>COBOL</p>
	<ul >
		<li> - <b>사무 처리용</b> 언어</li>

	</ul>

	<p>FORTRAN</p>
	<ul >
		<li> - <b>과학적인 계산</b>을 하기위한  언어</li>

	</ul>

	<p>BASIC</p>
	<ul >
		<li> - <b>교육용</b> 대화형 언어</li>

	</ul>





	<h2>객체지향 프로그래밍 언어</h2>

	
	<p>구성요소</p>
	<ul >
		<li> <img src='/img/System_management/OOP.png' > </li>
	
	</ul>
		
	

	<p>특징</p>
	<ul >
		<li> <b>캡슐화 (Encapuslation)</b> - 속성(데이터)과 메소드(연산)을 하나롬 묶어 객체로 구성</li>
		<li> <b>정보은닉, 정보은폐(Information hiding)</b> - 자료를 숨기고 자신의 연산 만을 통해 접근</li>
		<li> <b>추상화(Abstraction)</b> - 세부사항 배제하고 중요한 부분을 중심으로 간략화</li>
	
	</ul>


	<p>추상화</p>
	<ul >
		<li> <b>과정 추상화</b> - 전체흐름을 파악할 수 있는 형태</li>
		<li> <b>데이터 추상화</b> - 자료와 자료에 적용할 수 있는 오퍼레이션을 묶어 정의</li>
		<li> <b>제어 추상화</b> - 이벤트에 대한 절차나 방법을 추상 (프로그램 명령어 실행 순서)</li>
	
	</ul>



	<p>종류</p>
	<ul >
		<li> <b>JAVA</b> - </li>
		<li> <b>C++</b> - c언어에 객체 지향 개념 적용</li>
		<li> <b>C#</b> - java와 비슷한 특색을 가짐  </li>
		<li> <b>Smalltalk</b> - 1세대 객체지향 언어로, 최초로 gui를 제공</li>
		<li> <b>Delphi(델파이)</b> - 기초문법은 파스칼 문법과 같지만 현재는 델파이라는 언어로 존재</li>
	
	</ul>
	







	<h2>언어 특성 활용 - 선언형 언어</h2>

	<li> <img src='/img/System_management/Language_characteristics.png' > </li>

	<li>- 종류 : HTML , LISP(리스프)-인공지능 함수형  , PROLOG(프롤로그) - 논리식 , XML , Haskell(하스캘) - 함수형 , SQL</li>



</div>



@elseif ($no==3)



<h2>운영체제</h2>


<div id='gisa_engineer'>
	<h3> 개념 </h3>
	<ul>
		<li> <img src='/img/System_management/operating_system.png' > </li>

		<li>사용자와 컴퓨터 인터페이스를 제공하는 <b>소프트웨어</b> (하드웨어X)</li>
		<li>★<b> 처리능력 (Throughput) 향상</b> : 일정 시간 내 시스템이 처리하는 일의 양</li>
		<li>★<b> 신뢰도(Reliablility) 향상</b> : 시스템이 주어진 문제를 정확하게 해결하는 정도</li>
		<li>★<b> 사용 가능도(Availability) 향상</b> : 시스템이 사용할 필요가 있을 때 즉시 사용 가능한 정도</li>
		<li>★<b> 응답시간, 반환시간 (Turn Around Time, 왕복소요시간) 단축</b> : 시스템에 작업을 의뢰한 시간부터 처리가 완료될때 까지 걸리는 시간</li>
		
	</ul>





	



	<h3> 기능적 분류 </h3>
	<ul>
		<li> <img src='/img/System_management/operating_system2.png' > </li>
		
	</ul>


	
	<h3> 세대별 발달 과정 </h3>
	<ul>
		<li> <img src='/img/System_management/operating_system3.png' > </li>
		
	</ul>





</div>

@elseif ($no==4)

	

<h2>소프트웨어</h2>


<div>
	<h3>분류 </h3>

	<ul>
		<li> <img src='/img/System_management/system_software1.png' > </li>
		<li> <img src='/img/System_management/system_software2.png' > </li>
		<li> <img src='/img/System_management/system_software3.png' > </li>
	</ul>


</div>



<div >
	<h2>윈도우 특징</h2>
	<img src='/img/System_management/window_point1.png' >
</div>





<div >
	<h2>유닉스</h2>
	<img src='/img/System_management/unix_point1.png' >
	<img src='/img/System_management/unix_point2.png' >
	<img src='/img/System_management/unix_point3.png' style='width:50%'>
</div>



@elseif ($no==5)

<h2>메모리 관리기법</h2>


<div>
	<h3>기억장치 관리 전략 </h3>
	<img src='/img/System_management/memory1.png' > 

</div>




<div>
	<h3>단편화(Fragmentation) 해결 방법</h3>

	<img src='/img/System_management/memory2.png' > 

</div>





<div>
	<h3>가상기억장치의 성능에 영향을 미치는 요인</h3>

	<img src='/img/System_management/memory3.png' > 

</div>




<div>
	<h3>메모리관리</h3>

	<img src='/img/System_management/memory4.png' > 

</div>



<div>
	<h3>페이지 교체 알고리즘</h3>

	<img src='/img/System_management/memory5.png' > 

	<img src='/img/System_management/memory6.png' > 
	<img src='/img/System_management/memory7.png' > 

</div>



@elseif ($no==6)

<h2> 프로세스 </h2>


<div>
	<h3> 프로세스 정의 </h3>
	<img src='/img/System_management/process1.png' > 

</div>


<div>
	<h3> ★프로세스 상태 전이도 </h3>
	<img src='/img/System_management/process2.png' > 

</div>

<div>
	<h3> 스풀링(spooling) </h3>
	<p>영화다운받으면서 볼수있는 버퍼링과 같은 효과</p>
	<img src='/img/System_management/process3.png' > 

</div>


<div>
	<h3> 프로세스 스케줄링 (=CPU 스케줄링) </h3> 

	<img src='/img/System_management/process4.png' > 

</div>



<div>
	<h3> 비선점 > SJF </h3> 

	<img src='/img/System_management/process5.png' > 

</div>



<div>
	<h3> 비선점 > HRN(Highest response ratio Next) </h3> 

	<img src='/img/System_management/process6.png' > 

</div>




<div>
	<h3> 선점(Preemptive Scheduling) > RR(Round Robin) , 선점 > SRT(Shortest Remaining Time) </h3> 

	<img src='/img/System_management/process7.png' > 

</div>



@elseif ($no==7)

<h2> 병행 프로세스 </h2>


<div>
	<h3> 동기화 기법 </h3>
	<img src='/img/System_management/process8.png' > 

</div>



<div>
	<h3> 교착 상태  </h3>
	<img src='/img/System_management/process9.png' > 

</div>


<div>
	<h3> 교착 상태 해결기법 </h3>
	<img src='/img/System_management/process10.png' > 

</div>


 <div>
	<h3> 은행원 알고리즘 </h3>
	<img src='/img/System_management/process11.png' > 

</div>
 
 


@elseif ($no==8)

<h2> 환경변수 / Shell Script </h2>




<div>
	<h3> 윈도우 환경 변수 </h3>
	<img src='/img/System_management/environment_variable1.png' > 

</div>




<div>
	<h3> UNIX / LINUX 환경 변수 </h3>
	<img src='/img/System_management/environment_variable2.png' > 

</div>

<div>
	<h3> UNIX / LINUX 주요 명령어 </h3>
	<img src='/img/System_management/environment_variable3.png' > 
	<img src='/img/System_management/environment_variable4.png' > 

</div>



<div>
	<h3> Shell Script </h3>
	<img src='/img/System_management/shell_script1.png' > 
	<img src='/img/System_management/shell_script2.png' > 

</div>

@elseif ($no==9)



<h2> 네트워크1</h2>




<div>
	<h3> 인터넷 </h3>
	<img src='/img/System_management/network1.png' > 

</div>


<div>
	<h3> IP주소 - 클래스 </h3>
	<img src='/img/System_management/network2.png' > 
	<img src='/img/System_management/network3.png' > 
	<img src='/img/System_management/network4.png' > 
	<img src='/img/System_management/network5.png' > 

</div>


<div>
	<h3> 네트워크 교환회선 </h3>
	<img src='/img/System_management/network6.png' > 

</div>


<div><h3> OSI 7계층 </h3>
	<img src='/img/System_management/network7.png' > 
	<img src='/img/System_management/network8.png' > 
	<img src='/img/System_management/network9.png' > 
	<img src='/img/System_management/network10.png' > 
	<img src='/img/System_management/network11.png' > 
	<img src='/img/System_management/network12.png' > 




</div>


@elseif ($no==10)


<h2> 네트워크 장비 및 구성</h2>




<div>
	

	<h3> 네트워크 토폴로지(네트워크 구성) </h3>
	<img src='/img/System_management/network_equipment3.png' > 
	<img src='/img/System_management/network_equipment4.png' > 
	<img src='/img/System_management/network_equipment1.png' > 
	<img src='/img/System_management/network_equipment2.png' > 

</div>



@elseif ($no==11)


<h2> TCP / IP</h2>




<div>
	

	<h3> 계층구조 비교 </h3>
	<img src='/img/System_management/TCP_IP1.png' > 
	<img src='/img/System_management/TCP_IP2.png' > 
	<img src='/img/System_management/TCP_IP3.png' > 
	<img src='/img/System_management/TCP_IP4.png' >
	<img src='/img/System_management/TCP_IP5.png' >
	<img src='/img/System_management/TCP_IP6.png' >


</div>




@elseif ($no==12)




<h2> 프로토콜 </h2>




<div>
	

	<h3> 네트워크 프로토콜 파악 </h3>
	<img src='/img/System_management/protocol1.png' > 
	<img src='/img/System_management/protocol2.png' > 


	<h3> 경로 제어 </h3>


	<img src='/img/System_management/protocol3.png' > 
	<img src='/img/System_management/protocol4.png' > 
	<img src='/img/System_management/protocol5.png' > 
	<img src='/img/System_management/protocol6.png' > 

	
	<h3> 트래픽 제어 </h3>

	<img src='/img/System_management/protocol7.png' > 


	<h3> 혼잡 제어 </h3>

	<img src='/img/System_management/protocol8.png' > 


	<h3> 다중화 </h3>

	<img src='/img/System_management/protocol9.png' > 
	<img src='/img/System_management/protocol10.png' > 






</div>




@endif











