# 수치 미분 = 주어진 입력값이 미세하게 변할 때 함수 값 f는 얼마나 변하는지를 계산해주는 것을 지칭

# 1. 미분하려는 함수 f(x)정의
# 2. 극한(lim) 개념을 구현하기 위해 △x는 작은 값으로 설정
# 3. 분자 / 분모 구현



def my_func1(x):
	return x**2






#1. f는 미분하려는 함수, 외부에서 def,lambda등으로 정의됨  
#   x는 미군 값을 알고자 하는 입력값, 즉 미세하게 변하는 입력값

def numerical_derivative(f,x):

	delta_x = 1e-4  # 2. lim에 해당되는 매우 작은값

	return (f(x+delta_x) - f(x-delta_x) ) / (2*delta_x)  # 3.분자 / 분모


 


# 함수f(x) =x**2 에서 미분계수 f'(3) 을구하기 , 즉 x=3에서 값이 미세하게 변할 때 , 함수 f는 얼마나변하는가
#f'(x) = 2x


result = numerical_derivative(my_func1,3)

print(result)
 
















