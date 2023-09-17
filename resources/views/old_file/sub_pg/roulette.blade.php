@include('user._layouts.common_css')


<script  src="/js/rotate.js"></script>



<script type="text/javascript">

var ing = false;
function spin_the_wheel(id)
{
	var cnt = 0;
	if(ing == false)
	{		
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			type: 'post',
			dataType: 'json',
			url: '/roulette',
			//data: {id:id},
			success: function (data) {			
				 if (data != 'empty') 
				 {			
					if(data.chk == true)
					{
						ing = true;
						rotate_wheel(data.degree,data.prd);						
					}
					else
					{
						alert('오늘은 이미 참여 하셨습니다.\n내일 다시 참여해주세요!');
					}
					
				}
			},
			error: function (request, status, error) {
				console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
			}
		});
	}
	else
	{
		alert('결과가 나올때 까지 잠시만 기다려 주세요');
	}
	

} 


function rotate_wheel(degree,prd)
{
		 
	$('#wheelcanvas').rotate({
	  angle: 0,
	  animateTo:degree,
	  duration:6000,  
	  callback:function(){ 
		ing=false;
		alert('축하드립니다.\n['+prd+']상품에 당첨되었습니다!\n내일 또 도전해주세요!');
		} 
	  })
		
			

}




  
  function draw() {			
   drawRouletteWheel();
  }
  
  function drawRouletteWheel() {
    var canvas = document.getElementById("wheelcanvas");

	
			var imgClo = new Image();

			imgClo.addEventListener('load', function(){
				var ctx = document.getElementById('wheelcanvas').getContext("2d");

				//drawImage ( image sx, sy, sWidth, sHeight, dx, dy, dWidth, dHeight)
				ctx.drawImage( imgClo , 0, 0, 700, 700);
			
			},false);

			imgClo.src="/image/roulette/roulette.png";



}


  
  draw();
</script>

<style type="text/css">
	.rel{position:relative}
	.cim_style{margin: 0px 0 0 380px;}
	.roule_style{margin: 25px 0 0 75px}
	.check_btn_style{margin: 270px 0 0 324px;}
	.abo{position:absolute;left:0;top:0}
</style>
<div class="content-wrapper">

		<div class="banner_box rel">
			<div class="roule_style abo">                	
				<canvas id="wheelcanvas" width="700" height="700"></canvas>
			</div>

			<img src='/image/roulette/check_btn.png' id='spin_bt' class='check_btn_style abo' onclick="spin_the_wheel('test11')">
			<img src='/image/roulette/check_chim.png' class='cim_style abo'>
		</div>

</div>



