import numpy as np


# f= 다변수 함수 / x = 모든변수를 포함하고있는 numpy 객체(배열,행렬)   -  디버그 버전
def numerical_derivative(f,x):
		delta_x = 1e-4
		grad = np.zeros_like(x)  # 계산된 수치미분 값 저장 변수 0으로초기화 zeros_like

		print("debug1 . initial input variable = ", x)
		print("debug2 . initial input grad = ", grad)
		print(" =============================== ")


		# 모든 입력변수에 대해 편미분하기 위해 iterator 획득 ( 원소의 처음부터 끝까지 가르킴 )
		it = np.nditer(x, flags = ['multi_index'], op_flags = ['readwrite'])


		#변수의 개수 만큼 반복
		while not it.finished:
			idx = it.multi_index
			
			print("debug3 . idx= ", idx , " , x[idx]= ", x[idx] )

			tmp_val = x[idx] #numpy 타입은 mutable 이므로 원래 값 보관

			# ↓ 하나의 변수에 대한 수치미분 계산(기존코드 동일)
			x[idx] = float(tmp_val) + delta_x
			fx1 = f(x) # f(x+delta_x)

			x[idx] = tmp_val - delta_x
			fx2=f(x)	#f(x-delta_x)
			grad[idx] = (fx1 - fx2) / (2*delta_x)


				
			
			print("debug4, grad[idx] = " , grad[idx])
			print("debug5, grad =" , grad)
			print(" =============================== ")



			x[idx] = tmp_val
			it.iternext()



		return grad








def func1(input_obj):
	
	x = input_obj[0]


	return x**2





numerical_derivative(func1,np.array([3.0]))


