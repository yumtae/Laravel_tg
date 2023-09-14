A , B , C = map(int, input().split())


#x = int(input())
#y = int(input())




''' if기본
if  90 <= x <= 100:
	print('A');
elif 80 <= x <= 89 :
 	print('B');
elif 70 <= x <= 79 :
 	print('C');
else:
	print('D');
'''




''' 윤년구하기
if   x % 4 == 0 :
	if   x % 100 != 0 or x%400 == 0 :
		print('1');
	else :
		print('0');
else:
	print('0');
'''






''' 	사분면 고르기
if   x > 0 and y > 0 :
	print('1');
elif x < 0 and y > 0 :
	print('2');
elif x < 0 and y < 0 :
	print('3');
elif x > 0 and y < 0 :
	print('4');
'''


''' 	알람시계 
y = y - 45

if y > 60 :
	y = y-60 
	x = x + 1
elif y < 0:
	y = y+60
	x = x-1

if x > 23:
	x = x-24
elif x < 0:
	x= x +24

print (str(x)  +  str(y) )
 '''



'''알람시계2
H, M = map(int, input().split())
if M >= 45:
	print(H, M-45)
else:
	if H == 0:
		print(23, M+15)
	else:
		print(H-1, M+15)
'''



'''오븐시계1


H, M = map(int, input().split())
x = int(input())

#ADD_H =  (M + x) // 60 
#ADD_M =  (M + x)  % 60 

if M + x > 60 :   
		
	if H+ADD_H >= 24:
		print( H+ADD_H - 24 , ADD_M) 
	else :
		print(H+ADD_H , ADD_M)
else:
	print(H , ADD_M)

오븐시계2


H += x // 60
M += x % 60

if M >= 60:
	H = H+1
	M = M-60

if H >= 24:
	H = H-24
	

print(H,M)


'''




'''주사위세개'''




if A == B == C:
	print(10000 + A *1000)
elif A == B: 
	print(1000 + A *100)
elif B == C:
	print(1000 + B *100)
elif A == C:
	print(1000 + C *100)
else :
	print(max(A,B,C) *100)









