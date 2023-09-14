import numpy as np


def my_func2(x):

	return 3*x*(np.exp(x))




def numerical_derivative(f,x):

	delta_x = 1e-4

	return ( f(x+delta_x) - f(x-delta_x) ) / (2*delta_x)




# 함수 f(x) = 3xe**x 를 미분한 함수를 f'(x)라할경우 , f'(2)를 구하라 
# x=2 에서 값이 미세하게 변할 때 , 함수 f는 얼마나 변하는가





result = numerical_derivative(my_func2, 2)

print (result)

