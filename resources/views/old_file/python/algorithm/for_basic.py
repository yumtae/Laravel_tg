'''더하기 사이클'''
n = input()

#최종 N을 찾기위해 다른값을 이용
num = n
cnt = 0

while 1:
	
	if len(num) == 1:
		num ="0"+num
	new_n = str( int(num[0]) + int(num[-1]) )  #   2  6
	num = num[-1] + new_n[-1]  
	cnt+=1
	if num == n   :
		print(cnt)
		break














''' 0 0 일떄멈추기
while 1:
	A ,B = map(int,input().split())
	if A == 0 and B==0:
		break
	print (A+B)
'''







'''X보다 작은 수
N , X = map(int,input().split())
#원하는만큼 값을 받기위해 N을추가 N이없어도 저상적
A_LIST = list(map(int,input().split()[:N]))

for i in A_LIST:
	if i  < X:
		print (i, end=' ')

'''



'''별찍기


n = int(input())
for i in range(1,n+1):
	print(" "*(n-i) , "★"*i)






n = int(input())
for i in range(1,n+1):
	print("★"*i)



for i in range(0,n+1):
	for j in range(0,i):
		print('★',end='')
	
	print();

'''



''' 입력받은값부터 빠지게
n = int(input())

for i in range(0,n):
	print(n-i)


--------------


n = int(input())

for i in range(1,n+1):
	A,B = map(int, input().split() )
	print('Case #:',i,A+B)




'''



''' 빠른 A+B
import sys
input = sys.stdin.readline

n = int(input())

for i in range(0,n):
	A , B = map(int, input().split() )
	print(A+B)
'''

''' 합구하기
n = int(input())
for i in range(0,n):
	n = n+i  


print(n)
 '''


'''A+B-3
x = int(input())
count=0
while count < x:
	count +=1
	A, B = map(int , input().split() )

	print(A+B)

'''






''' 입력받은 구구단
a = input()
for i in range(1,10):
	print( a, '*' , i , '=' , a*i )
'''