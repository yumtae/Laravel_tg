@include('user._layouts.common_css');


@if ($no==1)


<div>


	<h3>OSI 7 Layer  - 물데네 전세 표응</h3> 
	<li><b>응용계층</b> - FTP / SNMP / Telenet</li>
	<li><b>표현</b> - 데이터 전환 / 암호화 / 압축 </li>
	<li><b>세션</b> - 대화제어 / 동기화</li>
	<li><b>전송</b> - TCP,UDP</li>
	<li><b>네트워크</b> - 호스트들의 주소체계 설정 / 라우팅 / 경로선텍 (IP,ARP,ICMP)</li>
	<li><b>데이터링크</b> - 물리적 링크 간의 <b>신뢰성</b>있는 전송을 제공 (프레임) / 오류,흐름제어</li>
	<li><b>물리</b> - (비트)</li>





</div>

<img src="/img/anaylysis_test1.png" style="min-width:600px;width:60%">


<div>


	<h3>TCP / IP 4계층</h3> 
	<li><b>응용계층</b> - TCP/UDP 기반의 응용프로그램 구현 / FTP ,HTTP , SSH</li>
	<li><b>전송계층</b> - 신뢰성있는 데이텅 전송 / TCP,UDP</li>
	<li><b>인터넷계층</b> - 통신 노드 간의 IP패킷을 전송하는 기능과 라우팅 기능을 담당 / IP,ARP,RARP</li>
	<li><b>네트워크엑세스</b> - 물리적인 주소로 MAC을 사용 / LAN,패킷망</li>






</div>



<div>

	<h3>TCP / IP 4계층</h3>
	<li>개념적 설계 - 트랙잭션 모델링 <br/></li>
	<li>논리적 설계 - 트랙잭션 인터페이스 설계, 스키마설계 <br/></li>
	<li>물리적 설계 - 트랙잭션 세부사항설계(처리량,인덱스 등등) <br/></li>

</div>







<div>


	<h3>결합도 (Coupling) - 모듈간의 상호 의존도 = <b>약해야한다</b>( 내공이강하면 외제 차를 탈수 있다스뎅 )</h3> 
	<li><b>내용 결합도</b> - 강함</li>
	<li><b>공통 결합도</b></li>
	<li><b>외부 결합도</b></li>
	<li><b>제어 결합도</b></li>
	<li><b>스탬프 결합도</b></li>
	<li><b>자료 결합도</b> - 약함</li>



</div>



<div>


	<h3>응집도 (cohesion) - 한 모듈내에 있는 구성요소들이 관련있는정도 <b>강해야좋다</b> </h3> 
	<li><b>기능 응집도</b> - 강함</li>
	<li><b>순차적 응집도</b> - </li>
	<li><b>통신적(교환적) 응집도</b>  </li>
	<li><b>절차적 응집도</b>  </li>
	<li><b>시간적 응집도</b>  </li>
	<li><b>논리적 응집도</b>  </li>
	<li><b>우연적 응집도</b> - 약함</li>
	



</div>





<div>


	<h3>교착상태 해결방법</h3> 
	<li><b>예방(Prevention)</b> </li>
	<li><b>회피(Avoidance)</b> - 은행 알고리즘</li>
	<li><b>발견(Detection)</b> </li>
	<li><b>회복(Recovery)</b> </li>

	



</div>





<div>


	<h3>UML (객체지향모델링언어) - OMG에서 정의</h3> 
	<li> <img src="/img/engineer4.png" style="min-width:600px;width:60%"></li>

	

</div>






<div>


	<h3>교착상태 필수 조건 </h3> 
	<li><b>점유와 대기</b> </li>
	<li><b>환형대기</b> </li>
	<li><b>★비선점</b> </li>
	<li><b>상호배제</b> </li>

	

</div>





<div>
	<h3>UI 설계 도구 </h3>
	<li><b >와이어프레임</b> - 기획초기, 개략적 ,뼈대 / 일러,포토샵,툴,손그림,키노트 등</li>
	<li><b>목업</b> - 실제구현이 아닌 정적인 모형(명함예시,핸드폰 판매점)</li>
	<li><b>스토리보드</b> - 와이어프레임에대한 설명 , 페이지간의 이동흐름 정적으로 추가 / 개발자가 최종적으로 참고하는 지침서</li>
	<li><b>프로토타입</b> - 동적인 형태 , 실제로 구현, 완벽X, 모형물 / HTML ,css </li>
	<li><b>유스케이스</b> - 사용자 측면에서 다이어그램으로 만든것</li>
</div>



<div>
	<h3>선형</h3>
	<li><b >종류 - </b> 큐,스택,배열, 리스트(연속리스트,연결리스트) </li>
	<li><b >용어암기 - </b> 오버플로우,언더플로우, 탑,바탐,프론트,rear , 선입선출,후입선출 </li>
	

</div>

<div>
	<h3>비선형 </h3>
	<li><b >종류</b> 트리, 그래프 </li>
	<li><b >용어 암기</b> 차수(degree), 부모,형제,자식 노드 , 루트(맨위),터미널(맨아래) </li>

</div>




<div>
	<img src="/img/anaylysis_test2.png" style="width:60%">
</div>








<div>
	<h3> 정규화(Normalization) </h3>
	<li><img src="/database/img/Normalization.jpg" style="width:80%"></li>
	<li><b>제1정규형(1NF) </b> - 릴레이션에 속한 모든 도메인이 원자값(Atomic Value)</li>
	
	<li><b >제2정규형(2NF) </b> - 키가 아닌 모든 속성들이 기본키에 완전 함수 종속</li>
	<li><b >제3정규형(3NF) </b> - 키가 아닌 모든 속성들이 기본키에 이행적으로 함수종속되지 않는 릴레이션</li>
	<li><b>무손실 분해/조인(Lossless Decomposition) </b> - 테이블을 분해후 조인했을때 원래값으로 나와야함 </li>
	<li><b>BCNF(Boyce-Codd NF) </b> - 릴레이션의 모든 결정자가 후보키인 릴레이션 (강한 제3정규형(3.5NF) </li>
	<li><b>제4정규형(4NF) </b> - 릴레이션 R에서 다치종속 A-&gt;-&gt; B가 성립하는경우 다치종속(Multivalued dependencies)의제거</li>
	<li><b>제5정규형(5NF) </b> - 조인종속성 이용(위조튜플이생겨서는안됨)</li>

</div>







<div>
	<h3>페이지 교체 알고리즘 및 가상기억장치 관리</h3>
	<div><img src="/img/System_management/System_management1.png"></div>
	<div><img src="/img/System_management/System_management1-2.png"></div>
	<div><img src="/img/System_management/System_management1-3.png"></div>
	<div><img src="/img/System_management/System_management1-4.png"></div>

</div>




<div>
	<h3>putnam 모형 기초로한 자동화 추정도구</h3>
	훈남(Putnam)이 노력(노력분포도)해서 슬림(SLIM)해졌네

</div>



<div>
	<h3>★ 단어 암기</h3>
	
	<div>객체지향원칙(SOLID) / SRP - single / OCP - open / LSP - liskov 상위는하위 대체가능 / ISP - interface분리 / DIP - Dependency 의존역전</div>
	<div>럼바우-객동기 / 자콥슨-use case사용 / 부치 -DFD,실시간처리, 객체분리, 객체모델링기술 / 코드,요돈-ER다이어그램</div>
	<div>P.chen - ER모델</div>
	<div> 코드의3대기능(배분식)</div>
	<div> SCM (SF Configurarion Maganement)형상관리 - 변경사항버전관리</div>
	<div> SCM 절차 - 식별.제어.보고.감사(식재 를 보고 감사 하게되었다.)</div>
	<div> 브룩스법칙 : 새로운인력이오면 적응기간떄문에 빠른시간내 프로젝트 완성x</div>
	<div> 파레토법칙 : 오류80%는 전체의 20%에서나온다</div>
	<div> 스토리지 장치(다나와-크기순) - DAS,NAS,SAS</div>
	<div> 전기, 가스, 수도 등의 원격 검침, 무선 프로토콜 -> Wm-Bus </div>
	<div> 하나의 중앙 노드 -> 스타형(Star connection)</div>
	<div> 실행할 때마다 데이터의 주소가 바뀌게 -> ASLR(Address space layout randomization)</div>
	<div> 패킷 제어 로직을 악용 -> TearDrop 공격</div>
	<div> 극소형 칩에 상품정보를 저장, 바코드를 대체 -> RFID(라디오주파수~~) </div>
	<div> LRU(Least Recently Used): 최근에 가장 오랫동안 사용하지 않은 페이지를 교체하는 기법</div>
	<div> NRU(Not used) - 최근 사용하지 않은</div>
	<div> Overhead의 큰 요인 중 하나 -> 문맥교환(Context switching)</div>
	<div>CPU의 이용률이 급격히 떨어지면서 -> 스래싱(Thrashing) </div>
	<div> 다바뀌거나 아니거나 -> 원자성(Atomicity) / 병행실행시 끼어들기X -> 독립성(Isolation)</div>
	<div> 유형, 무형의 정보대상 -> 개체(Entity)</div>
	<div> 추출, 변환, 적재 -> ETL</div>
	<div> 비절차적 언어 -> 관계 해석 -> 무엇 -> 결과중심</div>
	<div> 콘텐츠 제공자, 콘텐츠 분배자, 콘텐츠 소비자, 클리어링 하우스 -> DRM(저작권관리)</div>
	<div> 빈 공간을 미리 예비해 둔다. -> 동적 인덱스(VSAM)</div>
	<div> 포화(Perfect) 이진 트리 전체 노드 개수: 2 -1</div>
	<div> 네 개의 범주(도입, 상세, 구축, 이행) -> UP(Unified Process)</div>
	<div> 시스템의 논리적인 구조/행위 -> 논리 뷰(Logical View)</div>
	<div> 인터페이스 역할 -> Facade(퍼사드)</div>
	<div> 염탐, 가로채는 -> 스누핑 </div>
	<div> 소스 프로그램과 기술 정보 등을 제3의 기관에 보관 -> 소프트 에스크로 </div>
	<div> 실용화되지 않았거나 실제 존재하지 않지만 -> 베이퍼웨어 </div>
	<div> 하드웨어를 완전히 가상화 -> 전가상화</div>
	<div> 파트너 협력 -> PRM </div>
	<div>암호화 통신을 보장 -> Stacheldraht(슈타첼드라트)</div>
	<div>출력 자료를 그 다음 활동의 입력 자료로 사용 -> 순차적(Sequential) 응집도</div>
	<div>암호화, 데이터압축, 코드변환 -> 표현계층</div>
	<div>Groovy, DSL -> Gradle</div>
	<div>필요한 부분만 교체 -> 오버레이(Overlay)</div>
	<div>McCabe의 순환 복잡도 - 복잡도(V(G)) = 영역수(폐구간) + 1 </div>
	<div>변경을 제어 -> 무결성(Integrity)</div>
	<div>관련 모델들을 통합하기 위한 모델 - ISO 25000</div>
	<div>어떻게 구조화 -> 구현 관점(Implementation View)</div>
	<div>ISP (인터페이스 분리원칙) -> 자신이사용하지않는 메서드에 의존관계 X </div>
	<div>유출을 차단 -> DLP(Data Loss Prevention) </div>
	<div>고객의 편의, 컴퓨터 자동화 시스템 -> 키오스크(Kiosk)</div>
	<div>입력 시에 입력 문자를 점검 -> 모드체크</div>
	<div>지능형 개인비사 -> IPA(Intelligent Personal Assistant)</div>
	<div>링크 상태 -> OSPF(Open Shortest Path First)</div>
	<div>로컬 저장소와 원격 저장소로 구성  -> 분산저장 </div>
	<div>트랜잭션을 처리, 감시하는 미들웨어, 항공,철도  ->  TP-모니터</div>
	<div>같은 동작을 하지만 다른 성질을 가질 수 있다 -> 다형성 </div>
	<div>데이터흐름 다이어그램(DFD) -> 기능 모델링</div>
	<div>객체,가장 중요하게 선행 -> 객체 모델링</div>
	<div>상태, 제어흐름, 상호적용, 동작 순서, -> 동적 모델링</div>
	<div>사용자와 시스템 또는 시스템 간 -> 세션 관리</div>
	<div>부정루틴 삽입 -> Trap Door</div>
	<div>사용자가 주어진 역할 -> RBAC(role-based access control)</div>
	<div>통신망 접속을 적절히 조절 -> NAC(Network Access Control)</div>
	<div>XOR -> 접지(Folding) 함수</div>
	<div>폴딩법 - 해싱함수  중 레코드 키를 여러부분으로 나누고 나눈 부분의 각 숫자를 더하거나 XOR한 값을 홈 주소로 사용</div>
	<div>시험용 모듈 -> 스텁(Stub)</div>
	<div>개별 조건식이 '참'과 '거짓'의 모든 값을 갖게 되는 경우 -> 조건 커버리지(Condition Coverage)</div>
	<div>모든 분기문(조건문)이 적어도 한번이상 (T,F)가 나오게 -> 분기 커버리지(Decision)</div>
	<div>모든 조건문이 적어도 한번 이상 수행 - 결정 커버리지</div>
	<div>모든 구문이 한번 이상 -> 구문 커버리지 </div>
	<div>접근통제 - DAC 사용자신원 / MAC 보안레벨 / RBAC 역할기반(직책부여)</div>
	<div>반입(Fetch) - 언제 / 배치(Placement) - 어디 / 교체(Replace) - 어느</div>
	<div>클라우드컴퓨팅  - Saas(네이버)웹 / IAAS(넷플릭스)스토리지,가상 서버, 가상 PC  / PAAS(개발환경)플랫폼 </div>
	

</div>

@elseif ($no==2)
<div id='gisa_engineer'>
	
	<h2>  C언어 특강  </h2>


	<div>

		<img src='/img/analysis_test/C_lang1.png' >  
		<img src='/img/analysis_test/C_lang2.png' >  
		<img src='/img/analysis_test/C_lang3.png' >  
		<img src='/img/analysis_test/C_lang4.png' >  
		<img src='/img/analysis_test/C_lang5.png' >  
		<img src='/img/analysis_test/C_lang6.png' >  
		<img src='/img/analysis_test/C_lang7.png' >  

	</div>


</div>



@elseif ($no==3)
	
<div id='gisa_engineer'>
	
	<h2> JAVA / PYTHON 특강  </h2>


	<div>
		<h3> JAVA  </h3>
		<img src='/img/analysis_test/JAVA_lang1.png' >  
		<img src='/img/analysis_test/JAVA_lang2.png' >  



		<h3> PYTHON  </h3>

		<img src='/img/analysis_test/Python_lang1.png' >  
		<img src='/img/analysis_test/Python_lang2.png' >  
		<img src='/img/analysis_test/Python_lang3.png' >  
		<img src='/img/analysis_test/Python_lang4.png' >  
		<img src='/img/analysis_test/Python_lang5.png' >  



	</div>


</div>


 


@elseif ($no==4)

	
<h2>프로그래밍 언어 활용</h2>



<div>
	 <img src='/img/analysis_test/analysis_test4-1.png' > 
	 <img src='/img/analysis_test/analysis_test4-2.png' > 
	 <img src='/img/analysis_test/analysis_test4-3.png' > 
	 <img src='/img/analysis_test/analysis_test4-4.png' > 
	 <img src='/img/analysis_test/analysis_test4-5.png' > 
	 <img src='/img/analysis_test/analysis_test4-6.png' > 
	 <img src='/img/analysis_test/analysis_test4-7.png' > 

</div>



@endif








