


'''5622 다이얼 찾아서 합산
dial = ['abc','def','ghi','jkl','mno','pqrs','tuv','wxyz']
a = list(input())

time_count = 0

for i in a:
	for j in dial:
		if i in j : 
			time_count += dial.index(j)+3  

print(time_count)




'''



''' 2908 상수 뒤집기
word = input().split()

if ( int(word[0][::-1]) > int(word[1][::-1])):
	 print( int(word[0][::-1]) )	
else:
	print( int(word[1][::-1]) )	

'''




''' 1152 단어의개수
word = input().split()

print(len(word))
 '''



''' 1157 단어공부

word =  input().lower() # 소문자로 받음 Mississipi / zZa
word_list =  list(set(word)) # set으로 중복 제거 후 배열로 [m i s p] / [z a]
cnt = []


for i in word_list:
	count = word.count 
	cnt.append(count(i)) #[1, 4, 1, 4] 키값이 랜덤으로 적용 (상시바뀜)
	

if cnt.count(max(cnt)) >= 2 : 
	print('?')
else:
	print( word_list[cnt.index(max(cnt))].upper() ) # 이해 관건  제일큰수를찾아,cnt의 index 번째를반환후 배열값을 대문자로
'''



'''알파벳 찾기
word =  input()
alphabet = list(range(97,123)) #아스키코드 숫자 범위 a=97 z=122

for i in alphabet:
	print(word.find(chr(i)), end=' ')

#find =  찾는문자가 문자열 안에서 첫번째에 위치한 순서를 출력 없을경우 자동으로 -1 (문자열만 사용가능)

'''



''' 합구하기
n = int(input())
print(sum(map(int,input())))
'''


'''아스키코드값 반환
a = str(input())
print(ord(a))
'''

