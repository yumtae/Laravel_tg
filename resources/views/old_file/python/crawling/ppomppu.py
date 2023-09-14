from bs4 import BeautifulSoup
import requests


#게시판 접속
r = requests.get('http://www.ppomppu.co.kr/zboard/zboard.php?id=ppomppu')


if r.status_code == 200:
	#html 을 가져온다
	bs = BeautifulSoup(r.text, 'html.parser')

	#필요한 부분만 
	titles = bs.find_all('font', class_='list_title')
	for title in titles:
		print(title.string)
	print('==============================================================================================================================')

