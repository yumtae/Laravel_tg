@include('user._layouts.common_css')


<div id='gisa_engineer'>
	

	@if ($no==1)
		
	

		<h2>  UI, UX, UI 설계 도구(와이어프레임, 목업 등), 감성공학    </h2>


		<div>

			<h3> UI / UX </h3>

			<img src='/engineer_skill/img/interface_design/UI1.png' >  

			<img src='/engineer/img/System_design/user_interface6.png' > 
			
			<h3> UI 설계 도구 </h3>

			<img src='/engineer/img/System_design/user_interface9.png' >  




		</div>



	@elseif ($no==2)	
		<h2>  UI(설계 도구, 프로토타입, 흐름 설계, 상세 설계)  </h2>


		<div>
			
			<h3> UI </h3>

			<img src='/img/interface_design/UI2.png' >  
			<img src='/img/interface_design/UI3.png' >  
			<img src='/img/interface_design/UI4.png' >  
			<img src='/img/interface_design/UI5.png' >  




		</div>

		
	@endif

</div>






