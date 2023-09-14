import numpy as np



#행과 열을 추가하기위한 함수 concatenate

#머신러닝의 회귀코드 구현 시 가중치와 바이어스를 별도로 구분하지않고 하나의 행렬로 취급하기위한 프로그래밍 구현기술


A = np.array([ [10,20,30] , [40,50,60] ])

print(A.shape)


# A 메트릭스에 추가할 행 값 , 1행 3열로 reshape 
# 행을 추가하기 때문에 우선 행열을 3열으로 만들어야함 
row_add = np.array([70,80,90]).reshape(1,3)
 

# A메트릭스에 추가할 열값 , 2횅 1열로 생성
# 열을 추가하기 때문에 2행으로 만들어줌
column_add = np.array([1000,2000]).reshape(2,1)

print(column_add.shape)




# axis = 0  // 행(row) 기준  
# A 행렬에 row_add 행렬 추가

B = np.concatenate( (A, row_add),axis=0)
print(B)


# axis = 1  // 열(column) 기준  
# A 행렬에 column_add 행렬 추가

B = np.concatenate( (A, column_add),axis=1)
print(B)




