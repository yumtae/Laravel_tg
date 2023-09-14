import numpy as np
A= np.array([ [10,20,30,40], [50,60,70,80] ])


print (A, "\n")
print ("A.shape ==", A.shape, "\n")


#행렬 A의 itretor 생성

it = np.nditer(A, flags =['multi_index'], op_flags=['readwrite'])


#순서대로 읽는다  0,0  0,1  0,2  0,3  1,0 .... 
while not it.finished:
		idx = it.multi_index

		print('current value =>' , A[idx])


		it.iternext()

