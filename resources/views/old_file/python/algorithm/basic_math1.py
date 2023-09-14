'''  10757 큰수 A + B  다른언어에서는 int값을넘어서서 에러가나지만 파이썬은 괜츈
A, B = map(int, input().split());

print(A+B);
 '''


'''2839 설탕 배달'''

N = int(input());

bong = 0;


while N >= 0:

	if N % 5 == 0 : 
		
		bong += N // 5
		print(bong)
		break;

	N -= 3
	bong+=1

else:
	print(-1)


'''10250 ACM호텔

import math
#테스트케이스
T = int(input());
cnt = 0;


while cnt < T:

#호텔 높이/넓이/N번째손님
H, W , N = map(int, input().split());

X = N % H
Y = math.ceil(N / H)

for i in range(1,H+1):
	
	if X == 0 :
		X = H;



print(X , str(Y).zfill(2) ,sep='')

cnt+=1;	
	
'''






''' 2869 달팽이는 올라가고 싶다

#내려가기전 하루의 최고높이 구하기
# V < N * A -(N-1) * b

import math
#5 1 6
A , B , V = map(int , input().split());



#((높이-하루올라긴길이) /  하루동안 올라갔다 내려온 거리) + 하루
#((6-5)/4) +1
result = ( ( V - A ) / A - B) + 1

# 3.4면 4일차로 올림
print(math.ceil(result))

'''

''' 시간초과 달팽이
X = 0 ;
cnt = 0 ;


while 1:

	cnt+=1; 

	X +=A ;  

	if V <= X: 
		print(cnt);
		break;

	X -=B

'''












''' 1193 분수찾기

n =  int(input())

#몇번째 라인인가
line = 0

sum = 0

# 10 > 0
while n > sum:
	
	#10을넣었을경우 4에서 멈춤 = 4번째줄에있음
	line+=1

	# line까지의 합(47번째줄)    4 * 4+1 /2 = 10 
	sum =  int(line * (line+1) / 2)
	
	#print('라인= ',line,' 합 = ',sum)

	


#라인에서 몇번째인가? 10 - 6
index  = n -  int(line * (line-1) / 2);

#print('index= ',index)


#라인이 짝수면 역방향 홀수면 정방향
if line%2 == 0:		
	a =  line + 1 - index  
	b =  index 
else:
	a = index
	b = line + 1 - index 



print(a,'/',b,sep='')	

#찾아야할 규칙
# 1/1						1
# 1/2 2/1					3
# 3/1 2/2 1/3				6
# 1/4 2/3 3/2 4/1			10



###########나와야할 값
# 1/1 1/2 1/3 1/4 1/5	
# 2/1 2/2 2/3 2/4  	
# 3/1 3/2 3/3 		
# 4/1 4/2 			
# 5/1

###########순서
# 1  2  6  7  15  			
# 3  5  8  14 
# 4  9  13 
# 10 12 
# 11 
 '''














''' 1193 분수찾기 '''










''' 2229벌집 
N = int(input())
cnt = 1
i = 1

# i값 1 7 19 37 61
while i < N :
	i +=  6 * cnt
	cnt +=1

print( cnt )
		
'''






'''1712 손익분기점

#고정비용 / 재료비 / 판매가격
A, B , C  = map( int, input().split() )

# 따라서, A/(C-B) 대 생산했을 때 수입과 비용이 같아지기 때문에 +1부터 수입이 많아지게 된다.

if  B >= C :
	print(-1)
else:
	print( int(A/(C-B)+1) )



'''






