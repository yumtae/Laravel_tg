@include('user._layouts.common_css');


@if ($no==1)


<h2> 데이터 베이스 </h2>


	<div>
		<h3> 정의 </h3>
		<img src='/img/database/database1.png' > 

		<h3> 스키마 </h3>
		<img src='/img/database/database2.png' > 
		<img src='/img/database/database3.png' >
		
		<h3> 데이터 사전 (Data Dictionary, 자료 사전) </h3>
		<img src='/img/database/database4.png' >
		
		<h3> DBMS </h3>
		<img src='/img/database/database5.png' >


		<h3> 관계형 DBMS </h3>
		<img src='/img/database/database6.png' >

	</div>


@elseif ($no==2)


<h2> 설계 / 모델링 /ER모델 </h2>


	<div>
		<h3> 설계 </h3>
		<img src='/img/database/design1.png' > 
		<img src='/img/database/design2.png' > 

		<h3> 개념적설계  </h3>
		<img src='/img/database/design3.png' > 

		<h3> 논리적 설계  </h3>
		<img src='/img/database/design4.png' > 

		<h3> 물리적 설계  </h3>
		<img src='/img/database/design5.png' > 


		<h3> 데이터 모델링  </h3>
		<img src='/img/database/design6.png' > 



		<h3> ER 모델  </h3>
		<img src='/img/database/design7.png' > 





		
	</div>


	@elseif ($no==3)
			
		<h2> 관계형 데이터베이스 릴레이션 / 키 / 제약조건 / 관계유형</h2>


		<div>
			<h3> 관계형 데이터베이스 릴레이션 </h3>
			<img src='/img/database/design8.png' >  


			<h3> 키 </h3>
			<img src='/img/database/design9.png' >  
			
			<h3> 매핑사상 </h3>
			<img src='/img/database/design10.png' >  
			
		</div>




	@elseif ($no==4)


		
<h2>논리 데이터베이스 설계 > 정규화</h2>


<div>
	<h3> 정규화 </h3>
	<img src='/img/database/normalization1.png' >
	<img src='/img/database/normalization2.png' >
	<img src='/img/database/normalization3.png' >
	<img src='/img/database/normalization4.png' >
	<img src='/img/database/normalization5.png' >

</div>




	@elseif ($no==5)

	<h2> SQL </h2>


<div>
	
	<img src='/img/database/sql1.png' >  
	<img src='/img/database/sql2.png' >  
	<img src='/img/database/sql3.png' >  
	<img src='/img/database/sql4.png' >  
	<img src='/img/database/sql5.png' >  
	<img src='/img/database/sql6.png' >  
	<img src='/img/database/sql7.png' >  
	<img src='/img/database/sql8.png' >  
	<img src='/img/database/sql9.png' >  
	<img src='/img/database/sql10.png' >  
	<img src='/img/database/sql11.png' >  
	<img src='/img/database/sql12.png' >  

</div>




	@elseif ($no==6)

	

<h2>  데이터 분석 함수 , JOIN , Sub query </h2>


<div>
	<h3> 데이터 분석 함수 </h3>
	<img src='/img/database/sql13.png' >  
	<img src='/img/database/sql14.png' >  
	<img src='/img/database/sql15.png' >  
	<img src='/img/database/sql16.png' >  
	<img src='/img/database/sql17.png' >  
	

	<h3> JOIN </h3>
	<img src='/img/database/sql18.png' >  
	<img src='/img/database/sql19.png' >  
	<img src='/img/database/sql20.png' >  
	<img src='/img/database/sql21.png' >  
	<img src='/img/database/sql22.png' >  
	

	<h3> Sub query </h3>
	<img src='/img/database/sql23.png' > 
	<img src='/img/database/sql24.png' > 


</div>



	@elseif ($no==7)

	
<h2> 관계 데이터 연산 / 물리 모델 설계 / 인덱스 / 뷰 </h2>


<div>
	<h3> 관계 데이터 연산 </h3>
	<div>SQL : 관계대수와 관계해석을 기초로한 언어</div>
	<img src='/img/database/relational_algebra1.png' >  
	<img src='/img/database/relational_algebra2.png' >  



</div>






<div>
	<h3> 물리 모델 설계 </h3>
	<img src='/img/database/conversion1.png' >  
	<img src='/img/database/conversion2.png' >  
	<img src='/img/database/conversion3.png' >  
	<h3> 인덱스 </h3>
	<img src='/img/database/index1.png' >  
	<img src='/img/database/index2.png' >  
	<img src='/img/database/index3.png' >  
	<img src='/img/database/index4.png' >  
	<h3> 뷰 </h3>
	<img src='/img/database/view1.png' >  



	<h3> 클러스터 </h3>
	<img src='/img/database/cluster1.png' > 
	
	<h3> 디스크 구성 설계 </h3>
	<img src='/img/database/disk1.png' > 


</div>






	@elseif ($no==8)

	

<h2> 절차적 SQL / if문 / 반복문 / 프로시저 </h2>


<div>
	<h3> 절차적 SQL </h3>
	<img src='/img/database/procedural_sql1.png' >  
	<h3> 조건문 / 반복문 </h3>
	<img src='/img/database/procedural_sql2.png' >  
	<img src='/img/database/procedural_sql3.png' >  
	<img src='/img/database/procedural_sql4.png' >  
	<img src='/img/database/procedural_sql5.png' >  

	<h3> 커서 </h3>
	<img src='/img/database/cursor1.png' >  
	<img src='/img/database/cursor2.png' >  

	<h3> 프로시저 </h3>
	<img src='/img/database/procedure1.png' > 
	<img src='/img/database/procedure2.png' > 
	<img src='/img/database/procedure3.png' > 
	<img src='/img/database/procedure4.png' > 
	<img src='/img/database/procedure5.png' > 


	<h3> 트리거 - IN,OUT없이 이벤트가 발생했을때 실행</h3>
	<img src='/img/database/trigger1.png' > 



</div>



	@elseif ($no==9)

	
<h2>  SQL 최적화  </h2>


<div>
	<h3> 쿼리 성능 순서 </h3>
	<img src='/img/database/optimization1.png' >  

	<h3>Optimizer / SQL처리단계 </h3>
	<img src='/img/database/Optimizer1.png' >  
	<img src='/img/database/Optimizer2.png' >  

	<h3> tkprof</h3>
	<img src='/img/database/tkprof1.png' >  
	<img src='/img/database/tkprof2.png' >  

	<h3> trace</h3>
	<img src='/img/database/trace1.png' >  
	<img src='/img/database/tkprof3.png' >
	<img src='/img/database/tkprof4.png' >

	<h3> EXPLAIN PLAN </h3>
	<img src='/img/database/explain_plan1.png' > 
	<img src='/img/database/explain_plan2.png' > 

	<h3> 실무 개선 </h3>
	<img src='/img/database/sql_refresh1.png' > 
	<img src='/img/database/sql_refresh2.png' > 


</div>



	@elseif ($no==10)
	
<h2>  트랜잭션 ★ / 병행제어 / 장애,회복,백업 ★ </h2>


<div>
	<h3> 트랙잭션  </h3>
	<img src='/img/database/transaction1.png' >  
	<img src='/img/database/transaction2.png' >  


	<h3> 병행제어  </h3>
	<img src='/img/database/transaction3.png' >  
	<img src='/img/database/transaction4.png' >  
	<img src='/img/database/transaction5.png' >  
	<img src='/img/database/transaction6.png' >  
	<img src='/img/database/transaction7.png' >  

	<h3> 장애 / 회복 ★ </h3>
	<img src='/img/database/transaction8.png' > 
	<img src='/img/database/transaction9.png' > 
	<img src='/img/database/transaction10.png' > 
	<img src='/img/database/transaction11.png' > 

	<h3> 백업 </h3>
	<img src='/img/database/backup1.png' > 
	<img src='/img/database/backup2.png' > 

</div>



	@elseif ($no==11)

	
<h2> 분산DB, CRUD 매트릭스, 데이터 웨어하우스, 데이터 마트, 데이터 마이닝, OLAP  </h2>


<div>
	<h3> 데이터베이스 이중화 </h3>
	<img src='/img/database/replication1.png' >  
	<img src='/img/database/replication2.png' >  

	<h3> 클러스터링 </h3>
	<img src='/img/database/clustering1.png' >


	<h3> 스토리지 </h3>
	<img src='/img/database/storage1.png' >
	<img src='/img/database/storage2.png' >

	<h3> 분산 데이터베이스★ </h3>
	<img src='/img/database/Dispersion_db1.png' >
	<img src='/img/database/Dispersion_db2.png' >
	<img src='/img/database/Dispersion_db3.png' >

	<h3> ORM </h3>
	<img src='/img/database/ORM1.png' >


	<h3> CRUD 매트릭스</h3>
	<img src='/img/database/CRUD1.png' >


	<h3> 데이터 웨어하우스</h3>
	<img src='/img/database/data_warehouse1.png' >

	<h3> 데이터 마트 / 데이터 마이닝</h3>
	<img src='/img/database/data_warehouse2.png' >



	<h3> OLAP (On-line Analytical Processing , 온라인 분석처리)</h3>
	<img src='/img/database/data_warehouse3.png' >
	<img src='/img/database/data_warehouse4.png' >
	<img src='/img/database/data_warehouse5.png' >


	<h3> NoSQL (Not only SQL)</h3>
	<img src='/img/database/NoSQL1.png' >


	<h3> DBMS 접속 기술</h3>
	<img src='/img/database/DBMS1.png' >
	<img src='/img/database/DBMS2.png' >
	<img src='/img/database/DBMS3.png' >
	<img src='/img/database/DBMS4.png' >
	<img src='/img/database/DBMS5.png' >




</div>



	@elseif ($no==12)


	
<h2>  보안(접근통제 , 사용자그룹), 표준화  </h2>


<div>
	<h3> 보안 </h3>
	<img src='/img/database/security1.png' >  
	<img src='/img/database/security2.png' >  


	<h3> 사용자그룹 </h3>
	<img src='/img/database/user_group1.png' >  
	

	<h3> 암호화 </h3>
	<img src='/img/database/encryption1.png' >  
	<img src='/img/database/encryption2.png' >  
	<img src='/img/database/encryption3.png' >  


	<h3> 데이터베이스 표준화 </h3>
	<img src='/img/database/db_standardization1.png' >
	<img src='/img/database/db_standardization2.png' >



</div>



	@elseif ($no==13)


	
<h2>  데이터 전환 </h2>


<div>
	<h3> 데이터 전환 정의  </h3>
	<img src='/img/database/transform1.png' >  
	<img src='/img/database/transform2.png' >  
	<img src='/img/database/transform3.png' >  
	<img src='/img/database/transform4.png' >  
	<img src='/img/database/transform5.png' >
	



</div>

@endif

	
	


