@include('user._layouts.common_css');



<div id='gisa_engineer'>
	
	@if ($no == 1)
		<h2>  데이터사전, 스키마, 인스턴스, 관계형DB, 분산DB </h2>


		<div>
			
			<h3> 데이터베이스 </h3>
			<img src='/img/database/database1.png' >  
			<img src='/img/SQL/database1.png' >  


			<h3> 데이터 사전 </h3>
			<img src='/img/database/database4.png' > 



			<h3> 스키마 </h3>
			<img src='/img/database/database5.png' > 
			<img src='/img/SQL/database2.png' >  
			<img src='/img/database/design8.png' > 



			<h3> 분산데이터베이스 </h3>
			<img src='/img/database/Dispersion_db1.png' >  



		</div>
		
	@elseif ($no==2)
		<h2>  02-JOIN </h2>


		<div>
			
			<h3> 조인 </h3>
			
			<img src='/img/database/sql18.png' >  
			<img src='/img/database/sql19.png' >  
			<img src='/img/database/sql20.png' >  
			<img src='/img/database/sql21.png' >  
			<img src='/img/database/sql22.png' >  
			<img src='/img/database/sql23.png' >  


		</div>

	@elseif ($no==3)
		<h2>  SQL 기초(DDL) </h2>


		<div>
			
			<h3> SQL 기초 </h3>
			<img src='/img/SQL/DDL1.png' >  
			
			<img src='/img/database/sql1.png' >  
			<img src='/img/database/sql2.png' >  
			<img src='/img/database/sql3.png' >  
			<img src='/img/database/sql4.png' >  
			<img src='/img/database/sql5.png' >  
			<img src='/img/database/sql6.png' >  
			<img src='/img/database/sql7.png' >  




		</div>
	@elseif ($no==4)
				
		<h2> SQL 기초(DML, DCL)  </h2>


		<div>
			
			<h3>  </h3>
			<img src='/img/database/sql8.png' >  
			<img src='/img/database/sql9.png' >  
			<img src='/img/database/sql10.png' >
			<img src='/img/database/sql11.png' >



			<img src='/img/SQL/DCL1.png' >  
			<img src='/img/SQL/DCL2.png' >  




		</div>

	@elseif ($no==5)
		
		<h2>  -절차형 SQL, 커서, 프로시저, 사용자 정의 함수, 트리거 </h2>


		<div>
			
			<h3> 절차형 SQL </h3>
			<img src='/img/database/procedural_sql1.png' >  
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


			<h3> 트리거 </h3>
			<img src='/img/database/trigger1.png' >  



		</div>

	@elseif ($no==6)
		
		<h2>  함수(집계, 그룹, 윈도우), OLAP, JDBC, 사용자 그룹 </h2>


		<div>
			
			<h3> 데이터 분석 함수 </h3>
			<img src='/img/database/sql13.png' >  
			<img src='/img/database/sql14.png' >  
			<img src='/img/database/sql15.png' >  
			<img src='/img/database/sql16.png' >  

			<h3> OLAP / 데이터 큐브 </h3>
			<img src='/img/database/data_warehouse3.png' >  
			<img src='/img/database/sql17.png' >  






		</div>


		
	@endif

	


</div>






