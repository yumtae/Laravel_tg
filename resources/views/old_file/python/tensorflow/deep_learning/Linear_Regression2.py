import pandas as pd

#기본적으로 dataframe이라고 부름(열과행 등)
data = pd.read_csv('gpascore.csv')

#빈칸확인
#print(data.isnull().sum())

#빈칸삭제
data = data.dropna()
#print(data.isnull().sum())

#빈칸에 100을 넣어줌
# data = data.fillna(100)

#열값만 가져올때 사용 _ 최소값,최대값 등등
#print(data['gpa'].min())


y데이터 = data['admit'].values
#print(y데이터)

x데이터 = []

#data.iterrows() <- data라는 프레임을 가로 한줄씩 출
for i,rows in data.iterrows():
    x데이터.append([ rows['gre'],rows['gpa'],rows['rank'] ])
    



import numpy as np
import tensorflow as tf
#admit =  1:붙음 , 0:불합격  /  rank = 학교레벨 1이높음


#keras를 이용해 모델을 쉽게 제작
#<- 레이어갯수 일반적으로 2의제곱수
#<- 마지막은 원하는 값의 갯수
model = tf.keras.models.Sequential ([
    tf.keras.layers.Dense(64 , activation='tanh'), 
    tf.keras.layers.Dense(128,activation='tanh'),
    tf.keras.layers.Dense(1,activation='sigmoid'),
])


#binary_crossentropy  결과가 0과 1사이의 분류 / 확률 문제에서 씀
model.compile(optimizer = 'adam', loss = 'binary_crossentropy' , metrics = ['accuracy'])



#x 에는 학습데이터(gre점수,gpa학점,rank등수) , y는 실제정답(admit 합격불합격) , 반복횟
model.fit(np.array(x데이터),np.array(y데이터), epochs = 1000)

#예측 (GRE 성적이 850 학점4.0  rank3 제 합격률은?)
예측값  = model.predict( [ [850 , 4.00 ,3 ] , [400 , 2.2 , 1 ] ] )

print(예측값)
#대략   0.85 / 0.04 나옴   85%합격 , 불합격


#Epoch : 모델의 순번
#loss : 모델의 손실률
#accuracy : 모델의 정답률

