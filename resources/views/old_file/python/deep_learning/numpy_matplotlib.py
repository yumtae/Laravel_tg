import matplotlib.pyplot as plt
import numpy as np



x_data=np.random.rand(100)
y_data=np.random.rand(100)


plt.title('scatter plot')
plt.grid()
plt.scatter(x_data,y_data,color='b',marker='o')
plt.show()
#plt.savefig('test.png') 완성된 이미지파일 생성
