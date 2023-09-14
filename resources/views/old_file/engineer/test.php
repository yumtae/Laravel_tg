<meta name="viewport" content="width=device-width, user-scalable=yes">
<button class='test_btn'>테스트 시작</button>

<button class='toggle_button'>기사퍼스트 or 일반 버튼</button>

<style type="text/css">
	.margin10{margin:10px 0}
	img{width:90%;margin:5px 0}
 #youtube_engineer{display:none}

</style>



<script type="text/javascript">

	$(function(){


		$('.toggle_button').click(function(){
			$('#gisa_engineer , #youtube_engineer').toggle();
			
		})




		$('.test_btn').click(function(){
			$('b').css('visibility','hidden');
			$('p').css('cursor','pointer');
		})

		$('li').click(function(){
			var i = $(this).index();
			
			$(this).children().css('visibility','visible');
			

		})
		$('p').click(function(){
			var i = $(this).index();
			
			$(this).children().css('visibility','visible');
			

		})
	})

</script>
