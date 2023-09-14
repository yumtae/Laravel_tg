@include('user._layouts.common_css');
-- IP 주소 체계<br/>
 - GATEWAY / NETMASK / IP<br/>
<br/>
IP 주소는 자기 PC가 사용하는 고유 식별자로 서<br/>
자기 PC가 다른곳으로 데이터를 보낼때 송신하는 주체로 출발지 주소에 해당<br/>
<br/>
넷 마스크는 컴퓨터 네트워킹에서 IP (Internet Protocol) 주소의 클래스와 범위를 정의하는 데 사용되는 용어. 정확히는 IP주소를  서브넷 마스크를 이용해 표기하는데<br/>
이를 서브넷 마스크 표기법 이라고함.<br/>
<br/>
IPv4 : 192.16.0.4와<br/>
<br/>
서브넷마스크 : 255.255.255.0 이 있다는 가정하에<br/>
192.16.0 는 255.255.255 와 대응하는 데 이를 네트워크 ID라고 하며 <br/>
0에 대응하는 4는 호스트 ID라고 한다.<br/>
<br/>
게이트웨이란 무선 공유기를 뜻하고, 이를 통해 pc는 인터넷에 접속 할 수 있다.<br/>
또한 기본 게이트웨이 주소 설정이 빠지거나 잘못되면 운영체제가 무선 공유기 IP 주소를 검색 할 수 없기에 인터넷에 접속 이안된다.<br/>
즉 게이트웨이 혹은 라우터는 인터넷을 접속하기위한 일종의 관문 역할을 한다.<br/>
라우터는 인터넷 공간에서 각기 다른 호스트 사이를 연결해주는 기능을 수행하는데 이러한 기능을 라우팅 이라고 부른다.<br/>
<br/>
★ IPv4주소와 게이트웨이의 네트워크 ID는 동일한데, 이처럼 동일한 네트워크 ID를 공유하는 장치들의 공간을 LAN(Local Area Network) 영역이라고 한다.<br/>
다른말로 만약 네트워크 ID가 다르다면 두 장치는 서로 상이한 LAN영역에 존재한다고 생각할 수 있다.<br/>
즉, 네트워크 ID란 무수히 많은 LAN 영역에서 자기 LAN영역을 구분하기위한 식별자 라고 생각하면된다.<br/>
<br/>
무수한 LAN영역에 속해있는 호스트를 구분하기 위한 식별자가 바로 호스트 ID이다.<br/>
<br/>
같은 네트워크 ID를 사용하지만 호스트끼리 연결하는것은 스위칭이라 부른다.<br/>