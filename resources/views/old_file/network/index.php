<style type="text/css">
	body{background:#000}
	h1{font-size:2.5em}
	h2{font-size:2em}
	h3{font-size:1.5em}
	*{color:#aaa}
</style>



<br/>1과목. TCP/IP
<br/>
<br/>
<br/>서브넷 마스크란?***
<br/>=> IP Address에서 네트워크 Address와 호스트 Address를 구분하는 기능을 수행
<br/>=> 목적지 호스트가 동일한 네트워크 상에 있는지 확인한다.
<br/>=> 필요한 서브넷의 수를 고려하여 서브넷 마스크 값을 결정한다.
<br/>=> 서브넷 마스크의 Network ID는 이진수 1로, Host ID는 이진수 0으로 채운다.
<br/>
<br/>: 서브넷이 최대 n개의 IP Address를 필요로 할 때의 서브넷 마스크***
<br/>n = 25 ) 255.255.255.224 => n의 최대값은 32개
<br/>n >= 40 ) 255.255.255.192
<br/>
<br/>
<br/>UDP *
<br/>1> 비 신뢰성 서비스
<br/>2> 비 연결형 서비스
<br/>3> 데이터그램 형태의 전송
<br/>
<br/>
<br/>IP Address Class **
<br/>A Class = 옥텟비트 0 - 1.0.0.0 ~ 127.255.255.255 & 1 Octet까지 네트워크 ID
<br/>B Class = 옥텟비트 10 - 128.0.0.0 ~ 191.255.255.255 & 2 Octet까지 네트워크 ID
<br/>C Class = 옥텟비트 110 - 192.0.0.0 ~ 223.255.255.255 & 3 Octet까지 네트워크 ID
<br/>D Class = 옥텟비트 1110, 멀티캐스트에서 사용 - 224.0.0.0 ~ 239.255.255.255 & 4 Octet까지 네트워크 ID
<br/>cf> 127.0.0.0 => 루프 백 테스트용
<br/>
<br/>
<br/>IPv6 주소체계 ***
<br/>=> Unicast / Multicast / Anycast ( IPv6에서만 제공 )
<br/>=> BroadCasting은 IPv4에서만 제공
<br/>=> 128bit
<br/>=> IP Next Generation
<br/>+) Hop Limit : 데이터그램의 생존 기간을 저장
<br/>
<br/>
<br/>TCP/IP ***
<br/>TCP/IP 4 Layer Model
<br/>1계층 : Network Interface Layer(네트워크) < 1,2 >
<br/>2계층 : Internet Layer(인터넷) < 3 > = IP
<br/>3계층 : Transprot Layer(전송) < 4 > = TCP, UDP
<br/>4계층 : Application Layer(응용) < 5,6,7 > = HTTP, FTP, Telnet, SMTP, DNS (+ NFS, rlogin, TFTP, SNMP )
<br/>
<br/>
<br/>UDP ( User Datagram Protocol ) ***
<br/>헤더구조
<br/>> Source Port : 송신측 응용 프로세스 포트 번호 필드
<br/>> Destination Port : 데이터를 받는 수신측의 응용 프로세스를 식별하기 위한 포트 번호 필드
<br/>> Checksum : 오류 검사를 위한 필드, 전송 중에 세그먼트가 손상되지 않았음을 확인할 수 있다.
<br/>> Length : UDP 헤더와 데이터 부분을 포함한 데이터 그램의 길이를 나타내는 필드
<br/>
<br/>
<br/>TCP ( Transmission Control Protocol ) vs UDP ( User Datagram Protocol ) ***
<br/>1)
<br/>TCP : Connection - Oriented 방식
<br/>UDP : Connectionless 방식
<br/>2)
<br/>TCP는 전달된 패킷에 대한 수신측의 인증이 필요하다.
<br/>그래서 TCP가 UDP보다 신뢰성이 높다.
<br/>그래서 TCP가 UDP보다 Header부분이 크다.
<br/>그래서 TCP가 UDP보다 속도가 느리다.
<br/>UDP는 실시간 데이터 or 동영상 전송에 사용된다.
<br/>
<br/>3)
<br/>TCP는 데이터를 패킷 단위로 전송하고
<br/>UDP는 데이터를 블록 단위로 전송한다.
<br/>
<br/>
<br/>Well - Known Port Number ***
<br/>HTTP - 80
<br/>FTP-Data - 20
<br/>FTP - 21
<br/>SSH - 22
<br/>Telnet - 23
<br/>SMTP - 25
<br/>POP3 - 110
<br/>
<br/>DNS ( Domain Name Server ) **
<br/>1) 다른 호스트에 접근하고자 할 때, 기억하기 어려운 IP 주소 대신, 이해하기 쉬운 계층적 호스트 이름을 제공하는 서비스or프로토콜
<br/>2) 호스트 이름에 대한 분산 데이터베이스이다.
<br/>3) 호스트 이름들은 논리적인 구조를 형성하고 있다.
<br/>
<br/>
<br/>프로토콜 종류
<br/>
<br/>ARP (Address Resolution Protocol ) ***
<br/>=> 호스트의 IP Address(논리적 주소)를 호스트와 연결된 네트워크 접속장치의 MAC Address(물리적 주소)로 변역해주는 프로토콜
<br/>=> IP Address가 중복되어 사용되는지 찾을 수 있다.
<br/><-> RARP : MAC Addrss를 IP주로소로 변환(물->논)
<br/>
<br/>ICMP ( Internet Control Message Protocol ) ***
<br/>=> IP에서의 오류제어를 위해 사용되며 시작지 호스트의 라우팅 실패를 보고
<br/>=> IP 데이터 그램 형식으로 전송
<br/>=> Ping 명령어를 사용하여 반향과 회답 메시지를 지원(신뢰성 테스트)
<br/>=> 원래의 데이터 그램이 TTL 초과시 시간초과 메시지를 보낸다.
<br/>=> 네트워크 구획 내의 모든 라우터의 주소를 결정하기 위해 라우터 갱신 정보 메시지를 보낸다.
<br/>
<br/>SNMP ( Simple Network Management Protocol ) ***
<br/>=> 호스트나 라우터, 다른 컴퓨터나 장치들을 감시하고 관리하기 위한 목적의 표준 프로토콜
<br/>=> 네트워크 문제점을 시스템 관리 프로그램이 발견할 수 있다.
<br/>=> 데이터 전송은 UDP를 사용한다. 
<br/>=> 응용 계층 프로토콜이다.
<br/>=> RFC 1157에 규정되어 있다.
<br/>문제점 > 보안에 취약 / SNMP MIB 호환성이 약하다. 그리고 Polling Overhead가 크다.
<br/>
<br/>SMTP ( Simple Mail Transfer Protocol ) **
<br/>=> 인터넷 전자 우편을 위한 프로토콜 ( <-> POP3 ) & MIME 
<br/>=> 두 호스트 간 메시지 전송을 제공한다.
<br/>=> 전송에 대해 TCP를 사용한다.
<br/>
<br/>IGMP ( Internet Group Management Protocol ) ***
<br/>=> 멀티캐스트 라우터에서 멀티캐스트 그룹을 유지할 수 있도록 메시지를 관리하는 프로토콜
<br/>=> 인근의 라우터들에게 알리는 수단
<br/>=> 데이터의 멀티 캐스팅을 위해 개발된 프로토콜
<br/>=> 시작지 호스트에서 여러 목적지 호스트로 데이터를 전송할 때 사용된다.
<br/>=> 비대칭 프로토콜이다.
<br/>=> TTL이 제공된다.
<br/>=> 최초의 리포트를 잃어버리면 갱신하지 않고 그대로 진행한다.
<br/>
<br/>Telnet ***
<br/>=> 원격지 컴퓨터를 엑세스 하기 위한 TCP/IP 기반의 프로토콜
<br/>=> 로컬의 단말기에 의해 사용되며 원격의 상대 호스트에 접속하기 위한 프로토콜
<br/>
<br/>FTP ( File Transfer Protocol ) ***
<br/>=> 인터넷에서 파일을 송수신하는 전송 규악이다.
<br/>=> 파일을 업로드 할 수 있다.
<br/>=> 서버에 접속해 자료를 전송받는다.
<br/>
<br/>RIP ( Routing Information Protocol ) ***
<br/>=> 홉 카운팅 기반으로 경로를 설정하는 프로토콜
<br/>=> 패킷 전송의 최적 경로를 위해 다른 라우터들로부터 정보를 수집하는데, 최대 홉이 15를 넘지 못하는 프로토콜
<br/>
<br/>라우팅 프로토콜 **
<br/>=> IGRP, RIP, OSPF, BGP
<br/>
<br/>
<br/>기타
<br/>
<br/>Ping Program *
<br/>=> TCP/IP를 사용하는 응용 프로그램
<br/>=> 왕복 시간을 측정할 수 있다.
<br/>=> 원격 호스트와의 연결 상태를 진단할 수 있다.
<br/>
<br/>NAT ( Network Address Translation ) **
<br/>=> 사설 IP 주소를 공인 IP 주소로 바꿔주는데 사용하는 통신망의 주소변환기술
<br/>=> 한정된 공인 IP 주소를 절약할 수 있다.
<br/>=> 내부 네트워크를 보호할 수 있다.
<br/>
<br/>SSH ( Secure SHell ) **
<br/>=> 원격에 있는 호스트 접속시 암호화된 패스워드를 이용하여 보다 안전하게 접속할 수 있는 프로토콜
<br/>=> 포트포워딩(Prot Fowarding) 기능을 통해서 암호화를 지원하지 않는 프로그램의 안전한 사용을 지원한다.
<br/>=> 압축, 인증, 암호화 기능이 들어가 있다.
<br/>=> 사용처 : 이메일 통신의 암호화 / 파일 복사의 암호화 / 프로그램의 원격 실행
<br/>=> TCP 22번 포트 사용
<br/>
<br/>IP Protocol ’s Header Checksum *
<br/>체크섬 필드를 0으로 하여 계산한다.
<br/>
<br/>TTL ( Time To Live )
<br/>IP 패킷이 네트워크 상에서 얼마동안 존재할 수 있는가를 나타낸다.
<br/>일반적으로 라우터의 한 홉(Hop)을 통과할 때마다 TTL 값이 1씩 감소한다.
<br/>호스트까지의 경로를 추적할 때 TTL 값을 사용한다.
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>2과목. 네트워크 일반
<br/>
<br/>데이터 전송 제어 절차 ***
<br/>회선연결 -> 링크설정 -> 데이터 전송 -> 링크해제 -> 회선해제
<br/>
<br/>PCM방식 ***
<br/>아날로그 신호 -> 표본화 -> 압축 -> 양자화 -> 부호화 -> 디지털 신호
<br/>
<br/>
<br/>TCP/IP 프로토콜 계층 구조에서 데이터 단위 **
<br/>
<br/>1계층 : Bit(비트)
<br/>2계층 (데이터링크계층) : Frame(프레임)
<br/>3계층 (네트워크계층) : Packet(패킷)
<br/>4계층 (전송계층) : Segment(세그먼트)
<br/>
<br/>
<br/>IEEE 802 표준 **
<br/>IEEE 802.11 : 무선 LAN -> 802.11n : 100Mbps이상의 전송속도 제공
<br/>IEEE 802.15 : 무선 PAN
<br/>IEEE 802.2 : LLC
<br/>IEEE 802.3 : Ethernet
<br/>IEEE 802.4 : Token Bus
<br/>IEEE 802.5 : Token Ring -> Round Robin 방식 구현
<br/>
<br/>
<br/>CSMA/CD ***
<br/>신호를 전송하기 전에
<br/>다른 신호 전송이 이루어지고 있는 가를 살핀 후 전송하고
<br/>전송 중에 충돌이 있는지를 감시하는 LAN 전송기술
<br/>충돌이 발생하게 되면, 충돌한 데이터들은 버려지고
<br/>데이터를 전송한 장치들에게 재전송을 요구한다.
<br/>버스구조에서 사용한다.
<br/>802.11 표준안을 따른다.
<br/>Ethernet의 기반 네트워킹 기술이다.
<br/>
<br/>
<br/>OSI 7 Layer ***
<br/>1 : 물리
<br/>2 : 데이터링크 = 물리적 링크 간의 신뢰성 있는 전송을 제공 / 동기화 / 에러제어(오류 검출 및 정정) / 흐름제어 / 비트를 프레임화
<br/>3 : 네트워크  = 호스트들의 주소체계 설정 / 라우팅 / 경로선택 => IP, ARP, DDP, IPX, ICMP
<br/>4 : 전송 > TCP, UDP, SPX
<br/>5 : 세션 = 대화제어 / 연결 설정 종료 / 동기화
<br/>6 : 표현 = 데이터 전환 / 암호화 / 압축 / 그래픽 명령어 해석
<br/>7 : 응용 > FTP, SNMP, Telnet
<br/>
<br/>
<br/>ARQ ( Automatic Repeat reQuest ) ***
<br/>오류검출방식
<br/>> Stop - and - Wait ARQ
<br/>: 매 프레임 전송 시마다 일단 멈추고 응답이 오기를 기다리는 방식. ACK 응답이면 전송하지 않고, NAK인 경우에 재전송.
<br/>> Go - back - N ARQ ***
<br/>: 에러가 발생한 블록 이후의 모든 블록을 재전송하는 방식
<br/>> Selective - repeat ARQ ***
<br/>: 수신측에 오류가 발견된 프레임에 대하여 재전송 요청이 있을 경우, 잘못된 프레임만을 다시 전송하는 방식
<br/>> Adaptive ARQ
<br/>
<br/>
<br/>멀티플렉싱이란? **
<br/>하나의 회선을 여러 사용자들이 동시에 채널을 나누어 사용할 수 있도록 하는 방법
<br/>주파수 분할, 코드 분할, 시간 분할
<br/>> FDM : 다수의 작은 대역폭으로 분할 전송하는 방식
<br/>> TDM
<br/>> WDM
<br/>
<br/>
<br/>데이터 흐름제어 **
<br/>1) Stop and Wait
<br/>2) XON/OFF
<br/>3) Sibling Window
<br/>
<br/>
<br/>패킷 교환 *
<br/>패킷과 함께 오류제어를 함으로써 고품질/고신뢰성 통신이 가능하다.
<br/>패킷을 전송 시에만 전송로를 사용하므로 설비 이용 효율이 높다
<br/>패킷 교환 방식으로는 가상회선 방식(연결형)과 데이터그램(비연결형) 두가지가 있다.
<br/>
<br/>패킷 교환기의 기본 기능
<br/>1) 통신을 하고자 하는 단말기 사이에 가상 회선을 설정하고 해제하는 기능
<br/>2) 다수의 중계로에서 최적의 경로 선택 기능
<br/>3) 전송량을 제어하여 수신 버퍼의 범람 방지 기능
<br/> 
<br/>
<br/>
<br/>
<br/>
<br/>3과목. NOS
<br/>
<br/>
<br/>자주 출제되는 Linux vi 명령어 **
<br/>:wq = 변경된 내용을 저장한 후 종료
<br/>:q = 저장이 되있지 않으면 종료하지 않는 종료 명령어
<br/>:x = 문자 하나 삭제
<br/>
<br/>
<br/>자주 출제되는 Linux 명령어 **
<br/>.ps = 프로세스의 상태를 확인하는 명령어
<br/>cd ~ = HOME 디렉토리로 이동하는 명령어
<br/>cp = 파일을 다른 이름으로 또는 다른 디렉터리로 복사할 때 사용하는 명령어
<br/>change = 사용자에 대한 패스워드의 만료기간 및 시간 정보를 변경하는 명령어
<br/>man = 사용법을 불러오는 명령어
<br/>find = 특정한 파일을 찾는 명령어
<br/>usermod = 사용자 계정의 정보를 수정하는 명령어
<br/>pwd = 디렉토리의 경로를 절대경로 방식으로 보여주는 명령어
<br/>free = 사용 중인 메모리, 사용 가능한 메모리 용량을 알 수 있는 명령어
<br/>mkdir = 디렉터리를 생성하는 명령어
<br/>rmdir = 디렉터리를 삭제하는 명령어
<br/>nslookup = 네임서버의 동작 확인 및 운영관리를 위한 명령어
<br/>ifconfig = Windows Ipconfig와 같은 역할을 하는 명령어
<br/>Permission
<br/>> chmod = 파일 접근 권한 변경 명령어
<br/>> chgrp = 파일의 그룹 소유권을 변경하는 명령어
<br/>> chown = 파일의 소유권을 변경하는 명령어
<br/>
<br/>
<br/>Linux Directory 구성 ***
<br/>/etc = 시스템 설정 파일이 저장되는 디렉터리
<br/>/bin = 기본 명령들이 저장되는 디렉터리
<br/>/tmp = 임시 파일이 저장되는 디렉터리
<br/>/boot = 부팅 가능한 커널 이미지 파일을 담고 있는 디렉터리
<br/>/var = 시스템의 로그 파일과 메일이 저장되는 디렉터리
<br/>/lib = 각종 라이브러리가 저장되는 디렉터리
<br/>/dev = 시스템의 각종 디바이스에 대한 드라이버들이 저장되는 디렉터리
<br/>/usr = 라이브러리 및 매뉴얼 페이지가 저장되는 디렉터리
<br/>/root = 루트 사용자의 홈 디렉터리로 루트 사용자만 접근 가능한 디렉터리
<br/>
<br/>
<br/>Daemon **
<br/>고유한 기능에 해당되는 이벤트가 발생되면 동작한다.
<br/>시스템 서비스를 지원하는 프로세스
<br/>백그라운드로 실행
<br/>서버의 역할을 수행하거나 그 기능을 도와준다.
<br/>
<br/>
<br/>SAMBA ***
<br/>Linux와 다른 이기종의 파일 시스템이나 프린터를 공유하기 위해 설치하는 서버 및 클라이언트 프로그램
<br/>하나 또는 그 이상의 파일 시스템을 공유할 수 있다.
<br/>서버와 클라이언트에 설치되어 있는 프린터들을 공유할 수 있다.
<br/>클라이언트들이 지역 네트워크 호스트들을 볼 수 있도록 한다.
<br/>설치는 RPM으로 할 수 있다.
<br/>> RPM이란 특정 시스템에 이미 최적화되어 있어서
<br/>컴파일 된 소스를 묶어서 다른 시스템에서 스대로 사용할 수 있는
<br/>Linux binary package를 말한다
<br/>option -> --nodeps : 의존성
<br/>option -> --force : 기존 파일에 강제적으로 설치
<br/>
<br/>
<br/>Hyper - V ***
<br/>고가의 서버 컴퓨터 한 대에 여러 대의 서버를 가상화하여 실제 물리적인 서버 컴퓨터의 효율을 극대화하는 기술
<br/>하드웨어 사용률을 높여준다
<br/>유지 비용을 줄일 수 있다
<br/>개발 및 테스트 효율성을 향상시킨다
<br/>서버 가용성이 늘어난다
<br/>하드웨어 데이터 실행 방지(DEP)가 필요하다.
<br/>스냅숏을 통하여 특정 시점을 기록할 수 있다.
<br/>
<br/>
<br/>DHCP ( Dynamic Host Configuration Protocol ) ***
<br/>관리자는 중앙에서 대부분의 TCP/IP 주소 정보를 자동으로 관리할 수 있다.
<br/>로컬 서브넷에 있는 컴퓨터에 IP Address 정보를 할당하고 유지한다.
<br/>클라이언트에게 자동으로 IP Address를 할당해줄 수 있다.
<br/>IP Address 관리가 용이하다.
<br/>IP Address 사용을 추적할 수 있다.
<br/>사용자들이 자주 바뀌는 학교와 같은 환경에서 특히 유용하다.
<br/>모든 DHCP 서버는 최소한 하나의 DHCP 범위를 가져야 한다.
<br/>DHCP 범위에서 정적으로 할당된 주소가 있다면 해당 주소를 제외해야 한다.
<br/>DHCP 범위가 겹쳐도 무관하다.
<br/>
<br/>
<br/>역방향 조회 **
<br/>클라이언트가 IP주소를 제공하면 도메인을 반환하는 것
<br/>-> PTR : IP Address를 Domain Name으로 역 매핑하는 DNS 레코드
<br/>
<br/>정방향 조회 *
<br/>호스트 이름을 IP주소로 해석해주는 것
<br/>
<br/>
<br/>netstat 명령어 **
<br/>1.
<br/>인터페이스의 구성정보
<br/>라우팅 테이블
<br/>네트워크 인터페이스의 상태 정보
<br/>2.
<br/>TCP 접속 프로토콜 정보
<br/>ICMP 송수신 통계
<br/>UDP 대기용 Open 포트 상태
<br/>3.
<br/>IP
<br/>TCP
<br/>UDP
<br/>netstat -r : 라우팅 테이블을 확인할 수 있는 명령옵션
<br/>
<br/>
<br/>Swap Memory(가상 메모리) **
<br/>하드디스크의 일부를 메모리처럼 사용하는 방법
<br/>서버의 성능에 영향을 미친다.
<br/>각 드라이브 별로 필요한 크기만큼 가상메모리를 설정할 수 있다.
<br/>
<br/>
<br/>NTFS ( New Technology File System )
<br/>프록시 서버의 캐시에 사용될 수 있는 파일 시스템
<br/>파일 또는 디렉터리의 사용허가와 보안 기능을 갖는 Window 2003 Server의  기본 파일 시스템
<br/>파일과 디렉터리의 압축을 지원한다.
<br/>POSIX ( Portable Operation System Interface ) 요구 사항을 지원한다.
<br/>FAT, HPFS 보다 더 큰 파일과 파티션 사이즈를 지원한다.
<br/>
<br/>
<br/>Active Directory
<br/>사용자, 사용자 그룹, 네트워크 데이터 등을 하나로 통합 관리하는 인터페이스
<br/>LDAP를 만족하며, 작업 그룹들에게는 웹 사이트처럼 도메인 이름이 부여된다.
<br/>=> 정보 보안 / 정책 기반 관리 / 확장성
<br/>논리적 구조 : Domain / Tree / Forest
<br/>DNS기반의 네임 스페이스를 이용한다.
<br/>인터넷을 통한 로그온 인증도 가능하다.
<br/>
<br/>
<br/>
<br/>IIS ( Internet Information Server )
<br/>설정 가능한 서비스 : FTP, NNTP, WWW
<br/>
<br/>
<br/>
<br/>자주 출제되는 용어 정리 ***
<br/>
<br/>포리스트(Forest)
<br/>두 개 이상의 트리가 연결되어 구성되는 구조
<br/>
<br/>SSL ( Secure Socket Layer )
<br/>보안강화
<br/>
<br/>Shell
<br/>사용자가 내린 명령어를 Kernel에 전달해주는 역할
<br/>
<br/>Power Shell
<br/>서버 상의 수많은 기능의 손쉬운 자동화를 지원하는 것
<br/>기존의 DOS 명령어도 사용할 수 있다.
<br/>스크립트는 텍스트로 구성되며 콘솔에서 대화형으로 사용될 수 있다.
<br/>대소문자를 구분하지 않는다.
<br/>
<br/>AD 인증서 서비스
<br/>Active Directory 서비스 중에 사용자 지정된 공개 키 인증서를 만들고 배포, 관리하는 방법을 제공하는 서비스
<br/>
<br/>httpd.conf
<br/>Apache 웹 서버 운영 시 서비스에 필요한 여러 기능들을 설정하는 파일
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>4과목. 네트워크 운용기기
<br/>
<br/>
<br/>RAID
<br/>여러 개의 디스크로 구성된 디스크 배열을 의미한다.
<br/>
<br/>- RAID 1
<br/>: Mirroring 이라고 불린다.
<br/>: 한 드라이브에 기록되는 모든 데이터를 다른 드라이브에 복사해 놓는 방법
<br/>
<br/>- RAID 5
<br/>: Parity가 있는 RAID 방식 ( 3과목에서 출제 )
<br/>
<br/>
<br/>라우터 ( Router )
<br/>네트워크 상의 패킷을 전달하는 장비
<br/>네트워크 상에 발생한 트래픽 제어로 최적의 경로를 설정하는 장비
<br/>패킷을 적절한 크기로 분할하거나 재조립하고 이들을 다시 캡슐화하는 기능을 한다.
<br/>네트워크를 분리하는데 사용할 수 있다.
<br/>그리고 그 분리된 네트워크를 연결해주며, 네트워크 층 간을 연결해주는 기능을 한다.
<br/>검색한 경로 정보를 라우팅 테이블에 저장한다.
<br/>-> 네트워크 계층에서 서비스를 한다, 네트워크 계층에 속해있다.
<br/>
<br/>
<br/>스위칭 허브 ( Switching hub )
<br/>Star Topology에서 동시에 두 개 이상의 Connection을 할 수 있는 장치
<br/>연결된 각 포트마다 전용 대역폭 할당이 가능하여 연결된 장치 수에 따라 속도가 낮아지지 않고 속도를 보장한다.
<br/>데이터를 목적지 노드로 전송할 때, MAC Address를 기준으로 Forwarding 한다.
<br/>-> 물리 계층을 사용한다.
<br/>
<br/>
<br/>게이트웨이 ( Gateway )
<br/>전혀 다른 프로토콜을 채용한 네트워크 간의 인터페이스이다.
<br/>Transport 계층 간을 연결하는 네트워크 장비
<br/>이기종간의 네트워크 특성을 상호 변환하여 호환성이 있는 정보 전송을 가능하게 해주는 기기
<br/>데이터 변환의 기능을 가지고 있어 네트워크 내 의 병목 현상을 일으키는 지점이 될 수 있다.
<br/>OSI 모든 계층에 동작하여 전화망이나 인터넷망과 같이 이기종의 통신망을 상호 접속시켜 주는 장비
<br/>
<br/>
<br/>리피터 ( Repeater )
<br/>장비간 거리가 증가하거나 케이블 손실로 인한
<br/>신호감쇠를 재생시키기 위한 목적으로 사용되는 네트워크 장치.
<br/>즉, 거리를 연장하고, 접속되는 노드의 수를 증가시키기 위한 장치이다.
<br/>데이터 신호를 증폭시키고 정확하게 되살려서 전달하는 중계기 역할을 수행한다.
<br/>-> 물리계층에서 동작한다.
<br/>
<br/>
<br/>브리지 ( Bridge )
<br/>동일한 프로토콜을 사용하거나 다른 프로토콜을 사용하는 LAN 연결장치이다.
<br/>물리 계층 및 데이터링크 계층(MAC)의 연결 기능을 제공한다.
<br/>네트워크를 일정한 규칙에 따라 분리하여 검사대상을 줄여준다.
<br/>
<br/>
<br/>광섬유( Fiber Optic )
<br/>코어와 클래드로 구성된다.
<br/>빛을 이용하여 정보를 전송하므로 보안 및 잡음 등에 강하고 손실률이 낮다.
<br/>멀티 모드형과 싱글 모드 형이 있다.
<br/>대역폭이 커서 다양한 서비스가 가능하다.
<br/>-> 구조 불완전, 불순물, 재료 고유 손실이 있을 수 있다.
<br/>
<br/>
<br/>용어 정리
<br/>
<br/>Ad - Hoc
<br/>무선랜 구성 방식 중 하나로, 무선랜 카드를 가진 컴퓨터 간의 네트워크를 구성하여 작동하는 방식
<br/>
<br/>10BASE-T에서의 10은 데이터 전송속도 10Mbps를 의미한다.
<br/>
<br/>NIC ( Network Interface Card )
<br/>케이블을 통해 데이터 전송을 하기 위한 장치이다.
<br/>네트워크 내에서 NIC는 유일한 MAC 주소를 가지고 있다.
<br/>병령 데이터를 받아 직렬로 전송한다.