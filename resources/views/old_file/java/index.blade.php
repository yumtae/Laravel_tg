@include('user._layouts.common_css');

<meta name="viewport" content="width=device-width, user-scalable=no">
<button>테스트 시작</button>
<style type="text/css">
	.margin10{margin:10px 0}
	li{margin-bottom:30px}
</style>



<script type="text/javascript">

	$(function(){
		$('button').click(function(){
			$('b').css('visibility','hidden');
			$('p').css('cursor','pointer');
		})

		$('li').click(function(){
			var i = $(this).index();
			
			$(this).children().css('visibility','visible');
			

		})
		$('p').click(function(){
			var i = $(this).index();
			
			$(this).children().css('visibility','visible');
			

		})
	})

</script>

<div id='gisa_engineer'>


		<h2> 자바 기본  </h2>


		<ul>
			
			<li> 객체지향이란? : <b> 프로그래밍에서 필요한 데이터를 추상화시켜 상태와 행위를 가진 객체로 만들어 그 객체들 간의 유기적인 상호작용을 통해 로직을 구성하는 프로그래밍 기법  </b> </li>
			<li> 객체지향의 장점 : <b> 절차지향만 사용해온 처음에는 왜이렇게 써야했는지 의문이 들었지만 배우면 배우고 사용할 수록 너무나도 정리가 잘 된고 구분이 잘되서 재사용성에도 유리하고 가독성도 좋았다 // 코드 재사용에 매우 유리하며 ,유지보수가 쉽다(절차지향은 한 메서드를 찾아가기위해 엄청나게 고생을했던경험이 있기에 더욱 크게느껴짐), 이 이유들로인해 협업이나 대형프로젝트에 유리하다(클래스단위로 모듈화)     </b> </li>
			<li>객체지향 설계 원칙 5가지 - <b> 
				SRP(Single Responsibility Principle) : 단일 책임 원칙 클래스는 단 하나의 책임을 가져야하며 클래스를 변경하는 이유는 단 하나의 이유어야만 한다   
				<br/>
				OCP(Open-Close Principle) : 개방-폐쇄 원칙 : 확장에는열려있어야하고 변경에는 닫혀있어야한다 	
				<br/>
				LSP(Liskov Sustitution Principle) : 리스코프 치환원칙 : 상위 타입의 객체를 하위타입의 객체로 치환해도 상위 타입을 사용하는 프로그램은 정상적으로 작동해야 한다
				<br/>
				ISP(Interface Segregation Principle) : 인터페이스 분리 원칙 : 인터페이스는 그 인터페이스를 사용하는 클라이언트를 기준으로 분리해야 한다.
				<br/>
				DIP(Dependency Inversion Prinsiple) : 의존 역전 원칙 : 고수준 모듈은 저수쥰 모듈의 구현에 의존해서는 안된다. 
			</b> 
			</li>
		
			<li>객체지향 프로그래핑 키워드  <br/>
				- 추상화 : <b> 불필요한 정보는 숨기고 중요한 정보만 표현함으로써 공통의 속성이나 기능을 묶어 이름을 붙임   </b> 
				- 캡슐화 : <b> 기능과 특성의 모음을 '클래스'라는 '캡슐'에 넣어서 분류한다   </b> 
				- 상속 : <b> 부모클래스의 속성과 기능을 그대로 이어받아 사용할 수 있게하고, 기능의 일부분을 변경 해야할 경우 상속받은 자식클래스에서 해당 기능만 재정의하여 사용할 수 있다, 단 다중상속은 불가능   </b> 
				- 다형성 : <b> 하나의 변수명,함수명 등이 상황에 따라 다른 의미로 해석될 수 있다. 오버라이딩과 오버로딩이 있다<br/>
				오버라이딩 : 부모 클래스의 메서드와 같은 이름, 매개변수를 재정의
				오버로딩 : 같은 이름의 메서드를 여러개 정의하고, 매개변수의 타입과 갯수를 다르게하여 매개변수에따라 다르게 호출이 가능하게한다.
				</b> 
			</li>
			<li>제네렉이란?  : <b> 데이터 타입을 일반화시켜 내부에서 타입을 정의하는게아니라 외부에서 정의하게끔 한다.</b> </li>
			<li>컬렉션 클래스에서 제네릭을 사용하는 이유는?  : <b> 컬렉션 클래스에 저장되는 인스턴트 타입을 제한하여 런타임에 발생할 수 있는 잠재저인 모든 예외를 컴파일 타임에 잡아 낼 수 있다.   </b> </li>
			<li>데드락이란? 또한 해결방법  : <b> 둘 이상의 스레드라 lock을 획득하기위해 기다리는데, 이  lock을 잡고있는 스레드가 똑같이 다른 lock을 기다리면서 서로 블락으로 놓인상태 <br/> - 우선순위를 선정해 자원을 선점하도록 하는것과 공유 불가능한 상호 배제 조건을 제거하면 된다 </b> </li>
			<li> JVM의 역할은? : <b>  -자바 컴파일러가 .java파일을 컴파일하면 class라는 자바 바이트 코드로 변환시켜주는데, 이 때 바이트 코드가 기계어가 아니기때문에 운영체제가 바로 실행을 하지못하는데 운영체제가 이해할 수 있도록 해석해주는것 <br/> - 컴파일->바이트코드->기계어 중간에 바이트코드 과정이 있기에 속도와 메모리으 ㅣ단점이 있을 수 있다  </b> </li>
			<li>스프링에서 AOP란  : <b> 관점 지향프로그램의 약자로, 어떤 로직에서 핵짐적인 관점 ,부가적인 관점으로 나누어서 보고 그 관점을 기준으로 각각 모듈화 하겠다는뜻 , 스프링 빈에서만 AOP가 가능 </b> </li>
			<li>DI에 대한 설명  : <b> 의존성 주입의 약자로, 객체드 ㄹ간의 의존성을 줄이기 위해 사용되며 , 필드 setter, 생성자 주입이있다, 개발코드부분에서 객체를 생성하는 것이아니라, 데이터 주입만 담당하는 별도의 공간에서  객체를 생성하고, 데이터간의 의존성을 주입해 개발코드에서 사용하며 의존성을 줄인다  </b> </li>
			<li> IOC : <b> 제어의 역전으로 인스턴스의 생성부터 소멸까지 개발자가아닌 컨테이너가 대신 관리해준다<br/> IOC컨테이너는 DI를 통해 주입시킨다   </b> </li>
			<li>Bean이란? : <b> spring IOC컨테이너가 관리하는 자바객체를 빈이라는 용어로 부른다. 우리가 new 연산자로 어떤 객체를 생성했을때의 객체는 BEAN이 아니다</b></li>
			<li>setter를 무분별하게 사용하면 안되는 이유? : <b> 객체의 값을 변경할 수 있으므로 객체의 일관성을 보장할 수 없다 </b></li>
			<li>DTO와 VO의 차이점 : <b>둘이 동일한 개념이지만 read only속성을 갖는다. VO는 특정한 비즈니스 값을 담는 객체이고, DTO는 Layer간의 통신용도로 오고가는 객체를 말한다 </b></li>
			<li>Object란? : <b> 소프트웨어 세계에 구현할 대상,<br/> 클래스의 인스턴스라고 불리며, OOP관점에서 클래스의 타입으로 선언되었을 때 객체라고 부른다 <br/> 객체는 현실세계에 가깝고, 인스턴스는 소프트웨어 세계에 가깝다 </b></li>
			<li>클래스란? : <b>연관되어 있는 변수와 메서드의 집합, 객체를 만들어 내기 위한 툴 </b></li>
			<li>인스턴스란? : <b> 객체를 소프트웨어에 실체화 한 것, 객체는 클래스의 인스턴스이다 </b></li>
			<li>String, StringBudder, StringBuilder의 차이 : <b> String은 불변의 특징을 가지고있어서
			수정을 하지못하고 새로운 String인스턴스가 생성되고 전에 있던 String은 GC에 의해 사라진다, 그렇기에 좋은 성능을 기대하기 힘들다 <br/> 버퍼는 동기화 키워드를 지원하여 멀티쓰레드 환경에서 안전하다는점, String도 불변성을 가지기에 멀티쓰레드 환경에서 안정성을 가지고있다. <br/> StringBuilder는 동기화를 지원하지 않기 때문에 멀티 쓰레드 환경에서 사용하는 것은 적합하지 않지만 동기화를 고려하지 않는 만큼 단일쓰레드의 성능은 StringBuffer보다 뛰어납니다.</b></li>
			<li>프로세스란? : <b>운영체제로부터 시스템자원을 할당받는 자원의 단위, 하나의 프로세스는 크게 코드,데이터,스택,힙 영역  4가지로 이루어져있습니다 </b></li>
			<li> 스레드란?: <b>한 프로세스  내에서 여러실행의 흐름, 프로세스 하나에 자원을 공유허면서 일련의 과저을 여러개의 동시에 실행 시킬 수 있다. </b></li>
			<li>멀티프르세스 : <b> 독립된구조로 안정성이 높지만, 프로세스를 왔다갔다하는 컨텍스트스위칭으로 인해 성능이 저하된다 </b></li>
			<li>멀티쓰레드 : <b>응당시간이 단축되고 자원소모가 감사되나 , 미묘한시간차들 처럼 작은 변수를 공유함으로 오류가 발생할 수 있다 </b></li>
		
			<li>프록시란? : <b> '대리인' 이라는 의미로 말그대로 대리하여 업무를처리한다, 함수 호출자는 보조 업무를 맡기고, 프록시는 내부적으로 할당받는 보조업무를 처리한다</b></li>
			<li>spring security : <b> 스프링 기반의 어플리케이션의 보안(인증과 권한)을 담당하는 프레임워크로 세션-쿠키 방식으로 인증한다 </b></li>
			<li>트랙잭션 : <b> 일련의 작업들이 에러없이 끝나야한다, 에러가 날경우 변경되었던 작업을 모두 원상복구시킨다 </b></li>
			<li>디스패쳐 서블릿이란? : <b> 서블릿 컨테이너 가장 앞단에서 HTTP 프로톸로로 들어오는 모든 요청을 받아 적합한 컨트롤러에 위임해주는 프론트 컨트롤러 </b></li>
			<li>MVC1 ,MVC2 차이 : <b> 뷰와 컨트롤러의 역할을 모두 수행하던 JSP는 뷰만 남기고, 대신 컨트롤러 역할을 서블릿이 수행하게함 </b></li>
			<li>아파치와 톰켓 의 차이 : <b> 아파치가 웹역할 , 톰켓은 WAS역할 // 정적 , 동적 , 아파치 톰캣은 둘을 합친 역할 </b></li>
		
		</ul>

</div>















