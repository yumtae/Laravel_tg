<?php

include_once "../common.php";
include_once "../head.php";

?>


<script type="text/javascript">


function factorial(limit){
	
	var sum = 0;
	var f = 1;
	
	

	for ( n = 1 ;n <= limit ;n++ )
	{


			f = f * n;
			sum = sum + f;

			console.log(f);
		


	}
		
	$('.write_zone').html(sum);
	

}	


$(function(){

	factorial(10);
})

</script>

<div class='write_zone'>
	
</div>