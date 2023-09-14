#from animal import dog # animal패키지에서 dog 라는 모듈을가져와줘
#from animal import cat # animal패키지에서 dog 라는 모듈을가져와줘

from animal import * # animal 패키지에있는 모듈 다가져와


d = dog.Dog()

d.hi()



c= cat.Cat()

c.hi()