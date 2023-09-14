import numpy as np

A = np.array( [ [1, 2 , 3] , [4, 5 , 6] ]) # 2x3행렬
B = np.array( [ [-1, -2 ] , [ -3 ,-4] , [ -5 , -6] ]) # 3x2행렬




C = np.dot(A,B)  # 행렬 곱 수행


print("A.shape ==",A.shape, ",B.shape==",B.shape)
print("C.shape ==",C.shape)
print(C)






