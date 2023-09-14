cnt = int(input())


for i in range(cnt):
	arr = list(map(int,input().split()))

	AVG = sum( arr[1:] ) / arr[0] 
	
	hight_avg = 0


	for j in arr[1:]:
		if j > AVG:
			hight_avg+=1

	print_num = hight_avg / arr[0] * 100 

	print( f'{print_num:.3f}%')




'''  8958 OX퀴즈
cnt = int(input())

for i in range(cnt):
	arr = list( input() )
	sum = 1
	score  = 0

	for i in arr:
		if i=='O':
			score += sum
			sum+=1
		else:
			sum = 1
	print(score)

'''





''' 1546 평균

cnt = int(input())

arr = list( map(int,input().split() ) )
max_score = max(arr)

for i in range(cnt):
	
	arr[i] = int(arr[i]) / int(max_score) * 100

	 

print (sum(arr)/cnt)
	
'''


''' 나머지값중 중복아닌 숫자count 
from collections import Counter
arr= []


for i in range(10):
	num = int(input())
	arr.append( num % 42 )
	 
counter = Counter(arr)	
print(len(dict(counter)))

'''




''' 숫자의 개수 2577
a = int(input())
b = int(input())
c = int(input())
num = list(str(a*b*c))

print(num)

for i in range(10):
	print(num.count(str(i)))

'''



''' 9자리중 가장큰수와 몇번째인지 확인
arr= []
for i in range(9):
	arr.append(int(input()))
	
print(max(arr))
print(arr.index(max(arr))+1)

'''




''' 최대값 최소값찾기
n = input()
arr = list(map(int, input().split()))
print( min(arr), max(arr))
'''











