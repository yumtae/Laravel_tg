import pymysql

#mysql 연결
conn = pymysql.connect(host='115.68.207.137',user='root',password='duaxorms1!',db='duaxodlqmf',charset='utf8')

#connection 올부터 cursor 생성
curs = conn.cursor()

#sql 실행
sql = "select * from supermarket"
curs.execute(sql)

#데이터 fetch

rows = curs.fetchall()

print(rows)



curs = conn.cursor()

#방법1
#sql = """insert into supermarket(category,Foodname,company,Price)
#         values (%s, %s, %s , %s)"""
#curs.execute(sql, ('젤리', '하리보', '롯데','3000'))
#curs.execute(sql, ('과자', '썬칩', '혜태','1000'))
#curs.execute(sql, ('음료수', '포카리', '오리온','2000'))


#방법2

data = (
    ('젤리', '하리보', '롯데','3000'),
    ('과자', '썬칩', '혜태','1000'),
    ('음료수', '포카리', '오리온','2000'),
)
sql = """insert into supermarket(category,Foodname,company,Price)
         values (%s, %s, %s , %s)"""
curs.executemany(sql, data)




conn.commit()




conn.close()
