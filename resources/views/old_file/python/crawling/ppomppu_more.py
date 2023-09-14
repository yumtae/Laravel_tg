from bs4 import BeautifulSoup
import requests







whole_source = ""
for page_number in range(1, 4):
	URL = 'http://www.ppomppu.co.kr/zboard/zboard.php?id=ppomppu&page=' + str(page_number)
	response = requests.get(URL)
	whole_source = whole_source + response.text
bs = BeautifulSoup(whole_source, 'html.parser')


find_title = bs.select("font.list_title")

for title in find_title:
	print(title.text)




