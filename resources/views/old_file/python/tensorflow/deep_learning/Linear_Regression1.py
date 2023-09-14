import tensorflow as tf
#딥러닝 원리 시범  https://www.youtube.com/watch?v=PwYnZ2RwyJw&list=PLfLgtT94nNq1DrREU_qG2w4yd2ZzJb-FG&index=8


키 = [170]

신발 = [260]

#신발 = 키 * a + b

a = tf.Variable(0.1)
b = tf.Variable(0.2)

def 손실함수():
#    return tf.square(실제값 - 예측값)
    예측값 = 키 * a + b
    return tf.square(260 - 예측값)


#경사하강법 help
opt = tf.keras.optimizers.Adam(learning_rate=0.1)


for i in range(100):
    opt.minimize( 손실함수, var_list=[a,b] )
    print(a.numpy(),b.numpy())




