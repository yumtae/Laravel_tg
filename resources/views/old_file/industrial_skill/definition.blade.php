@include('user._layouts.common_css');


@if ($no==1)


<h2>01.데이터 모델</h2>


<div>
	<h3> </h3>
	<li><b></b> - </li>
</div>


<div>
	<h3>1. 데이터베이스의 4가지 정의</h3>
	<ul>
		<li><b>통합데이터 (Integrated Data)</b> - 중복을 최소화시켜 통합된 데이터</li>
		<li><b>저장데이터 (Stored Data)</b> - 컴퓨터에 저장된 데이터</li>
		<li><b>운영데이터 (Operational Data)</b> - 운영에 필요한 데이터</li>
		<li><b>공용 데이터 (Shared Data)</b> - 여러사람들이 동시에 사용할 수 있는 데이터</li>
	
	</ul>
</div>	

<div>
	<h3>2. 데이터베이스의 특성</h3>
	<ul>
		<li><b>실시간 접근성 (Real-time Accessibility)</b> - 실시간으로 접근이가능해야함</li>
		<li><b>계속적인 변화 (Continuous Evolution)</b> - 계속적으로 수정되고 변경되는 데이터(운영데이터)</li>
		<li><b>동시 공용 (Concurrent Sharing)</b> - 여러사람들이 동시에 (공용데이터)</li>
		<li><b>내용에 의한 참조 (Contents Reference)</b> - 관련된 정보,내용을 찾아서 보여줌 </li>
	</ul>
</div>	

<div>
	<h3>3. 데이터베이스의 관련 시스템(DBMS)</h3>
	<li><b> - 데이터베이스를 관리하는 프로그램</b></li>
</div>	

<div>
	<h3>4. DBMS 특징/특성</h3>
	<li><b>중복의 최소화</b></li>
	<li><b>데이터 공동이용(공유성)</b></li>
	<li><b>데이터 일관성 유지</b> </li>
	<li><b>데이터 무결성 유지(정합성,정확성)</b> </li>
	<li><b>데이터 보안 유지</b> </li>
</div>


<div>
	<h3>5. 데이터베이스 사용자</h3>
	<li><b>DBA (Database Administrator)</b> - 데이터베이스 관리자 ( 데이터관리시스템을 다룸 - 설계도를가지고 시스템 구축 ) </li>
	<li><b>DA (Data Administrator)</b> - 데이터 관리자 ( 데이터자체를다룸 - 설계만 )</li>
</div>


<div>
	<h3>6. 스키마(Schema)/스킴 - 구조/제약조건</h3>
		<li><b>외부 스키마/외부 뷰 (External Schema)</b> - 사용자들에게 보여주는 구조 ( 필요한 구조만가져와서 보여줌 )</li>

	<li><b>개념 스키마 (Conceptual Schema)</b> - 전체적인 데이터베이스의 구조/제약조건</li>

	<li><b>내부 스키마 (Internal Schema)</b> - 실제내부에 저장되는 구조 (유형/데이터크기)</li>
</div>


@elseif ($no==2)

<h2>02.관계 데이터 모델 구축 및 관리</h2>


<div>
	<h3>1.데이터모델 필수 3요소</h3>
	<li><b> 구조(Structure) </b> - </li>
	<li><b> 연산(Operation) </b> - </li>
	<li><b> 제약조건(Constraint) </b> - 데이터의 무결성을위해 제한 </li>
</div>


<div>
	<h3>2.개념적 데이터 모델(모델=설계) What? 무엇을데이터베이스화? - 개념스키마</h3>
	<li><b>ERD(개체 관계도)</b> - </li>
	<li><img src='/img/ER_graph.png'></li>

</div>


<div>
	<h3>3. 개체 타입(Entity type) - 데이터베이스화 하는 대상</h3>
	<li><b>엔티티 인스턴스 </b> - 입력된 데이터값 1개</li>
	<li><b>개체집합(Entity Set) </b> - 입력된 데이터값들의 집합</li>
</div>


<div>
	<h3>4. 속성(Attribute) - 개체의 속성</h3>
	<li><b>단순속성 (Simple Attribute)</b> - 더 이상 분해할 수 없는 속성</li>
	<li><b>복합속성 (composit Attribute)</b> - 단순속성으로 분해할 수 있는 속성</li>
	<li><b>단일값 속성 (single -valued Attribute)</b> - 하나의 값을 갖는 속성</li>
	<li><b>다중값 속성 (multi -valued Attribute)</b> - 하나 이상의 값을 갖는 속성</li>
	<li><b>유도 속성 (Derived Attribute)</b> - 다른 속성 값으로부터 유도되어 결정되는 속성</li>
	<li><b>저장 속성 (stored Attribute)</b> - 유도 속성 계산을 위해 사용된 속성</li>
</div>


<div>
	<h3>5. 관계타입(Relationship Type) - 개체와 개체사이의 관계</h3>
	<li><b> 1:1 관계</b> </li>
	<li><b> 1:N 관계</b>  </li>
	<li><b> N:M 관계</b> - 세발표시 </li>

</div>


<div>
	<h3>6. 관계유형</h3>
	<li><b>필수 참여관계 (Mandatory membership)</b> - 반드시 대행이 되야하는 관계  ( | ) </li>
	<li><b>선택 참여관계 (Optional membership)</b> - 없을 수도 있는 관계  ( o ) </li>
	<li><b>교차 관계 (Intersection membership)</b> - N:M관계의 문제점을 해결하기위해 나온 table </li>
	<li><b>종속 관계 (Denpendant membership)</b> - 식별관계(외래 식별자가 주 식별자로 존재) / 비식별관계(외래 식별자가 일반속성으로 존재) </li>
	<li><b>존재 종속 관계 (Existance Denpendant)</b> - 주개체(dominant entity = 강한개체) -B개체의 존재를 결정하는 A개체 / 종속개체(subdominate entity) - A에의해 존재가 결정되는 B개체</li>
	<li><b>ISA 관계</b> - 상속받는관계 </li>

</div>

@elseif ($no==3)

<h2>03.관계 데이터 모델 용어</h2>


<div>
	<h3>1. 관계데이터 모델 </h3>
	
</div>


<div>
	<h3>2. 릴레이션의 구조 </h3>
	<ul>
		<li><b>행(Row)</b>  </li>
		<li><b>열(Column)</b>  </li>
		<li><b>릴레이션 스킴(Scheme)</b> - 릴레이션의 구조 </li>
		<li><b>릴레이션 인스턴스(Instance)</b> - 하나의 데이터 값 자체</li>
		<li><b>릴레이션 인스턴스 set</b> - 인스턴스가 모인 집합 </li>
		<li><b>튜플(Tuple) = Row</b> 행(row) </li>
		<li><b>가디널리티 (Cardinality)</b> 튜플의 갯수(인스턴스가 수) </li>
		<li><b>속성 (Attribute)</b> 개체특성이나 상태 (열 Column) </li>
		<li><b>차수 (Degree)</b> 속성의수 (column의수/attribute의수) </li>
		<li><b>도메인(Domain)</b> 속성이취할 수 있는 같은 타입의 원자값들의 집합 (속성에입력될수있는 값의 범위)  </li>
	
	</ul>
</div>	


<div>
	<h3>3. 릴레이션의 특성 </h3>
	<ul>
		<li><b> 한 릴레이션에 포함된 튜플들은 모두 상이하다</b> </li>
		<li><b> 튜플사이에 순서는 없다 </b> </li>
		<li><b> 한릴레이션을 구성하는 속성의 이름은 유일해야한다</b></li>
		<li><b> 한릴레이션을 구성하는 속성의 사이에는 순서가없다 </b></li>
		<li><b> 모든 속성은 원자값이여야 한다. </b></li>
	
	</ul>
</div>	

 

<div>
	<h3>4. ER스키마와 관계스키마의 사상 (Mapping Rule)</h3>
	<ul>
		<li><b> 1:1 </b> 자기자신의 기본키를 다른외래키로 만들어서 mapping시킴 </li>
		<li><b> 1:N </b> 1의 테이블의 기본키를 N테이블에 외래키로 만들어서 mapping을 시킴 </li>
		<li><b> N:M </b> 두테이블의 기본키를 가져와 mapping시켜줌( 교차 Entity를 생성 )  </li>	
	</ul>
</div>	





@elseif ($no==4)

<h2>04.키와 무결성 제약조건</h2>


<div>
	<h3>1. 키 - 튜플을 유일하게 식별할 수 있는 속성 집합</h3>
	<li><b>복합키(compound Key) </b> - 하나이상의 속성을 구성했을때 키</li>
	<li><b>유일성 (Unique) </b>- 유일해야한다 </li>
	<li><b>최소성 (minimality) </b>최소한의 속성값으로 한튜플을 찾을수있어야한다.</li>
</div>


<div>
	<h3>2. 키의 종류 </h3>
	<li><b>슈퍼키 (Super Key)</b> - 유일성을 만족 / 최소성을 만족하지 못함 -  (중요도낮음)</li>
	<li><b>후보키 (Candidate Key)</b> - 튜플을 유일하게 구분할 수 있는 최소 슈퍼키 ( 한 릴레이션에서 유일성과 최소성을 모두 만족 )</li>
	<li><b>기본키 (Primary Key)</b> - 후보키 중 대표로 지정된키 / 중복값이나 널값을 가질 수 없음 / 주키,주식별자 라고도 함</li>
	<li><b>대체키/보조키 (Alternate Key)</b> - 후보키 중 기본키를 제외한 나머지 후보키 = 후보키 - 기본키 </li>
	<li><b>외래키 (Foreign Key)</b> - 테이블들의 관계를 맺는 키</li>
</div>


<div>
	<h3>3. 무결성 제약 조건(Integrity Constraint) - (정확성=무결성) </h3>
	<li><b>개체 무결성 제약</b> - 한릴레이션의 기본키를 구성하는 어떠한 속성값도 Null값/중복값을 가질 수 없다</li>
	<li><b>참조 무결성 제약</b> - 한릴레이션의 외래키를 따라갔더니 다른 릴레이션에 기본키를 찾을수 있어야한다.</li>
	<li><b>도메인 무결성 제약</b> - 주어진 속성의 값이 도메인에 속한 값이어야 한다.</li>
</div>

<div>
	<h3>4. 무결성 제약조건을 위한 DBMS의 옵션 </h3>
	<li><b>Restrict - No action</b> - 문제가되는 연산은 자동으로 취소</li>
	<li><b>CASCADE</b> - 연쇄삭제, 연쇄수정</li>
	<li><b>SET NULL</b> - 연관되는곳 NULL로</li>
	<li><b>SET DEFAULT</b> - 연관되는곳 기본값으로</li>
	
</div>

@elseif ($no==5)

<h2>05.함수적 종속성</h2>


<div>
	<h3>1.이상(Anomaly) </h3>
	<li><b> 이상</b> - 데이터 중복으로 인해 릴레이션 조작 시 예상하지 못한 곤란한 현상이 발생 / 이상은 속성들 간에 존재하는 여러 종류의 종속 관계를 하나의 릴레이션에 표한할 떄 발생</li>
	<li><b> - 삽입 이상 (Insertion Anomaly)</b> </li>
	<li><b> - 삭제 이상 (deletion Anomaly)</b> </li>
	<li><b> - 갱신 이상 (updating Anomaly)</b> </li>
</div>



<div>
	<h3>2.함수적 종속성 (Functional Dependency)</h3>
	<li><b> 완전 함수적 종속(2정규형) </b> - </li>
	<li><b> 부분 함수적 종속(2정규형) </b> - </li>
	<li><b> 이행 함수적 종속(3정규형) </b> - A->B->C  = >   A->B  || B->C </li>
	<li><b> 다치 종속(MVD/4정규형) </b> - X->->Y ( 하나를대응하는 속성값이 여러개로 대응 될때 분해) </li>
	<li><b> 조인 종속(5정규형) </b> - ( 여러개의 테이브로 분해한후 조인했을때 원래의테이블이나와야함 )</li>


</div>



@elseif ($no==6)


<h2>06.정규화</h2>


<div>
	<h3>1.정규화(Normalization) </h3>
	<li><img src='/img/Normalization.jpg' style='width:80%'></li>
	<li><b>제1정규형(1NF) </b> - 릴레이션에 속한 모든 도메인이 원자값(Atomic Value)</li>
	<li><b>크리스토퍼 J. 데이트의 1정규형의 정의 </b> 
		<p>모든행은 좌-우순서가 없다</p>
		<p>모든열은 상-하순서가 없다</p>
		<p>중복되는 열이 없다</p>
		<p>모든 열과 행의 중복지점에는 해당되는 분야에서 한 개(Single Value)의 값을 가진다</p>
		<p>모든 행은 규착적이다</p>
	</li>
	<li><b>제2정규형(2NF) </b> - 키가 아닌 모든 속성들이 기본키에 완전 함수 종속</li>
	<li><b>제3정규형(3NF) </b> - 키가 아닌 모든 속성들이 기본키에 이행적으로 함수종속되지 않는 릴레이션</li>
	<li><b>무손실 분해/조인(Lossless Decomposition) </b> - 테이블을 분해후 조인했을때 원래값으로 나와야함 </li>
	<li><b>BCNS(Boyce-Codd NF) </b> - 릴레이션의 모든 결정자가 후보키인 릴레이션 (강한 제3정규형(3.5NF) </li>
	<li><b>제4정규형(4NF) </b> - 릴레이션 R에서 다치종속 A->-> B가 성립하는경우 다치종속(Multivalued dependencies)의제거</li>
	<li><b>제5정규형(5NF) </b> - 조인종속성 이용(위조튜플이생겨서는안됨)</li>

</div>


@elseif ($no==7)

<h2>07. 물리적 데이터베이스 설계</h2>


<div>
	<h3>1. 반정규화(역정규화 / De-normalization)</h3>
	<li><b> 기존설계를 재구성 </b> - 시스템의 성능향상과 개발과 운영의 단순화를위해</li>
	<li><b> 데이터의 정합성과 데이터의 무결성을 우선으로 할지  </b> / 데이터베이스구성의 단순화와 성능을 우선으로할지 결정 해야함</li>
	<li><b>사용량이 많아 시스템 성능에 크게 영향을 주는 테이블만 선정하여 반정규화</b> </li>
	<br/>
	<li><b>상관 모델링</b> - 업무가 처리되는 과정에 따라 데이터가 어떻게 영향을 받고 있는지 분석하여 설계 </li>
	<li><b>CRUD MATRIX</b> - 단위 프로세스(주문,회원가입,회원탈퇴등 하나의작업)가 엔티티 타입에 영향을 주는 방법으로 신규(Create),조회(Read),수정(Update),삭제(Delect)의 4가지 유형으로 업무가 진행되는 절차에 따른 데이터의 상관관계를분석</li>
	<li><b>TABLE 반정규화</b> - 정규화 과정에 의해 분리 된 두 테이블에 많은 트랜잭션이 발생하여 (JOIN 연산)으로 인해 시스템 저하가 일어날 수 있으므로 이런 경우 두 테이블을 병합</li>
	<li><b>TABLE 분할(Partitioning)</b> - 테이블을 분할하면 전체적인 스캔범위가 축호되므로 한 테이블에서 접근하는 양이 감소 (수평적/수직적 테이블 분할)</li>

	<br/>
	<li><b>중복 컬럼 방법</b> - 속성을 중복되더라도 가져옴</li>
	<li><b>파생 컬럼 추가</b> - 필요에 의해 특정 속상값으로 만들어지는 파생 컬럼을 추가</li>
	<br/>

</div>



<div>
	<h3>3. 뷰 설계</h3>
	<li><b> 뷰 </b>  
		<p>- 데이터베이스 사용자들이 접근하도록 테이블을 이용하여 만든 가상테이블 </p>
		<p>- 복잡한 테이블 구조를 단순화</p>
		<p>- 다양한 관점에서 데이터 제시 가능</p>
		<p>- 데이터의 보안 유지</p>
		<p>- 논리적인 데이터의 독립성 제공</p>
	</li>
	
</div>



<div>
	<h3>4. 인덱스(INDEX) 설계</h3>
	<li><b> 인덱스 </b>  
		<p>- 데이터베이스에서 원하는 데이터를 좀더 빨리 찾아줄 수있도록 데이터의 위치정보를 모아놓은 개체 </p>
		<p>- 항상 정렬되어 있는 상태로 유지</p>
		<p>- 시스템의 성능 향상을 가져올 수 있음</p>
		<p>- 인덱스에 사용 할 컬럼은 수정이 자주 발생되지 않는 컬럼을 설정</p>
		<p>- 데이터의 입력,수정,삭제가 많이 말생하면 데이터 영역뿐만 아니라 인덱스에 있는 정보도 DBMS에서 수정해야하므로 시간과 자원이 더 많이 소모</p>
	</li>
	
</div>


<div>
	<h3>5. 데이터 검색</h3>
	<li><b> FTS(Full Table SCAN) </b>  <p>- 전체페이지를 스캔(많은정보를 검색할시 유용) </p>
	<li><b> INDEX SCAN </b>  <p>- 필요한 부분 스캔(필요부분 검색시 유용) </p>

	</li>
	
</div>

<div>
	<h3>6. 인덱스 종류</h3>
	<li><b> (Clustered) INDEX / 클러스터드 인덱스 </b>
		<p>- 클러스터드 인덱스가 생성되는 컬럼을 기준으로 정렬이됨</p>
		<p>- 기본적으로 넌 클러스터드 인덱스보다 검색 속도가 빠르며 범위조회를 할경우 속도가 빠름</p>
		<p>- 한 테이블에서 하나의 클러스터드인덱스만 생성 가능(정렬기준이2개가 될수없기떄문)</p>
		<p><img src='/img/Clustered.jpg' style='width:80%'></p>
		
	</li>

	<li><b> (Non Clustered) INDEX</b>  
		<p>- 원본데이터를 변경할 필요가 없음</p>
		<p>- 여러개를 만들 수 있음</p>
	</li>
	
</div>


<div>
	<h3>7. 선택성(Selectivity)</h3>

	<li><b> 선택성</b>  
		<p>- Data의 종류의 수와 실제 입력된 데이터 수의 비율, 즉 선택될 수 있는 빈도</p>
		<p>- 분포도가 높으면 선택성이 떨어짐</p>
	</li>
	
</div>

@elseif ($no==8)

<h2>08.관계 데이터 연산</h2>


<div>
	<h3>1. 관계 데이터 연산</h3>
	<li><b> 데이터 모델은 구조(S)와 제약(C)을 정의해야 될 뿐 아니라 데이터를 조작하기 위한 연산(Operation)의 정의도 포함해야 한다 </b> 종류 -  관계 대수(Relational Algebra) / 관계 해석(Relational Calculus)</li>
</div>




<div>
	<h3>2. 관계 대수(Relational Algebra)</h3>
	<li><b> - 절차 언어 (Procedural Language) </b> - 어떻게(How)의 관점</li>
	<li><b> - 일반 집합 연산자 / 순수 집합 연산자 </b> </li>
	<li><b>- 원하는 정보와 그 정보를 어떻게 유도하는가를 기술하는 절차적인</b> 특성 </li>


</div>

<div>
	<h3>3. 일반집합연산자</h3>
	<li><b>- 합집합 / 교집합 / 차집합 </b></li>
	<li><b>카티션 곱 (CARTESIAN PRODUCT , X 중요)</b> 
		<p> 두 릴레이션에 정의된 튜플을 곱으로 계산하는 연산  / A에 속한 각 튜블 a 에 대해 B에 속한 튜플 b를 모드 접속시킨 튜플들(a b)로 구성된 릴레이션</p>
		
		<br/>

		<p>- 합집합(U : Union)  </p>
		<p>- 교집합(Intersection)  </p>
		<p>- 차집합(Difference)  </p>
				
	</li>



</div>


<div>
	<h3>4. 순수 관계 연산자</h3>

	<li><b> SELECT / PROJECT / JOIN / DIVISION </b></li>

	<li>
		<b> SELECT (시그마)</b>
		<p> - 릴레이션에서 주어진 조건을 만족하는 (튜블의 수평적 부분집할)을 구하는 연산 (where문)</p>
		<p> <img src='/img/sigma.png' style='width:50%'></p>
	</li>

	<li>
		<b> PROJECT (파이)</b>
		<p> - 릴레이션에서 주어진 속성리스트에 제시된 속성의 (수직적 부분집합을) 구하는 연산 (select 절)</p>
		<p> <img src='/img/pi.png' style='width:50%'></p>
	</li>



	<li>
		<b> JOIN연산</b>
		<p> - Theta JOIN(세타조인): 이퀴조인이아닌 나머지 튜플만 표시 </p>
		<p> - Equi JOIN(이퀴조인): 카티션곱을 수행해서 공통속성 중 같은값의 튜플만 표시</p>
		<p> - Natural JOIN(자연조인): 이퀴조인에서 중복되는 속성을 한번만 표시</p>
  
		<p> - JOIN 연산은 (카티션 프로덕트) 결과에서 select 연산의 조건을 만족하는 것만 구한다</p>
		<p> - 표기형식 : ▶◀ R속성 = S속성 S</p>
		<br/>

		<p> <img src='/img/NJOIN.jpg' style='width:50%'>네츄럴조인은N을붙임</p>
		
	</li>




	<li><b> DIVISION </b> : 나눠지는 값만 나옴</li>

</div>

 



<div>
	<h3>5. 관계 해석(Relational Calculus)</h3>
	<li><b> 비절차적 언어(Nonprocedural Language) </b> - 무엇(What)의 관점</li>
	<li><b> 튜플 관계 해석 / 도메인 관계 해석</b> </li>
</div>



 <img src='/img/relationship_algebra.png' style='width:80%'>



@elseif ($no==9)

<h2>09.SQL(DDL , DCL)</h2>


<div>
	<h3>1. SQL(Structured Query Language) 개요</h3>
	<li><span>SQL</span>
		<p> - 1974년 IBM 연구에서 개발된 SEQUEL 에서 연유  </p> 
		<p> - 관계 대수와 관계 해석을 기초로 한 고급 데이터 언어  </p> 
	</li>

	
	<li><b>대화식SQL</b>  -  </li>



</div>



<div>
	<h3>2. DDL (Data Definition Language)</h3>
	<li> 데이터베이스의 (논리적 데이터 구조)와 (물리적 데이터 구조) 및 구조 간의 사상을 정의한다.</li>
	<li> DDL로 정의된 내용은 (메타데이터(Metadata))가 되며, (시스템카탈로그=데이터사전(Data Dictionary))에 저장된다.</li>
	<li><b>시스템 카탈로그</b> - 데이터 사전이라고도하며  시스템 카탈로그에 저정된 정보를 메타 데이터라고도 한다 </li>
	<li><b>CREATE</b> - 스키마,도메인,테이블,뷰,인덱스를 정의 
			<p><b>도메인</b>을 정의하는 명령문</p>
			<p>표기 형식 - CREATE DOMAIN GENDER CHAR(2)  DEFAULT '여' CONSTRAINT VALID-GENDER CHECK (VALUE IN ('남','여'))</p>

			<p><b>Char / varChar</b> - 고정길이 문자열_열 항목들이 크기가 일관적인 경우  /  가변길이 문자열 </p>

			<br/>


			<p><b>TABLE</b> 선언 </p>
			<p>표기 형식 - CREATE TABLE 학생{ <br/> 
				학번 CHAR(15) NOT NULL	<br/> 
				이름 VARCHAR(15) NOT NULL	<br/> 
				학과 VARCHAR(20) NOT NULL	,<br/> 
				학년 INT NOT NULL	,<br/> 
				성별 GENDER,  <br/> 
				생년월일 DATE,<br/> 
				PRIMARY KEY(학번),<br/> 
				UNIQUE(전화번호), //중복되는값을 받으면 안된다 (유일)<br/>  
				FOREIGN(학과) REFERENCES 학과(학과코드),  //학과(외래키)가 학과테이블의 학과코드를 참조한다 <br/> 
				ON DELECT CASCADE ON UPDATE CASCADE,  //연쇄삭제, 연쇄수정 <br/> 
				CONSTRANINT 학년제약 CHECK( 학년 >= 1 AND  학년 &lt;= 4) }  //도메인 제약 지정
			</p>

			<br/>
			<p><b>NO ACTION (=RESTRICT)</b> - 파참조 테이블에서 삭제또는 수정 후, 참조테이블에서 무결성 제약조건을 위배하지않으면 OK 아니면 오류로 처리</p>
			<p><b>CASCADE</b> - 피참조 테이블에서 행을 삭제 또는 수정 후, 참조 테이블에서 무결성 제약조건에 따라 삭제 또는 수정을 행한다</p>
			<p><b>SET NULL</b> - 피참조 테이블에서 행을 삭제 또는 수정 후, 참조 테이블에서 무결성 제약조건에 따라 NULL로 변경 단, NOT NULL제약이 참조하는 칼럼이 선언되어있다면 오류로 처리한다</p>

	</li>





</div>


<div><h3>3.CREATE VIEW- 뷰를 정의하는 명령문 </h3> 
	<p>
		CREATE VIEW 컴공학(학번,이름,학과)<br/>
		AS select 학번,이름,학과<br/>
		FROM 학생<br/>
		WHERE 학과 ='컴퓨터공'<br/>
		[WITH CHECK OPTION]; //중요!! (무결성 체크)
	</p>
</div>





<div>
	<h3>4. ALTER </h3>
	<li><b>테이블의 정의를 변경하는 명령문</b></li>
	<li><b>표기형식</b> 

			<p>ALTER TABLE 기본 테이블_이름 ADD ;</p>
			<p>ALTER TABLE 기본 테이블_이름 ALTER; </p>
			<p>ALTER TABLE 기본 테이블_이름 DROP ;</p>
	
	
	</li>
</div>



<div>
	<h3>5. DROP</h3>
	<li><b>삭제</b></li> 
	<li><b>표기형식</b> 

			<p>DROP SCHEMA스키마_이름 [CASCADE | RESTRICT ]</p>	
	
	</li>
</div>




<div>
	<h3>6. 데이터 제어어 DCL (Data Control Language)</h3>
	<li><b>COMMIT(정상실행) / ROLLBACK(실수시 백업) / GRANT(권한 부여) / REVOKE(권한을 뺏다)</b> </li>

	<li><img src='/img/GRANT.png' style='width:50%'> - WITH GRANT OPTION; (권한을 부여해줄수있는 권리까지부여)</li>



</div>


@elseif ($no==10)

<h2>10. DML</h2>


<div>
	<h3>1. DML(Data multiplication Language)</h3>
	<li><b> DISTINCT </b>- 중복제거 </li>
	<li><b>select AVG(성적) AS 평균성적</b> - 평균을 구하여 평균성적이라는 속성명부여</li>
	<li><b>부속 질의</b> - 결과가 하나인 경우 or 결과가 여러개인 경우</li>
	<li><b>EXIST</b> - where문 다음 속성값이 없을때 (값이 있나없나 판단)</li>
	<li><b>통합 질의</b> - </li>
	<li><b>EXCEPT</b> - 차집합</li>
	<li><b>조인 질의</b> -  테이블.a JOIN 테이블.b ON (a.학번 = b.학번) where ....</li>

</div>



@elseif ($no==11)


<h2>11. 고급 데이터베이스</h2>


<div>
	<h3>1.트리거(Trigger) </h3>
	<li> - 테이블에 데이터가 입력,수정,삭제 되어질 때 다른 테이블에 연관된 작업을 정의하기 위한 목적으로 사용된다. (연관수정)</li>
	<li> - 자동으로 실행되어 복잡한 업무를 숙지하지 않아도 됨</li>
	<li> CREATE TRIGGER 입고INS ON 입고 FOR INSERT //입고ins라는이릅 지정 입고테이블에 insert를위한 트리거 생성<br/>
		AS
		DECLARE @CODE CHAR(6), @QTY INT  //정의한다  2가지 @변수지정 <br/>
		SET @CODE = (SELECT 상품코드 FROM INSERTED) //inserted라는 가상테이블에서 상품코드값을 가져와라  <br/>
		SET @QTY = (SELECT 입고수량 FROM INSERTED) // 더해져야할 값 <br/>
		UPDATE 상품 <br/>
		SET 재고수량 = 재고수량 + @QTY  <br/>
		WHERE 상품코드 = @CODE
	
	</li>
	

</div>


<div>
	<h3>2.내장형 SQL (Embedded SQL) </h3>
	<li> 응용프로그램 내에 SQL 문장을 내포하여 프로그램이 실행될 때 함께 실행되도록 삽입된 SQL (=삽입SQL) </li>
	<li> 일반 SQL문은 실행결과로 여러개의 튜플을 반환하지만 / 내장형 SQL은 단 하나의 튜플만 반환(가져온데이터를 변수를사용하기때문)  </li>
	<li> 호스트 프로그램의 컴파일 시 선행처리기(전처리기)에 의해 내장형 SQL문은 분리되어 컴파일 된다.(실행되기전에 컴파일이되어있다)</li>
	<li> 호스트 변수는 앞에 클론(;)을 붙여 사용</li>
	
		

</div>


<div>
	<h3>3.커서(cursor) </h3>
	<li> 내장형 SQL 과달리 복수 개의 튜플에 접근이 가능  </li>
	<li><b> DECLARE </b>: 커서의 이름 선언</li>
	<li><b> OPEN</b> : 다음 첫번째 레코드를 가르키도록 설정하는 명령어(실행)</li>
	<li><b> FETCH</b> : 다음 레코드로 커서를 이동시키는 명령어(반복) </li>
	<li><b> CLOSE</b> : 질의 실행 결과에 대한  처리 종료 시 커서를 닫기 위해 사용하는 명령어</li>
	

</div>

<div>
	<h3>4.스포어드 프로시저 (Stored Procedure) </h3>
	<li> - 연속된 SQL 문장을 하나로 모아 (서버에 미리 컴파일해서 저장)한다. </li>
	<li> - 복잡한 SQL문을 미리 저장시켜놓고 호출해서 사용하므로 편리하다. </li>
	<li> - 프로그램의 모듈화로 재사용성이 높다. </li>
	

</div>

@elseif ($no==12)

<h2>12. 회복과 병행제어</h2>


<div>
	<h3>1. 트랙잭션 (Transaction)</h3>
	<li>  -  작업단위 / 연산 /  </li>
	<li>  -  하나의 트랜잭션은 COMMIT 되거나 ROLLBACK 되어야한다  </li>
	<br/>
	<li><b>★ 트랜잭션의 특성 ACID - 원자성 / 일관성 / 격리성 / 영속성</b> </li>
	<li><b>- 원자성(Atomicity) </b>  - 자기의 연산에 대하여 전부(ALL)또는 전부(Noting) 실행만이 존재</li>
	<li><b>- 일관성(Consistency) </b>  - 시스템이 가지고 있는 고정 요소는 트랜잭션 수행전과 트랙잭션 완료 후에 같아야 한다</li>
	<li><b>- 격리성(Isolation,독립성) </b>  - 트랙잭션 실행중에 다른 트랙잭션이 끼여들 수 없다</li>
	<li><b>- 영속성(Durability,지속성) </b>  - 트랙잭션에 의해서 생성된 결과는 계속 유지되어야 한다</li>

	

</div>



<div>
	<h3>2. 회복 (Recovery)</h3>
	<li>트랙잭션 진행중 장애로인해 테이블에 이상이 생겨 원래 상태로 되돌리는 현상</li>
	<li><b>- 중복 저장 기업 (BackUp)</b> - BML는 데이터베이스에 포함된 정보를 시스템 내에 별도로 저장해두었다가 장애 발생 시 이 정보를 이용하여 회복시킨다  (DUMP-그대로담아기억 / LOG-이전값과 이후값을 별도로 기억 )</li>
	
		
	<br/>
	
	
	<li><b>회복의 원리</b> - Log파일 기준 <b>Rodo(재수행),Undo(취소) </b></li>
	<li><b>- Redo</b> 장애가 발생하기전에 트랜잭션이 완료 명령(Commit)을 수행했을 경우, 이 트랜잭션의 갱신사항을 재수행하여 트랙잭션의 갱신이 영속성을 갖도록 한다 </li>
	<li><b>- Undo</b> 트랙잭션이 완료명령을 실행하기전에 에러가 났을경우 발생</li>

	<br/>
	<li><b>회복기법의 종류</b> : 즉시갱신 (Immediate Update) / 지연 갱신(Deferred Modification) / 검사시점 (Check Point) 회복</li>

</div>


<div>
	<h3>3. 병행 (Concurrency Control)</h3>
	<li><b> 갱신불실 (Lost Upadate)</b> - 두개이상의 트랜잭션이 같은 자료를 공유하여 갱신할때 결과의 일부가 분실되는현상(중복으로인해)</li>
	<li><b> 비완료 의존성( Uncommitted Dependency ) </b></li>
	<li><b> 모순성 (Inconsistency)</b> - 트랙잭션 병렬성에 수행된 결과값이 다른 결과값과 다른값이라 전혀다른 결과가나옴</li>
	<li><b> 연쇄분쇄 (Cascading Rollback) </b> </li>

	<br/>
	
	<h4>병행제어 기법</h4>

	<li><b> 로킹(Locking) </b> - 비관적 방법(화장실생각 잠구고 계속해서 대기) </li>
	<li><b> 타임스탬프(Time Stamp) </b> - 낙관적 방법(은행생각 순차적으로 번호표를주고 여유있게 대기) </li>
	



</div>


<div>
	<h4>스케줄 (Schedule) -> 트랙잭션의 연선을 모두 (순차적)으로 실행하는 유형.</h4>

	
	<h4>비스케줄 (nonserial Schedule)</h4>
	<h4> 2단계 로킹(2PL : Two-Phase Locking) - 성장(확장) 단계(Growing Phase):객체를사용하기전에 잠금  / 축소단계(Shrinking Phase) :풀어주는단계 </h4>
	<h4>전용 로크 (Exclusive Lock) - read허용 write 허용</h4>
	<h4>공용 로크 (Shared Lock) - read허용 write 허용안됨</h4>


</div>



@elseif ($no==13)





<h2>13. 데이터베이스의 현재와 미래 ( 관리 -> 분석 ) </h2>


<div>
	<h4>기저기와 맥주(데이터마이닝) : 30대남성 동시구매 분석</h4>
</div>



<div>
	<h3>1. Data Mark , Datawarehouse</h3>


	<li><b>DataMark </b> 
		<p>- 데이터의 한 부분으로서 (특정 사용자)가 관심을 갖는 데이터들을 담은 비교적 작은 규모의 데이터 웨어하우스이다</p>
		
	
	
	
	</li>
	
	<li><b>Datawarehouse </b> 
		<p>- 데이터베이스를 그대로가져오는게아니라 필요한정보를 추출하여 가공하고 분석할수있는 필요한 형태로 모아놓은 집합체</p>
		<p>- 웨어하우스는 창고라는 의미인데, 데이터의 격납이나 분석방법까지 포함하여 조직 내 의사결정을 지원하는 종보 관리 시스템으로 이용된다</p>
	</li>
	
	
	<h4><b>ETL도구(Extraction Transformation Loading)</b> - 추출 변형 </h4>
	

</div>


<div>

	<h3>2. OLTP , OLAP</h3>
	
	<li><b> OLTP </b> - 데이터 관리 및 구축 </li>
	
	<li><b> OLAP(분석도구) </b> - OLTP 분석</li>
	<br/>
	<li><b> OLAP 종류</b> - ROLAP / MOLAP / HOLAP 
		<p>- ROLAP (Relational OLAP) - 스타스키마형태의 구조</p>
		<p>- MOLAP (Multidimensional OLAP) - 다차원 데이터베이스를 큐브형태의 데이터 뷰로 작성</p>
		<p>- HOLAP (Hybrid OLAP) </p>
	
	</li>


</div>



<div>
	<h3>3. 데이터 마이닝 </h3>
	<li> - 특정 패턴을 추출 </li>

</div>


<div>
	<h3>4. 빅 데이터 </h3>
	<li><b> Hadoop의 등장 </b> - 더그 커팅(Doug Cutting) 
		<p> -분석시스템 오픈소스 등장 </p>
		<p><b>빅데이터 3대 요소(3V)</b> - 생성되는데이터의양(Big-Data) / 입출력의속도(Velocity) / 데이터의 다양성(Variety)</p>
	
	</li>

</div>



@endif





