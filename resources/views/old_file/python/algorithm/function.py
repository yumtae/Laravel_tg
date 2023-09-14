




def hansu(n):
	
	cnt = 0
	for i in range(1, n+1):
		
		if i < 100:
			cnt +=1
		else:
			num_list = list(map(int ,str(i) ) )

			if num_list[0] - num_list[1] == num_list[1] - num_list[2]  :
				cnt +=1
		
			
	return cnt



n = int(input())


print( n ,'의 한수: ' ,hansu(n) )



''' 셀프넘버 4673번

def d(n):
	#각 자리수를 더하는 공식
	n = n + sum(map(int,str(n)))

	return n


Nonself_num = set()


for i in range(1,10001):
	Nonself_num.add(d(i));



for j in range(1,10001):
	if j not in Nonself_num:
		print(j)

'''



''' 기본함수 형태
def hap(a):
	return sum(a)

'''