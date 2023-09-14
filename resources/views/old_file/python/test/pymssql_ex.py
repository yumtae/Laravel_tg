import pymysql
connection = pymysql.connect(host='localhost',user='root',password='duaxorms1!',db='duaxodlqmf')

cursor = connection.cursor()
sql = "select * from supermarket"
cursor.execute(sql)
 
result = cursor.fetchall()
connection.close()
print(result)
