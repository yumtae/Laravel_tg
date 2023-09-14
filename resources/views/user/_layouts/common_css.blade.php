<script src="https://code.jquery.com/jquery-latest.js"></script>
<!-- 합쳐지고 최소화된 최신 CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- 부가적인 테마 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- 합쳐지고 최소화된 최신 자바스크립트 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>



<style type="text/css">
	body{background:#000;color:#aaa}
	a{color:#eee}
	b{color:#ff8d00}



	/*스프링*/
	.margin_top_bottom_30{margin:30px 0}
	.color_red{color:red}
	.color_orange{color:orange}
	.font_size_1.2em{font-size:1.2em}
	.java_source_code{display:inline-block;background:#261307;color:#fff}
	.java_spring_content_box{margin:30px 0;border-bottom:1px solid #eee;padding-bottom:30px}

	.margin10{margin:10px 0}
	img{width:90%;margin:5px 0}
	#youtube_engineer{display:none}

</style>

<meta name="viewport" content="width=device-width, user-scalable=yes">
<button class='test_btn'>테스트 시작</button>

<button class='toggle_button'>기사퍼스트 or 일반 버튼</button>




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

