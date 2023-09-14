'''4948 베르트랑 공준 = 임의의 자연수 n에 대하여, n보다 크고, 2n보다 작거나 같은 소수는 적어도 하나 존재한다 
// 미리소수를구해야 시간초과가 뜨지않는다 1 ≤ n ≤ 123,456 '''




while (1):
	cnt = 0;
	n = int(input())
	m = int((n*2)+1)
	
	if n == 0 :
		break;
			
	for i in range( n, m ):   
		if i == 1 :
			continue;

		for j in range(2,int(i**0.5)+1):    

			if i % j == 0 :  
				break;

		else :
			cnt+=1

	print(cnt)











'''1929 구간 에라토스테네스의 체(소수 구하기) = 제곱근 제거  
m , n = map(int, input().split());


for i in range(m,n+1):
	
	if i == 1:
		continue;

	for j in range(2, int(i**0.5)+1):    
		print("j = ",j,"i = ",i," jegop = ",int(i**0.5)+1);

		if i % j == 0 :
			break;
	else :
		print(i)
		
 '''






'''11653 소인수 분해
n = int(input())

for i in range(2,n+1):	
	if n % i == 0 :	
		while n % i == 0:
#			print("n = ",n , "i = ", i)
			n = n // i ;
			print (i)
		
'''
	






'''2581 구간 소수 구하기 
n = int(input())
m = int(input())

arr= []

for i in range(n,m+1):

	for j in range(2,i+1):
		
		if j == i : 
			arr.append(i);

		if i % j == 0:
			break;

print(arr)

if not arr:
	print(-1);
else:
	print(sum(arr));
	print(min(arr));

'''


	











'''1978 소수찾기
n = int(input())
nums = list(map(int, input().split(' ')))
cnt = 0;



for num in nums:
	
	if num > 1:
		for i in range(2,num+1):
		
			if num % i ==0  :
				if num == i:
					cnt+= 1;
		
	

print(cnt)
'''


