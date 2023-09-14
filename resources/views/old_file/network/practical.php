<style type="text/css">
	body{background:#000}
	b{display:block}
	*{color:#aaa}
	font{color:orange}
</style>



<div>

	<h2>케이블순서</h2>

	<img src='./img/cable_img.jpg'>


	<h2>리눅스명령어</h2>

	

	<p><b>FasteEthernet 0/0의 IP 주소 설정 후 활성화. IP:192.168.100.1/24</b> en ->  conf t -> FasteEthernet 0/0 -> ip add 192.168.100.1 255.255.255.0 -> no shutdown -> exit -> exit -> copy r s</p>

	
	<p><b>router의 serial 2/0 <font>대역폭</font>을 2048로 설정</b> en -> conf t -> interface serial 2/0 -> <font>bandwidth 2048 </font> -> exit -> exit -> copy r s</p>

	<p><b>router의 serial 2/0 <font>클럭속도</font>를 72k로 설정</b> en -> conf t -> interface serial 2/0 -> <font>clock rate 72000</font> -> exit -> exit -> copy r s</p>


	<p><b>FastEthernet 0/0의 Description:ICQA 을 설정</b> en ->  conf t -> interface FastEthernet 0/0 -> description ICQA -> exit -> exit -> copy r s</p>



	<p><b>ROUTER1의 시리얼2/0 을 사용가능하게 ip주소를 192.168.0.101/24와 <font>두번쨰</font> ip 192.168.0.102/24로 설정 후 활성화 하시오</b> en -> conf t -> interface Serial 2/0 -> ip add 192.168.0.101 255.255.255.0 -><font> ip add 192.168.0.102 255.255.255.0 secondary</font> -> no shutdown -> exit -> exit -> copy r s</p>


	
	<p><b><font>기본 게이트웨이</font>를 설정하시오. IP:192.168.0.10</b> en -> conf t -> ip <font>default-gateway</font> 192.168.0.1  ->  exit -> copy r s</p>




	<p><b><font>DHCP 네트워크</font>를 192.168.100.0/24 <font>서버이름은 icqa</font></b> en -> conf t -> <font>ip dhcp pool icqa</font> -> <font>network 192.168.100.0 255.255.255.0</font> ->  exit -> copy r s</p>

	<p><b><font>telnet</font>에 접근하는 <font>password를 icqa</font>로 설정 후 <font>로그인</font></b> en -> conf t -> <font>line vty 0 4</font> -> <font>password icqa</font> -> <font>login</font> -> exit -> exit -> copy r s</p>


	<p><b><font>텔넷</font> 연결 후 3분 50초동안입력이없으면 세션이종료</b> en -> conf t -> <font>line vty(베리굿태연)</font> 0 4 -> <font>exec-timeout 03 50</font> -> exit -> exit -> copy r s</p>



	<p><b><font>console 0</font> 의 패스워드를 ICQA 로설정</b> en ->  conf t -> <font>line console 0</font> -> password ICQA -> login -> exit -> copy r s</p>


	<p><b>serial 2/0 을 활성화</b> en -> conf t -> interface serial 2/0 -> no shutdown -> exit -> exit -> copy r s</p>

	
	<p><b> hostname을 network2로 변경 하고 console 0의 password를 route5로 변경 후 로그인 </b> en -> conf t -> hostname network2 -> line console 0 -> password route5 -> login -> exit -> exit -> copy r s</p>


	<p><b>버전확인</b> en ->  show version -> copy r s</p>
	<p><b>인터페이스 정보 확인</b> en ->  show interface -> copy r s</p>
	<p><b>사용자 정보 확인</b> en ->  show user -> copy r s</p>
	<p><b>라우팅 테이블 정보 확인 </b> en ->  show ip route -> copy r s</p>
	<p><b>플래시내용 확인 </b> en ->  show flash -> copy r s</p>
	<p><b>프로세스 확인 </b> en ->  show process -> copy r s</p>




	<h2>리눅스명령어</h2>
	
	<p><b> 현재 설치된 하드디스크와 용량을 확인</b> df</p>
	<p><b> 파일이나 폴더를 찾을</b> find</p>
	<p><b> 네트워크 연결 상태, 라우팅 테이블 정보 등을 확인</b> netstat</p>
	<p><b> <strong>포트/프로토콜 정보를 확인</strong></b> etc/ services</p>
	<p><b> CPU메모리의 사용정보를 확인</b> top</p>



	

</div>




