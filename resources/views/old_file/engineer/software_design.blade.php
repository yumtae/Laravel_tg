@include('user._layouts.common_css');

	



	

	@if ($no==1)
		

	<div id='gisa_engineer'>
		<h2> 현행 시스템 분석 </h2>

		<div>
			<h3>  플랫폼  </h3>
			<img src='/img/System_design/platform1.png' >  

		</div>



		<div>
			<h3>  현행 시스템 파악  </h3>
			<img src='/img/System_design/system_grasp1.png' >  
			<img src='/img/System_design/system_grasp2.png' >  
			<img src='/img/System_design/system_grasp3.png' >  
			<img src='/img/System_design/system_grasp4.png' >  
			<img src='/img/System_design/system_grasp5.png' >  

		</div>


		
		<img src='/img/System_design/system_grasp_test1.png' > 

	</div>



	@elseif ($no==2)

	<div id='gisa_engineer'>
		<h2> 소프트웨어 공학 - 생명 주기 </h2>
		<img src='/img/System_design/Life_cycle1.png' >  
		<img src='/img/System_design/Life_cycle2.png' >  
		<img src='/img/System_design/Life_cycle3.png' >  
		<img src='/img/System_design/Life_cycle4.png' >  
		<img src='/img/System_design/Life_cycle5.png' >  
		<img src='/img/System_design/Life_cycle6.png' >  
		<img src='/img/System_design/Life_cycle7.png' >  
		<img src='/img/System_design/Life_cycle8.png' >  
		<img src='/img/System_design/Life_cycle9.png' >  
		<img src='/img/System_design/Life_cycle10.png' >  
		<img src='/img/System_design/Life_cycle11.png' >  

	</div>

	@elseif ($no==3)

		<div id='gisa_engineer'>
			<h2>애자일 방법론 종류 / SW개발 방법론 / SW 개발 방법론 테일러링</h2>

			<div>
				<h3>애자일 방법론</h3>
				<img src='/img/System_design/agile1.png' >
			
				<h3>스크럼 - 팀 ★</h3>
				<img src='/img/System_design/agile2.png' >
				<img src='/img/System_design/agile3.png' >
				<img src='/img/System_design/agile4.png' >
			
				
			
				<h3>익스트림 프로그래밍 (XP) - 고객 만족 _ 5가지 핵심가치 ★</h3>
			
				<img src='/img/System_design/XP1.png' >
				<img src='/img/System_design/XP2.png' >
				<img src='/img/System_design/XP3.png' >
				<img src='/img/System_design/XP4.png' >
			
				<h3>문제</h3>
				<img src='/img/System_design/XP5.png' >
				<img src='/img/System_design/XP6.png' >
				<img src='/img/System_design/XP7.png' >
				
			
			
			
				<h3>소프트웨어 개발 방법론 - 정의 정도만 암기</h3>
			
				<img src='/img/System_design/method1.png' >
				<img src='/img/System_design/method2.png' >
				<img src='/img/System_design/method3.png' >
				<img src='/img/System_design/method4.png' >
				<img src='/img/System_design/method5.png' >
				<h3>문제</h3>
				<img src='/img/System_design/method6.png' >
			</div>
		</div>




	@elseif ($no==4)

		<div id='gisa_engineer'>
	
			<h2>  프로젝트 관리 </h2>


			<div>
				<h3> 프로젝트 관리 </h3>
				<img src='/img/System_design/project1.png' >  
		


				<h3> 비용산정 </h3>
				<img src='/img/System_design/cost1.png' >  
				<img src='/img/System_design/cost2.png' >  
				<img src='/img/System_design/cost3.png' >  
				<img src='/img/System_design/cost4.png' >  
				<img src='/img/System_design/cost5.png' >  
				<img src='/img/System_design/cost6.png' >  
				<img src='/img/System_design/cost7.png' >  
				<img src='/img/System_design/cost8.png' >  
				<img src='/img/System_design/cost9.png' >  
				<img src='/img/System_design/cost10.png' >  


				<h3> 일정계획 </h3>
				<img src='/img/System_design/plan1.png' >  
				<img src='/img/System_design/plan2.png' >  
				<img src='/img/System_design/plan3.png' >  
				<img src='/img/System_design/plan4.png' >  


				<h3> 그룹구성 </h3>
				<img src='/img/System_design/group1.png' >  


				<h3> 위험분석 </h3>
				<img src='/img/System_design/risk1.png' >  

				<h3> 문제 </h3>
				<img src='/img/System_design/risk2.png' >  
				<img src='/img/System_design/risk3.png' >  

			</div>
		</div>





		<div id='youtube_engineer'>


			<h2>01.데이터 모델</h2>


				<div>
					<h3>UML(객체지향모델링언어) - OMG에서 정의 </h3>
					<li><b>사물</b> </li>
					<li><b>관계</b> </li>
					<li><b>다이어그램</b> </li>
				</div>




				<div>
					<h3>사물 </h3>
					<li><b>행동 사물</b> - 시간,공간에따라 표현 / 상호작용,상태머신</li>
					<li><b>그룹 사물</b> - 그룹별 표현 (패키지)</li>
					<li><b>구조 사물</b> - 개념적, 물리적 표현</li>
					<li><b>주해 사물</b> - 부가적 설명 표현 , NOTE</li>
				</div>

				<div>
					<h3>관계 </h3>
					<li><b>연관 관계</b> - 2개이상의 사물들이 서로 관련이 되어 표현 (실선,방향표시)</li>
					<li><b>집합 관계</b>  컴퓨터-프린터(전체쪽에 마름모표시)</li>
					<li><b>포함 관계</b> -  현관문-KEY(색칠된마름모)</li>
					<li><b>일반화 관계</b> - 뿌리형태 </li>
					<li><b>의존 관계</b> -  점선</li>
					<li><b>실체화 관계</b> -  </li>
					<img src='/img/engineer4.png' style='min-width:400px;width:40%'>
				</div>

				<div>
					<h3>다이어그램 - 도형으로 표현 </h3>
					<li><b>구조적 다이어그램(정적) </b> <br/> - 클래스(구조),객체(객차끼리의관계) <br/> - 컴포넌트(구현모델 끼리의 관계),배치(구현,위치) <br/> - 복합체 구조(클래스, 컴포런트가 복합구조를 갖는 경우 내부 구조 표현), 패키지(그룹화한 패키지끼리 관계)</li>
					<li><b>행위 다이어그램(동적) </b> <br/> - 유스케이스(사용자의 사례), 시퀀스(메시지,순서) <br/> - 커뮤니케이션(메세지,객채간의 연관), 상태(ex.세탁기/어떤상태인가) <br/> - 활동(처리흐름), 상호작용 개요(제어흐름), 타이밍(시간제약 명시적표현)</li>
					<img src='/img/engineer4_2.png' style='min-width:600px;width:60%'>
				</div>




			</div>




	@elseif ($no==5)

					
		<div id='gisa_engineer'>
			
			<h2>  요구 공학 </h2>


			<div>
				<h3> 요구공학 프로세스 </h3>
				<img src='/img/System_design/Requirements1.png' >  
				<img src='/img/System_design/Requirements2.png' >  
				<img src='/img/System_design/Requirements3.png' >  
				<img src='/img/System_design/Requirements4.png' >  
				<img src='/img/System_design/Requirements5.png' >  
				<img src='/img/System_design/Requirements6.png' >  
				
			</div>


			<div>
				<h3> 모델링 ★</h3>
				<img src='/img/System_design/modeling1.png' >  
				<img src='/img/System_design/modeling2.png' >  
				<img src='/img/System_design/modeling3.png' >  
				<img src='/img/System_design/modeling4.png' >  
				<img src='/img/System_design/modeling5.png' >  

			</div>


			<div>
				<h3> 요구사항 명세</h3>
				<img src='/img/System_design/specification1.png' >  
				<img src='/img/System_design/specification2.png' >
				<h3> 검토</h3>
				<img src='/img/System_design/specification3.png' >  
				<img src='/img/System_design/specification4.png' >  
				<img src='/img/System_design/specification5.png' >  

				<h3> 문제</h3>
				<img src='/img/System_design/specification6.png' >  
				<img src='/img/System_design/specification7.png' >  
				<img src='/img/System_design/specification8.png' >  
				<img src='/img/System_design/specification9.png' >  



			</div>


		</div>







		<div id='youtube_engineer'>





			<h2>화면설계</h2>


			<div>
				<h3>사용자 인터페이스 </h3>
				<li><b>1. 사용자 인터페이스</b> - 사용자와 시스템간의 상호작용 <br/> - 물리젝제어(전달방법)<br/> - 구성<br/> - 기능(편리,간편)</li>
				<li>2. 사용자 인터페이스의 특징 <br>- 만족도에 큰 영향을 끼치기에 많이변경됨 <br>- 편리성,가독성, 이해도 높임 <br>-  최소한의 노력으로 결과를 얻을 수 있어야함 <br>-  <b>소프트웨어 아키텍처 숙지 필요</b></li>
				<li>3. 사용자 인터페이스의 구분★ <br/> -  <b>CUI(Command line)</b> : 텍스트<br/> - <b>GUI(Graphic User)</b> : 아이콘<br/> - <b>NUI</b> : 말, 행동</li>

				<li>4. 사용자 인터페이스의 기본원칙★<br/> -  <b>직관성</b> : 쉽게 이해<br/> - <b>유효성</b> : 목적을 정확하고 완벽하게 달성<br/> - <b>학습성</b> : 누구나 쉽게 학습<br/> - <b>유연성</b> : 실수 최소화</li>


				<li><b>5. 사용자 인터페이스의 설계 지침</b> <br/> - ★사용자 중심, 일관성, 단순성 <br/> - 결과예측 가능, 가기성, 표준화 <br/> - 접근성,명확성,오류 발생 해결</li>



			</div>







			<div>
				<h3>UI 표준 </h3>
				
				<li><b>웹 스타일 가이드 구성(사례)</b>  <br/> - 스타일 가이드 : 각종 규칙들의 기준이 되는 집합 <br/> - introduction<br/> - 기본 규칙(폰트,컬러)<br/> - 레이아웃 및 요소 </li>
				<li><b>정책</b>  <br/> - 웹스타일 가이드 운영 정책  <br/> - 조직의 IDENTITY 유지 정책</li>
				<li><b>기본환경</b>  <br/>  용량 규정  <br/> - 메인이나 서브 화면 전체 페이지 및 이미지 사이즈, 공통아이콘 이미지 사이즈 </li>
				
			</div>


			<div>
				<h3>한국형 웹 콘텐츠 접근성 지침</h3>
				
				<li><b>인식의 용이성</b> : 대체 텍스트, 멀티미디어 대체수단, 명료성</li>
				<li><b>운용의 용이성</b> : 키보드 접근성, 충분한 시간 제공, 광과민성 발작 예방, 쉬운 내비게이션</li>
				<li><b>이해의 용이성</b> : 가독성, 예측 가능성, 콘텐츠의 논리성, 입력 도움</li>
				<li><b>견고성</b> : 문법 준수, 접근성</li>

				

			</div>


			<div>
				<h3>전자정부 웹 표준 준수 지침</h3>
				
				<li><b>내용의 문법 준수</b> </li>
				<li><b>내용과 표현의 분리(비표준 문법에 대한 확장성 고려하지 않아도된다)</b> </li>
				<li><b>동작의 기술 중립성 보장 </b> </li>
				<li><b>플러그인의 호환성 </b> </li>
				<li><b>콘텐츠의 보편적 표현 </b> </li>
				<li><b>운영체제에 독립적인 콘텐츠 제공 </b> </li>
				<li><b>부가 기능의 호환성 확보 </b> </li>
				<li><b>다양한 프로그램 제공 </b> </li>

			</div>


		</div>





	@elseif ($no==6)

				
		<div id='gisa_engineer'>
			
			<h2>  CASE 도구, HIPO, N-S Chart </h2>



			<div>
				<h3> HIPO </h3>
				<img src='/img/System_design/HIPO1.png' >  
			</div>


			<div>
				<h3> N-S 차트 </h3>
				<img src='/img/System_design/N_S_chart1.png' >  
			</div>

			<div>
				<h3> 문제 </h3>
				<img src='/img/System_design/N_S_chart2.png' >  
			</div>


		</div>







		<div id='youtube_engineer'>





			<h2>UI 설계 도구</h2>


			<div>
				<h3>UI 설계 도구 </h3>
				<li><b>와이어프레임</b> - 기획초기, 개략적 ,뼈대 / 일러,포토샵,툴,손그림,키노트 등</li>
				<li><b>목업</b> - 실제구현이 아닌 정적인 모형(명함예시,핸드폰 판매점)</li>
				<li><b>스토리보드</b> - 와이어프레임에대한 설명 , 페이지간의 이동흐름 정적으로 추가 / 개발자가 최종적으로 참고하는 지침서</li>
				<li><b>프로토타입</b> - 동적인 형태 , 실제로 구현, 완벽X, 모형물 / HTML ,css </li>
				<li><b>유스케이스</b> - 사용자 측면에서 다이어그램으로 만든것</li>
			</div>






			<div>
				<h3>UI 요구사항 확인 </h3>

				<li><b>1. 목표 정의</b> - 개별적이고 많은사람들과 인터뷰를 통해 요구사항 파악 , 시간은 짧게</li>
				<li><b>2. 활동 사항 정의</b> -  앞으로의 활동 사항 정의, 예산이나 기간 측정,계획 , 우선순위 </li>
				<li><b>3. UI 요구사항 작성</b> - 다양한 의견 수렴, 전체적인 구조 파악 및 검토</li>


				<li> 요구사항 요소 확인 : 1. <b>데이터 요구</b>  2.<b>기능 요구</b>(동사형으로 정리)   3. <b>제품_서비스 품질</b> / 4. <b>제약 사항</b> </li>
				<li> 정황 시나리오 작성 : 6하원칙, 이야기 형식, <b>완전히 완성된</b> 서비스 상상 </li>
				<li> 요구사항 작성 </li>


			</div>





			<div>
				<h3>ISO 품질 요구사항   - ISO/IEC 9126</h3>

				<li> <b>기능성(사용자가 원하는 목적을 잘 달성하였는가 / 적절한 기능을 정호가하게+호환,보완 )</b> : 적절성/정합성 , 정밀성/정확성 , 상호 운용성 , 보안성 , 호환성</li>
				<li> <b>신뢰성(오류없이 잘 실행되는가 / 변함,고장나도 문제없이)</b> : 성숙성, 고정 허용성, 회복석</li>
				<li> <b>사용성(사용자가 잘이해하고 다시 사용하고 싶은 정도 / 얼마나 쉽고 편한지)</b> : 이해성, 학습성, 운용성, 친밀성</li>
				<li> <b>효율성(한정된 자원으로 얼마나 잘처리하나 / 한전된 시간으로 많은자원을 처리)</b> : 시간 효율성, 자원 효율성</li>
				<li> <b>유지보수성(새로운 요구사항과 개선확장이 잘되나 / 개선 및 확정)</b> : 분석성, 변경성, 안정성 ,시험성</li>
				<li> <b>이식성(다른환경에서 얼마나 쉽게 적응 하는가)</b> : 적용성, 설치성, 대체성, 공존성</li>
				
			</div>






		</div>



	@elseif ($no==7)
		<div id='gisa_engineer'>
		
			<h2>  UML (Unified Modeling Language, 통합 모델링 언어) </h2>
		
		
			<div>
				<h3> UML 개념 </h3>
				<img src='/img/System_design/UML1.png' >  
				<img src='/img/System_design/UML2.png' >  
				<img src='/img/System_design/UML3.png' >  
				<img src='/img/System_design/UML4.png' >  
				<img src='/img/System_design/UML5.png' >  
				<img src='/img/System_design/UML6.png' >  
				<img src='/img/System_design/UML7.png' >  
				<img src='/img/System_design/UML8.png' >  
				<img src='/img/System_design/UML9.png' >  
				<img src='/img/System_design/UML10.png' >  
		
				<h3> 집합관계 (Aggregation)- 영문도 암기 필요 / 매개변수 사용</h3>
				<img src='/img/System_design/UML11.png' > 
				<img src='/img/System_design/UML12.png' > 
				<img src='/img/System_design/UML13.png' > 
				
			</div>	
			<div>
				<h3> 시퀀스 다이어그램 </h3>
				<img src='/img/System_design/UML14.png' > 
				<img src='/img/System_design/UML15.png' > 
				<img src='/img/System_design/UML16.png' > 
		
			</div>
		
			<div>
				<h3> 분석 모델 검증  </h3>
				<img src='/img/System_design/analysis_verification1.png' > 
				<img src='/img/System_design/analysis_verification2.png' > 
				<img src='/img/System_design/analysis_verification3.png' > 
		
			</div>
		
		
		
		</div>
		
		
		
		
		
		
		
		<div id='youtube_engineer'>
		
		
		
		
		
		
			<h2>화면설계 C</h2>
			
		
		
			<div>
				<h3>UI 프로토타입</h3>
				<li><b> 동적인 형태(실제 동작하는것 처럼) </b>의 테스트 모델 , 필수기능 포함, 간단, 실 사용자 테스트로 검증  </li>
		
			</div>
		
		
		
			<div>
				<h3>UI 프로토타입 고려사항 계획</h3>
				<li><b> 목적</b>  - <b> 환경</b>  - <b> 핵심UI</b>  - <b> 인원</b>  - <b> 검증</b>  - <b> 가이드</b> </li>
		
			</div>
		
		
			<div>
				<h3>UI 프로토타입 고려사항 작성</h3>
				<li><b> 범위확인</b>  - <b> 목표확인</b>  - <b> 자원확인</b>  </li>
		
			</div>
		
		
		
		
			<div>
				<h3>UI 프로토타입 제작단계</h3> 
				<li><b>1. 분석</b> - 요구사항 확정</li>
				<li><b>2. 작성(문서)</b> - 대략적인 종이 ,그림, 핵심기능</li>
				<li><b>3. 사용자 확인</b> - 추가사항 및 수정사항</li>
				<li><b>4. 수정 , 승인</b> - 보안</li>
			</div>
		
		
		
		
		
			<div>
				<h3>UI 설계서 작성</h3>
				<li><b>UI 설계서</b> - 사용자의 요구사항을 바탕으로 설계를 구체화한다</li>
				<li><b>1.UI 설계서 표지작성</b> </li>
				<li><b>2.UI 설계서 개정 이력 작성</b> </li>
				<li><b>3.UI 요구사항 정의서 작성</b> </li>
				<li><b>4.시스템 구조 작성</b> </li>
				<li><b>5.사이트 맵 작성</b> </li>
				<li><b>6.프로세스 정의서 작성</b> </li>
				<li><b>7. 화면 설계</b> </li>
		
			</div>
		</div>
		
	
			



	@elseif ($no==8)

				
		<div id='gisa_engineer'>
			
			<h2>  ★객체 지향  </h2>


			<div>
				<h3> 객체 지향 </h3>
				<img src='/img/System_design/object_oriented1.png' >  
				<img src='/img/System_design/object_oriented2.png' >  
				<img src='/img/System_design/object_oriented3.png' >  
				<img src='/img/System_design/object_oriented4.png' >  
				<img src='/img/System_design/object_oriented5.png' >  
				<img src='/img/System_design/object_oriented6.png' >  
				<img src='/img/System_design/object_oriented7.png' >  
				<img src='/img/System_design/object_oriented8.png' >  
				<img src='/img/System_design/object_oriented9.png' > 
				<h3> 럼바우 - > 객동기 </h3>
				<img src='/img/System_design/object_oriented10.png' >  

				<h3> 문제 </h3>
				<img src='/img/System_design/object_oriented11.png' > 




			</div>


		</div>







		<div id='youtube_engineer'>




			<h2>화면설계 D</h2>


			<div>
				<h3>UI 유용성 평가</h3>
				<li><b>실행차를 줄이기 위한 UI설계 원리 검토</b> <br/>- 사용 의도 파악<br/>- 행위 순서 규정<br/>- 행위의 순서대로 진행</li>
				<li><b>평가차(결과)를 줄이기 위한 UI설계 원리 검토</b> <br/>- 수행한 키 조작의 결과를 사용자가 빠르게 지각하도록 유도<br/>- 키 조작으로 변화된 시스템이 상태를 사용자가 쉽게 인지하도록 유도</li>
			</div>




			<div>
				<h3>UI 상세 설계</h3>
				<li><b>UI 시나리오 문서 작성 원치</b> <br/>- TREE, Flowchart, UI요소 일반규칙으로 정의(인터랙션)</li>
				<li>UI 시나리오 문서 작성을 위한 일반 규칙 - <b>기능</b>,<b>구조</b>,<b>상호작용</b>,<b>예외처리(이후 세부기능 정의)</b></li>
				<li>UI 시나리오 문서의 요건 - <b> 완전성  </b><b> 일관성 </b><b> 이해성 </b><b> 가동성 </b><b> 수정 용이성 </b><b> 추적용이성 </b>- 대체로 긍정적인것들</li>



			</div>





			<div>
				<h3>감성공학</h3>
				<li><b>감성공학의 개념</b> - 인체의 특징과 감정을 제품설계에 최대한 반영시키는 기술 (인강중심 설계)</li>
				<li><b>감성공학 관련 기술</b> <br/>- 생체 측정기술(인간공학,인지공학,인간특성) <br/>- 인간의 오감센서 및 감성 처리기술(사용자 인터페이스 실현기술) <br/>- 감성 디자인 기술(산업디자인) <br/>-  새로운 감성을 창줄하기 위한 기술(가상현실을 통해 인간에게 적합한지 판단)</li>
				<li><b>감성공학 접근 방법</b> <br/>- 감성공학 1류 : 인간의 감성 이미지를 측정하는 방법 <br/>- 감성공학 2류 : 개인이 갖고 있는 이미지를 구체화하는 방법 <br/>- 감성공학 3류 : 인간의 감각을 측정하고, 수학적 모델로 구축하여 활용</li>

			</div>




			<div>
				<h3>HCI / UX</h3>
				<li><b>HCI</b>(사람과 컴퓨터 interface) <br/>- 편리하고 안전한 시스템 개발(최적의 UX가 목표)</li>
				<li><b>UX</b>(사용자의 경험) <br/>- 주관성 : 개인의 의견 <br/>- 정황성 : 주변환경에 영향을 받는다 <br/>- 총제성 : 심리적,감성적 결과</li>

			</div>



		</div>





	@elseif ($no==9)


				
		<div id='gisa_engineer'>
			
			<h2>  소프트웨어 설계 , 아키텍처    </h2>


			<div>
				<h3> 소프트웨어 설계 </h3>
				<img src='/img/System_design/SW_design1.png' >  
				<img src='/img/System_design/SW_design2.png' >  
				<img src='/img/System_design/SW_design3.png' >  
				<img src='/img/System_design/SW_design4.png' >  


				<h3> 아키텍처 구축</h3>

				<img src='/img/System_design/SW_architecture1.png' >  
				<img src='/img/System_design/SW_architecture2.png' > 
				
				<h3> 문제 </h3>
				<img src='/img/System_design/SW_architecture3.png' >  

				<h3> 소프트웨어 아키텍처 4+1 관점 </h3>
				<img src='/img/System_design/SW_architecture4.png' >  
				<img src='/img/System_design/SW_architecture5.png' >  

				<h3> 소프트웨어 아키텍처 </h3>

				<img src='/img/System_design/SW_architecture6.png' >  
				<img src='/img/System_design/SW_architecture7.png' >  
				<img src='/img/System_design/SW_architecture8.png' >  
				<img src='/img/System_design/SW_architecture9.png' >  
				
				<h3>★디자인 패턴</h3>

				<img src='/img/System_design/design_pattern1.png' > 
				<img src='/img/System_design/design_pattern2.png' > 
				<img src='/img/System_design/design_pattern3.png' > 
				<img src='/img/System_design/design_pattern4.png' > 
				<img src='/img/System_design/design_pattern5.png' > 


				<h3>행위 패턴</h3>
				<img src='/img/System_design/behavior_pattern1.png' > 
				<img src='/img/System_design/behavior_pattern2.png' > 
				<img src='/img/System_design/behavior_pattern3.png' > 


			</div>



		</div>







		<div id='youtube_engineer'>

			<h2>02.소프트웨어 설계</h2>


			<div>

				<h3>소프트웨어 아키텍처 - 기본구조, 개발기반</h3>
				<li><b>소프트웨어 아키텍처 역할</b> - 원칙, 지침, 품질유지</li>
				<li><b>모듈화</b> - 그룹별로 나누기(유지관리에 좋음. 많으면 통합비용 상승, 적으면 개발비용 상승) </li>
				<li>
					<b>추상화</b>: 간략화(코끼리의 코),불필요한 부분 생략 
					<br/>- 과정 추상화 : 자세한 수행과정을 정의하지 않고 전반적인 흐름을 파악 
					<br/>- 데이터 추상화 : 데이터의 세부적인 속성,용도 정의X, 데이터의 구조대표만 대체해서 표현 
					<br/>- 제어 추상화 : 이벤트를 발생시키는 정확한 절차를 표현하지않고 대표적으로 표현</li>

				<li><b>단계적 분해</b> - 하향식 설계 방법 (추상화의 반복으로 더 많은 단계의 분해 가능)</li>
				<li><b>정보 은닉</b> - 접근금지, 필요한 정보만 인터페이스를 통해 주고 받음(다른 모듈에 영향을 적게줌)</li>

				<li><b>소프트웨어 아키텍처의 품질 속성</b> 
					<br/>- 시스템 측면 : 성능,보안
					<br/>- 비즈니스 측면 : 비용, 자원
					<br/>- 아키텍처 측면 : 결함
				</li>

				<li>
					<b>소프트웨어 아키텍처 설계 과정</b> 
					<br/>- 설계 목표 설정 : 개발방향 명확하게 설정,우선순위,목표설정 결정
					<br/>- 시스템 타입결정 : 아키텍처의 패턴을 선택 
					<br/>- 아키텍처 패턴 적용 : 시스템의 표준 설계
					<br/>- 서브시스템 구체화 : 상호작용 정의
					<br/>- 검토</li>


				

			</div>




			<div>
				<h3>아키텍처 패턴</h3>

				<li><b>아키텍처 패턴 (규칙)</b> <br/> - 장점 : 시간단축, 고품질, 안정성, 의사소통, 구조 이해 쉬움<br/> - 종류: 레이어 패턴, 클라이언트-서버 패턴, 파이트-필터 패턴, 모델-뷰-컨트롤러 패턴</li>

				<li><b>레이어 패턴</b> - 햄버거모양 / 고전적 / 상.중.하 형태 / 계층존재 / OSI 참조모델</li>
				<li><b>클라이언트 - 서버 패턴</b> - 항시 대기</li>
				<li><b>파이프 - 필터 패턴</b> - 캡슐화 -> 파이프 -> 전송 </li>
				<li><b>모델-뷰-컨트롤러 패턴</b> - MVC </li>
				<li><b>마스터 - 슬레이브 패턴</b> </li>
				<li><b>브로커 패턴</b> </li>
				<li><b>피어-투-피어</b> - P2P</li>
				<li><b>이벤트-버스 패턴</b>  </li>
				<li><b>블랙보드</b> - 음성인식,차량식별 </li>

			</div>

		</div>



	@elseif ($no==10)

				

		<div id='gisa_engineer'>
			
			<h2>  모듈 설계 </h2>


			<div>
				<h3> 모듈 설계 </h3>
				<img src='/img/System_design/module_build1.png' >  
				

				<h3>★ 응집도 </h3>
				<img src='/img/System_design/module_build2.png' >  
				<img src='/img/System_design/module_build3.png' >  
				<img src='/img/System_design/module_build4.png' >  
				

				<h3>★ 결합도 </h3>
				<img src='/img/System_design/module_build5.png' > 
				<img src='/img/System_design/module_build6.png' > 
				<img src='/img/System_design/module_build7.png' > 

				<h3> 구조화 </h3>
				<img src='/img/System_design/module_build8.png' > 

				<h3> 공통모듈 </h3>
				<img src='/img/System_design/module_build9.png' > 


				<h3> 문제 </h3>
				<img src='/img/System_design/module_build10.png' > 
				<img src='/img/System_design/module_build11.png' > 
				<img src='/img/System_design/module_build12.png' > 
				<img src='/img/System_design/module_build13.png' > 
				<img src='/img/System_design/module_build14.png' > 
				<img src='/img/System_design/module_build15.png' > 



				<h3> 협약에 의한 설계 </h3>
				<img src='/img/System_design/design_convention1.png' > 


				<h3> 코드 설계 </h3>
				<img src='/img/System_design/code_build1.png' > 
				<img src='/img/System_design/code_build2.png' > 
				<img src='/img/System_design/code_build3.png' > 

				<h3> 문제 </h3>
				<img src='/img/System_design/code_build4.png' > 
			</div>


		</div>







		<div id='youtube_engineer'>





			<h2>03.애플리케이션 설계</h2>


			<div>
				<h3>객체 지향 </h3>
				<li><b>객체</b> - 데이터와 그 데이터에 관련되는 동작을 모두 포함한 개념</li>
				<li><b>객체 지향</b> - 실 시계의 개체(entity)를 속성과 메소드가 결합된 형태의 객체로 표현하는 개념</li>
				<li><b>객체 지향의 구성 요소</b> <br/> - 객체 : 데이터 + 연산. 메소드:객체의 구체적인 연산을 정의한 것  <br/> -  클래스 : 유사한 객체들을 모아 공통된 특성을 표현한 것. 클래스로부터 생성된 새로운 객체를 인스턴스라고 한다.  <br/> -  메시지 : 객체들 간의 상호작용이 일어나기 위해 메시지가 필요하며 메시지를 통하여 객체의 동작이 수행된다</li>
			</div>




			<div>
				<h3>객체 지향 기법</h3>
				<li><b>캡슐화(Encapsulation)</b> - 정보은닉</li>
				<li><b>상속(Ingeritance)</b> - 복사를하여 확장</li>
				<li><b>추상화(Abstraction)</b> - 단순화</li>
				<li><b>다형성(Polymorphism)</b> - 상속을받아 여러기능이 있는 객체를 복사하여 필요한 권한만 줄 수 있음</li>
			</div>



			<div>
				<h3>모듈화</h3>
				<li>모듈이란 소프트웨어를 각 기능별로 분할하는 것으로, 소프트웨어 구조를 이루는 기본 단위</li>
				<li>독립성이 <b>높아야 하며</b>, 모듈의 독립성은 결합도(모듈사이)와 응집도(모듈내부)에 의해 측정된다</li>

			</div>

			<div>
				<h3><b>결합도</b></h3>
				<li>한 모듈과 다른 모듈간의 상호의존도를 측정한느 것으로 독립적인 모듈이 되기위해서는 결합도가 <b>약해야한다</b>( 내공이강하면 외제 차를 탈수 있다스뎅 )</li>
				<img src='/img/engineer10.PNG' style='min-width:400px;width:40%'>

			</div>


			<div>
				<h3><b>응집도</b></h3>
				<li>한 보듈과 내에 있는 구성요소들이 서로 관련되어 있는 정도를 의미하며, 관련성을 측정 하는것으로 응집도가 <b>높도록</b> 설계되도록 해야한다</li>
				<img src='/img/engineer11.PNG' style='min-width:400px;width:40%'>

			</div>







			<div>
				<h3>공통모듈</h3>
				<li>전체 프로그램의 기능 중 공통적으로 사용할 수 있는 모듈</li>
				<li>공통 모듈 명세 작성 원칙 <br/> <b>- 정확성(필요성) <br/> - 명확성(중의적 해석X) <br/> - 완전성(필요한 모든것) <br/> - 일관성(상호충돌X) <br/> - 추적성(출처, 관계 파악)</b></li>


			</div>


		</div>




	@elseif ($no==11)

					
		<div id='gisa_engineer'>
			
			<h2>  인터페이스 (연계 , 매개체)  </h2>


			<div>
				<h3> 사용자 인터페이스 설계 </h3>
				<img src='/img/System_design/user_interface1.png' > 
				<h3> UI 설계 원칙  ★ 필수암기 </h3>
				<img src='/img/System_design/user_interface2.png' >  
				<h3> UI 설계 지침</h3>
				<img src='/img/System_design/user_interface3.png' >  
				<img src='/img/System_design/user_interface4.png' >  

				<h3> UI 표준 및 지침</h3>
				<img src='/img/System_design/user_interface5.png' >  
				
				<h3> UI 요구사항 확인</h3>
				<img src='/img/System_design/user_interface6.png' >  
				<img src='/img/System_design/user_interface7.png' >  
				<img src='/img/System_design/user_interface8.png' >  


				<h3> UI 설계 도구</h3>
				<img src='/img/System_design/user_interface9.png' > 
				<img src='/img/System_design/user_interface10.png' > 
				<img src='/img/System_design/user_interface11.png' > 


				<h3> UI프로토타입 작성 시 고려사항 </h3>
				<img src='/img/System_design/user_interface12.png' > 
				<img src='/img/System_design/user_interface13.png' > 


				<h3> UI프로토타입 제작 단계 </h3>
				<img src='/img/System_design/user_interface14.png' > 
				<img src='/img/System_design/user_interface16.png' > 

				<h3> 문제</h3>
				<img src='/img/System_design/user_interface15.png' > 


			</div>


		</div>







		<div id='youtube_engineer'>





			<h2>03.애플리케이션 설계</h2>


			<div>
				<h3> 코드 </h3>
				<li><b>주요 기능</b> - 식별 , 분류, 배열</li>
				<li><b>코드의 종류</b> <br/> - 순차코드(발생순서)<br/> - 블록코드(공통성 묶음) <br/> - 10진코드(도서분류코드) <br/> - 그룹 분류 코드(대/중/소 분류) <br/> - 연상코드 <br/> - 표의 숫자 코드(길이,넓이,부피,지름) / 유효숫자코드 <br/> - 합성 코드</li>

			</div>




			<div>
				<h3> 디자인 패턴 </h3>
				<li><b>생성패턴 5개</b>  </li>
				<li><b>구조패턴 7개</b>  </li>
				<li><b>행위패턴 11개</b>  </li>

			</div>





			<div>
				<h3> 생성 패턴: 캡슐화, 유연성</h3>
				<li><b>추상팩토리</b> - 하위 클래스의 의존하지 X / 연관,의존 그룹 -> 추상적 </li>
				<li><b>빌더</b> 조합해서 객체를 생성 </li>
				<li><b>팩토리 메소드</b> - 객체 생성 -> 서브클래스에서 처리 -> 캡슐화 / 상위:인터페이스 담당 / 서브클래스:생성 담당</li>
				<li><b>프로토타입</b> - 원본객체를 복제하는 방법으로 생성, 비용저렴 </li>
				<li><b>싱글톤</b> - 하나의 객체를 생성하면 생성된 객체를 어디서든 참조할 수 있다 / 여러 프로세스가 동시 참초X </li>

			</div>



			<div>
				<h3> 구조 패턴 - 복잡한 구조의 시스템 개발에 필요</h3>
				<li><b>★어댑터</b> - 호환성이 없는 클래스를 다른 클래스가 이용할 수 있도록 </li>
				<li><b>브리지</b> - 기능, 구현을 별도의 클래스에서 구현</li>
				<li><b>컴포지트</b> - 복합객체와 단일 객체를 구분없이 다루고자 할 때</li>
				<li><b>데코레이터</b> - 객체간의 결합을 하여 능동적인 기능들을 확장 할 수 있는 패턴 / 부가적인 기능 추가하기 위해 객체를 합침</li>
				<li><b>퍼씨드(Facade)</b> - 복잡한 서브클래스를 피해 상위에 인터페이스를 구성(서브클래스 간편하게사용)</li>
				<li><b>★플라이웨이트</b> - 인스턴스를 계속만들지않고 가능한 공유(메모리절약)</li>
				<li><b>프록시</b> - 접근이 어려운 객체와 연결하려는 객체를 도와주는 역할</li>

			</div>



			<div>
				<h3> 행위 패턴 - 상호작용, 책임 분배 방법</h3>
				<li><b>책임 연쇄</b>  </li>
				<li><b>커맨드</b> - 요청 -> 캡슐화 -> 로그에작성</li>
				<li><b>인터프리터</b> - 언어 + 문법 표현  정의(SQL) </li>
				<li><b>★반복자(Iterator)</b> - 접근자주 , 동일한 인터페이스 사용 (순차적 접근 가능)</li>
				<li><b>중재자(Mediator)</b> - 복잡한 과정 -> 캡슐화 -> 객체로 정의</li>
				<li><b>메멘토</b> - 되돌리기(컨트롤+z)</li>
				<li><b>옵서버</b> - 어떤 객체상태가 변화되었을 때 상속 되어있는 객체들에게 전달(카톡 읽음 여부)</li>
				<li><b>상태</b> - 동일한 동작을 다르게 처리 할 때 사용(카톡 알람 형태)</li>
				<li><b>전략</b> - 개별적 캡슐화 해서 상호 교환</li>
				<li><b>템플릿 메소드</b> - 상위:골격 정의 / 하위: 세부 처리 구체화</li>
				<li><b>방문자</b> - 처리기능을 분리하여 별도의 클래스에서 구성</li>

			</div>



		</div>





	@elseif ($no==12)


				
		<div id='gisa_engineer'>
			
			<h2>  시스템 인터페이스  </h2>


			<div>
				<h3> 시스템 인터페이스  </h3>
				<img src='/img/System_design/system_interface1.png' >  

				<h3> ★용어 알아두기 / 연계 시스템 솔루션 </h3>
				<img src='/img/System_design/system_interface2.png' >  
				<img src='/img/System_design/system_interface3.png' >  

				<h3> 인터페이스 시스템 </h3>
				<img src='/img/System_design/system_interface4.png' >  
				<img src='/img/System_design/system_interface5.png' >  
				

				<h3> 인터페이스 상세설계 </h3>
				<img src='/img/System_design/system_interface6.png' >  
				<img src='/img/System_design/system_interface7.png' >  
				<img src='/img/System_design/system_interface8.png' >  
				<img src='/img/System_design/system_interface9.png' >  
				<img src='/img/System_design/system_interface10.png' >  
				<img src='/img/System_design/system_interface11.png' >  
				<img src='/img/System_design/system_interface12.png' >  
				<img src='/img/System_design/system_interface13.png' >  
				<img src='/img/System_design/system_interface14.png' >  
				<img src='/img/System_design/system_interface15.png' >  
				<img src='/img/System_design/system_interface16.png' >  
				<img src='/img/System_design/system_interface17.png' >  
				<img src='/img/System_design/system_interface18.png' >  

				<h3> SOA (Service Oriented Architecture ,서비스 지향 아키텍처)</h3>
				<img src='/img/System_design/SOA1.png' >  

				<h3> SOA 계층 / 정의정도민 기억 </h3>
				<img src='/img/System_design/SOA2.png' >  


				<h3> 미들웨어 / 용어중심 암기</h3>
				<img src='/img/System_design/middleware1.png' >  
				<img src='/img/System_design/middleware2.png' >  
				<img src='/img/System_design/middleware3.png' >  
				<img src='/img/System_design/middleware4.png' >  



			</div>





		</div>







		<div id='youtube_engineer'>



			<h2>04. 인터페이스 설계</h2>


			<div>
				<h3> 시스템 인터페이스 요구사항 분석 </h3>
				<li>시스템 인터페이스 요구사항 구성 <br/>- <b>인터페이스 이름, 연계 대상시스템 , 연계 범위 및 내용, 연계 방식, 송신 데이터, 인터페이스 주기, 기타 고려사항</b> </li>


				<li><b>시스템 인터페이스 요구사항 분류 </b>- 기능적,비기능적 </li>

				<li><b>시스템 인터페이스 요구사항 분석절차 </b> </li>



			</div>



			<div>
				<h3> 시스템 인터페이스 요구사항 검증 </h3>

				<li><b>요구사항 검증 </b> - 요구사항 검토 계획 수립 -> 검토 및 오류사항 수정 -> 베이스라인 결정</li>

				<li><b>요구사항 검토 계획 수립 </b> <br/> - 검토 기준 및 방법  <br/> - 참여자 <br/> - 체크리스트(완전성,일관성,명확성) <br/> - 관련 자료 <br/> - 일정</li>

				<li><b>요구사항 검증 방법</b> - 동료 검토, 워크스루(사전검토 후 회의), 익스펠션(검토 전문가), 프로토 타입 제작, 테스트 설계, CASE도구 활용</li>

				<li><b>인터페이스 요구사항 검증의 주요항목</b> - 완전성(누락여부),일관성(충돌여부),명확성(이해여부),기능성,검증가능성,추적가능성,변경용이성</li>


			</div>




			<div>
				<h3> 인터페이스 시스템 식별 </h3>
				<li><b>개발 시스템 식별</b> - 시스템 식별 정의  </li>
				<li><b>내외부 시스템 식별</b> - 시스템과 연결할 내,외부 시스템의 상세식별 정보 정의 </li>
				<li><b>내외부 시스템 환경 및 관리 주체 식별</b> - IP,URL,PORT / 관리 담당자 확인 </li>
				<li><b>내외부 시스템 네트워크 연걸 정보 식별</b> - 로그인,DB정보</li>
				<li><b>인터페이스 식별</b> - 내부,외부 인터페이스 식별하여 목록 작성</li>
				<li><b>인터페이스 시스템 식별</b> - 송신시스템, 수신시스템 구분하여 작성</li>
			</div>







			<div>
				<h3> 인터페이스 방법 명세화 </h3>
				<li><b>인터페이스 방법 명세화의 개념</b> - 문서화</li>
				<li>시스템 연계기술 <br/>- <b>DB link</b> <br/>- <b> API(DB를 읽어오도록 만들어 둔 인터페이스 시스템)</b> <br/>- <b>연계 솔루션(EAI서버와 각 시스템에 설치 된 클라이언트를 통해 데이터 통신)</b> <br/>- <b>Socket(포트할당,클라이언트와 연결)</b> <br/>- <b>Web Service(Soap,WSDL,UDDI)</b> </li>

				


			</div>




			<div>
				<h3> 인터페이스 통신 유형</b> - 단방향, 동기방식, 비동기</h3>
				<li><b>인터페이스 처리 유형 3가지</b> - 실시간 처리, ★지연 처리, 배치(대량)</li>

				<li><b>인터페이스 발생주기</b> - 수시로, 매일 , 주1회 </li>

				<li><b>송수신 방법 명세화</b> </li>
				<li><b>송수신 데이터 명세화</b> </li>
				<li><b>오류 식별 및 처리 방안 명세화</b> - </li>
			</div>








			<div>
				<h3> 미들웨어 </h3>
				<li><b>미들웨어</b> <br/> - middle + software : 운영체제가 재공하는 서비스 외에 추가적인 서비스 제공</li>


				<li><b>DB,RPC </b> - 원격 프로시저 호출 </li>
				<li><b>MOM(메세지 지향 미들웨어 / 클라우드드 라이버), TP-Monitor(항공기,철도 등 온라인 예약업무) </b> 비동기형 메세지  </li>
				<li><b>ORB(객체 요청 브로커),WAS(앱.애플리케이션 서버)</b>  </li>

				<li><b>미들웨어 솔루션 식별 </b> </li>
				<li><b>미들웨어 솔루션 명세 및 검토</b> </li>

			</div>

		</div>



	@elseif ($no==13)

				
		<div id='gisa_engineer'>
			
			<h2>  인터페이스 설계서 , 구현  </h2>


			<div>
				<h3> 인터페이스 설계서 </h3>
				<img src='/img/System_design/interface_design1.png' >  


				<h3> XML </h3>
				<img src='/img/System_design/XML1.png' >  
				<img src='/img/System_design/XML2.png' >  


				
				<h3> 인터페이스 예외처리 </h3>
				<img src='/img/System_design/interface_design2.png' >
				<img src='/img/System_design/interface_design3.png' >


				<h3> 인터페이스 보안 ★ </h3>
				<img src='/img/System_design/interface_secure1.png' >
				<img src='/img/System_design/interface_secure2.png' >
				<img src='/img/System_design/interface_secure3.png' >
				<img src='/img/System_design/interface_secure4.png' >


				<h3> 인터페이스 구현 검증 도구 ★</h3>
				<img src='/img/System_design/interface_tool1.png' >






			</div>


		</div>







	@endif









	

</div>







<div id='youtube_engineer'>
	


	<div>
		<h3>1. 현행 시스템 분석 - 지식</h3>
		<ul>
			<li>산업분야</li>
			<li>플랫폼 기능, 플랫폼 성능</li>
			<li>프로젝트 환경</li>
			<li>가상화</li>
			<li>클라우드</li>
		
		</ul>
	</div>	


	<div>
		<h3>2. 현행 시스템 분석 - 기술</h3>
		<ul>
			<li>환경분석</li>
			<li>운영체제 구성, 관리</li>
			<li>저장 장치 구성, 관리</li>
			<li>네트워크 관리</li>
			<li>DMBS 기술</li>
			<li>가상화 기술</li>
		
		</ul>
	</div>	



	<div>
		<h3>3. 플랫폼 ★</h3>
		<ul>
			<li>플랫폼의 개념 - 소프트웨어를 구동시키는데 쓰이는 하드웨어 , 소프트웨어의 결합</li>
			<li>플랫폼의 기능 - 소프트웨어 개발 및 운영 비용을 감소</li>
			<li>플랫폼의 기능 특성 확인 방법(성능테스트와다름) - 기능테스트, 사용자 인터뷰, 문서점검</li>
			<li>현행 시스템 분석하기에서 플랫폼의 성능 특성을 알아야 하는이유  <br/> -사용자가 사용하기에 느린지 빠른지 파악 <br/>  -현재 시스템의 플랫폼 성능</li>
			<li>플랫폼 성능 특성 확인 방법(기능테스트와다름) <br/>-성능 테스트 <br/>- 문서 점검 <br/>- 사용자 인터뷰</li>
		</ul>
	</div>	


	<div>
		<h3>4. 현행 시스템 파악</h3>
		<ul>
			<li>현행 시스템 파악 절차 <br/>- 1단계: 시스템 구성, 기능, 인터페이스 파악 <br/>- 2단계: 아기텍처 구성, 소프트웨어 구성 파악<br/>- 3단계: 하드웨어 구성, 네트워크 구성 파악</li>

		
		</ul>
	</div>	



	<div>
		<h3>5. 운영체제 분석</h3>
		<ul>
			<li><b>운영체제(OS : Operation System)의 개념</b> - 하드웨어와 소프트웨어 자원을 관리</li>
			<li><b>현재 시스템의 운영체제의 분석</b> - 현재 운영체제 종류, 버전 등</li>
			<li><b>운영체제의 종류 및 특징</b> - 유닉스, 리눅스, 윈도우, 안드로이드, IOS</li>

		
		</ul>
	</div>	



	<div>
		<h3>6. 네트워크 분석</h3>
		<ul>
			<li><b>네트워크의 개념</b> <br/> -디지털 전기통신망 <br/> -분산되어있는 컴퓨터를 통신망으로 연결<br/>-<b>OSI 7 Layer</b>의 정의 (물리, 데이터링크, 네트워크, 전송, 세션, 표현, 응용 계층)</li>
			<li><b>현재 시스템의 네트워크의 분석</b> - 네트워크 구조를 분석, 사내 인터넷 데이터 센터 분석</li>
			<li><b>현재 시스템의 네트워크의 구성도를 파악한다</b> - 서버의 위치, 서버 간의 네트워크 연결 방식</li>

		
		</ul>
	</div>	




	<div>
		<h3>7. DB 분석</h3>
		<ul>
			<li><b>DB의 개념</b> - DB 생성,조회,변경 등 관리</li>
			<li><b>DB의 기능</b> - 중복통제, 공유, 접근 통제, 인터페이스 제공, 관련성 표현, 무결성 보장</li>
			<li>DBMS 분석</li>
			<li><b>논리/물리 테이블의 구조 파악</b> - 정규화 정도, 조인의 난이도 파악</li>

		
		</ul>
	</div>	





	<div>
		<h3>8. 비즈니스 융합분석</h3>
		<ul>
			<li><b>비즈니스 융합의 개념</b> <br/>- 비즈니스 : 영리를 목적으로 행하는 모든 활동 <br/>비즈니스 모델 : 요소들의 구성체 <br/> 비즈니스 융합 : 비즈니스 모델의 적용범위 확대</li>

			<li><b>비즈니스 융합 유형</b> - 제품 융합, 서비스융합, 제품과 IT융합 ,서비스와, IT융합, 제품의 서비스화, 서비스의 제품화, 제품과 서비스 융합</li>
			<li><b>비즈니스 융합 분석</b> - 고객분석, 제품 및 서비스 분석, 사업구조 분석</li>

		
		</ul>
	</div>	




</div>




