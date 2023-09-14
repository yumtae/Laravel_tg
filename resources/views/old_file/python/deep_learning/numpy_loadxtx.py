import numpy as np
#머신러닝 코드에서 입력데이터와 정답데이터를 분리하는 프로그래밍기법

loaded_data = np.loadtxt('./data-01.csv' , delimiter=',' , dtype=np.float32 );


# 1. 1열부터 3열까지
# 2. 4열의 데이터

x_data=loaded_data[ :, 0:-1]
t_data=loaded_data[ :, [-1] ]


#데이터 차원 및 shape 확인

print("x_data.ndim = " , x_data.ndim , "x_data.shape = ", x_data.shape)
print("t_data.ndim = " , t_data.ndim , "t_data.shape = ", t_data.shape)






