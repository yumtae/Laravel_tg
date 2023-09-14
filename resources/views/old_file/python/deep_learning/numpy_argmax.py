import numpy as np




X = np.array([2,4,6,7])



# 가장큰수 / 가장 작은수 / 가장큰수는 몇번쨰? /가장작은수는 몇번쨰?
print("max ==" , np.max(X) )
print("min ==" , np.min(X) )
print("argmax ==" , np.argmax(X) )
print("argmax ==" , np.argmin(X) )







X = np.array([ [2,4,6] , [1,2,3] , [0,5,8] ])

print("np.max ==" , np.max(X, axis=0) ) # 0 열기준
print("np.min ==" , np.min(X, axis=0) ) # 0 열기준

print("np.max ==" , np.max(X, axis=1) ) # 1 행기준
print("np.min ==" , np.min(X, axis=1) ) # 1 열행기준




print("np.argmax ==" , np.argmax(X, axis=0) ) # 0 열기준
print("np.argmin ==" , np.argmin(X, axis=0) ) # 0 열기준

print("np.argmax ==" , np.argmax(X, axis=1) ) # 1 행기준
print("np.argmin ==" , np.argmin(X, axis=1) ) # 1 열행기준








A = np.ones([3,3])

print("A.shape ==", A.shape, ", A == ", A)



B = np.zeros([3,2])

print("B.shape ==", B.shape, ", B == ", B)





