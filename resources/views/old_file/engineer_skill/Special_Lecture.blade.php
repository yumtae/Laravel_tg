@include('user._layouts.common_css')

<div id='gisa_engineer'>
	

	@if ($no=='1')
		
	

		<h2>  특강 UML  </h2>


		<div>
			<h3> 보안 </h3>
			<img src='/img/Special_Lecture/UML1.png' >  
			<img src='/img/Special_Lecture/UML2.png' >  
			<img src='/img/Special_Lecture/UML3.png' >  
			<img src='/img/System_design/UML5.png' >  
			<img src='/img/System_design/UML6.png' >  
			<img src='/img/System_design/UML7.png' >  
			<img src='/img/System_design/UML8.png' >  
			<img src='/img/System_design/UML9.png' >  
			<img src='/img/System_design/UML10.png' >  
			<img src='/img/System_design/UML11.png' >  
			<img src='/img/System_design/UML12.png' >  
			<img src='/img/System_design/UML13.png' >  
			<img src='/img/Special_Lecture/UML4.png' > 
			<img src='/img/Special_Lecture/UML5.png' > 
			<img src='/img/Special_Lecture/UML6.png' > 
			<img src='/img/System_design/UML16.png' >  




		</div>


	@elseif ($no==2)




		<h2>  필수 암기  </h2>


			<div>
				<p> 낚시의법칙 <b> - 소프트웨어 제품의 결함도 특정 기능, 모듈 라이브러리에서 결험이 많이 발견된다 </b> </p>
				<p> 결함집중( 파레토의 법칙 )<b> - 소프트웨어 제품의 전체결함 80%는  전체기능중 20%에 집중되어있다 </b> </p>
				<p> 살충제 페러독스 <b> - 벌레가 내성이 생기듯 같은 테스트만 반복하면 다른 오류를 찾을수 없으므로 다른테스트 케이스를 점검하고 개선해야한다 </b> </p>
				<p> 오류-부재의 궤변 <b> - 사용자의 요구 사항을 만족하지 못하면 오류를 발견하고 제거해도 품질이 높다 할수 없다 </b> </p>
				<p> 형상관리 <b> - 소프트웨어의 개발 과정에서 바생하는 산출물의 변경 사항을 버전별로 관리하기 위한 일련의 활동 </b> </p>
				<p> 정보시스템 보안응 침입행위가 발생할 경우 탐지, 적극 대응하기위한 시스템 <b> - IDS(친입탐지시스템)  </b> </p>
				<p> 내부네트워크와 외부 사이에 위치하며, 외부/내부 공격으로부터 데이터를 보호하거나 서버의 서비스 중단을 방지해줌 <b> - DMZ  </b> </p>
				<p> 기업 내부자의 고의나 실수로 인한 외부로의 정보 유출을 방지하는 솔루션 <b> - DLP, 데이터 유출 방지 </b> </p>
				<p> 대량의 컴퓨터를 이용해 특정 시스템에 과도한 부하를 일으켜 정부 시스템의 사용을 방해하는 공격 <b> - DDOS </b> </p>
				<p> 스누핑 <b> -  네트워크에서 남의정보를 염탐하여 불법으로 가로채는 행위 </b></p>
				<p> 스니핑 <b> - 네트워크의 중간에서 남의 패킷을 도청  </b> </p>
				<p> 스푸핑 <b> - 승인받은 사용자인 것처럼 속임 </b>  </p>
				<p> SW개발 보안 3요소 (SW개발보안 목표) <b> - 기밀성(인가된 사용자만 접근가능) / 무결성(인가된 사용자만 변경가능) / 가용성(적잘한 시간에 접근가능한 것) </b> </p>
				<p> UI 설계원칙 4가지<b> - 직관성(누가나 쉽게 이해하고 사용) / 유효성(사용자의 목적 정확히달성) / 학습성(누가나 쉽게 배우고 익힐수 있게) / 유연성(사용자 요구사항 최대한 수용하며, 오류사항을 최소화) </b> </p>


				<p> SJH방식의 단점을 보완한 <b>HRN </b>의 계산식  <b> (서비스시간 + 대기시간) / 서비스시간  </b> </p>
				<p> 트랜잭션 특성 4가지 <b> 독립성,원자성,일괄성,지속성 </b> </p>
				<p> 애플리케이션 성능 측정하기위한 지표 4개 <b>- 처리량,응답 시간,경과 시간,자원 사용률  </b> </p>
				<p> 업무 중단 시점부터 업무가 복구되어 장상가동 될때시간,  복구시점 <b> RTO, RPO  </b> </p>
				<p> 스키마에 대한 간략한 설명 - <b> 데이터 베이스의 제약조건과 구조를 정의한 것 </b> </p>
				<p> 데이터 모델 요소 3가지 <b> - 구조, 연산, 제약조건  </b> </p>
				<p>  <b>  </b> </p>
				<p>  <b>  </b> </p>
				<p>  <b>  </b> </p>



			</div>




	@endif

</div>



