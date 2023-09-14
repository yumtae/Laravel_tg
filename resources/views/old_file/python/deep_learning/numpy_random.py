import numpy as np



#0~1사이의 렌덤숫자발생 
random_number1 = np.random.rand(3)
random_number2 = np.random.rand(1,3)
random_number3 = np.random.rand(3,1)


print("random_number1 = " , random_number1, "random_number1.shape =" , random_number1.shape , '\n')
print("random_number2 = " , random_number2, "random_number2.shape =" , random_number2.shape , '\n')
print("random_number3 = " , random_number3, "random_number3.shape =" , random_number3.shape , '\n')





X = np.array([2,4,6,8])

#반복문을 사용하지않아도 모든값을 계산함
# 합 / 지수함수(exponential function), 로그함수 (logarithmic function) 



print("np.sum(X) ==" , np.sum(X))
print("np.exp(X) ==" , np.exp(X))
print("np.log(X) ==" , np.log(X))






