import numpy as np


A = np.array(  [1, 2 , 3] )
B = np.array(  [4, 5 , 6] )



#vertor A,B출력

print("A ==",A, ",B==",B)

#vector A, B 형상 출력 = > shape

print("A.shape ==",A.shape, ",B.shape==",B.shape)


#vector A, B 차원 출력 = > ndim

print("A.ndim ==",A.ndim, ",B.ndim==",B.ndim)





#사칙연산
print ( A + B);
print ( A - B);
print ( A * B);
print ( A / B);











A = np.array( [ [1, 2 , 3] , [4, 5 , 6] ] )
B = np.array( [ [-1, -2 , -3] , [-4, -5 , -6] ] )


#vertor A,B출력

print("A ==",A, ",B==",B)

#vector A, B 형상 출력 = > shape

print("A.shape ==",A.shape, ",B.shape==",B.shape)


#vector A, B 차원 출력 = > ndim

print("A.ndim ==",A.ndim, ",B.ndim==",B.ndim)





C = np.array([1,2,3])

print ("C.shape ==" , C.shape)

#행열이바뀜
C = C.reshape(1,3)

print("C.reshape ==", C.shape)




