import tensorflow as tf
from tensorflow import keras


#헬퍼 라이브러리 임포트
import numpy as np
import matplotlib.pyplot as plt




#샘플 MNIST 로드
fashion_mnist = keras.datasets.fashion_mnist
(train_images, train_labels), (test_images, test_labels) = fashion_mnist.load_data()


#클래스 이름 정의
class_names = ['T-shirt/top', 'Trouser', 'Pullover', 'Dress', 'Coat',
               'Sandal', 'Shirt', 'Sneaker', 'Bag', 'Ankle boot']


#(60000, 28, 28)  훈련세트6만개이미지
#print(train_images.shape
#(10000, 28, 28) 테스트세트에 1만개이미지
#print(test_images.shape)





#데이터 전처리

plt.figure()
plt.imshow(train_images[0])
plt.colorbar()
plt.grid(False)
plt.show()

#이미지 확인겸 저장
#plt.savefig('test1.png')




#신경망 모델에 주입하기 전에 이 값의 범위를 0~1 사이로 조정하겠습니다. 
#이렇게 하려면 255로 나누어야 합니다. 
#훈련 세트와 테스트 세트를 동일한 방식으로 전처리하는 것이 중요합니다


train_images = train_images / 255.0

test_images = test_images / 255.0


#훈련 세트에서 처음 25개 이미지와 그 아래 클래스 이름을 출력해 보죠.
#데이터 포맷이 올바른지 확인하고 네트워크 구성과 훈련할 준비를 마칩니다.


plt.figure(figsize=(10,10))
for i in range(25):
    plt.subplot(5,5,i+1)
    plt.xticks([])
    plt.yticks([])
    plt.grid(False)
    plt.imshow(train_images[i], cmap=plt.cm.binary)
    plt.xlabel(class_names[train_labels[i]])
#plt.show()
#이미지 확인겸 저장
plt.savefig('test2.png')

