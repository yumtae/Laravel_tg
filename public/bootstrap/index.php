<?php

include_once "./fixed_menu.php";

?>


<style type="text/css">
	.declaration{display:none;width:500px}
	.declaration_show {color:#fff}
	.declaration img{width:500px}
</style>
<script type="text/javascript">

$(function(){
	$('.declaration_show').click(function(){
		$('.declaration').show();
	})
})

</script>


    <div class="jumbotron">

      <div class="container">

        <table class="table table-striped">

          <thead>

            <tr>

              <th> 번호 </th>

              <th> 게시글 제목 </th>

              <th> 작성자 </th>

              <th> 작성시간 </th>

            </tr>

          </thead>

          <tbody>

		
		<?php 
			$query_board="SELECT * FROM board ORDER BY no DESC LIMIT 10";
			$query = mysql_query($query_board);


			while($row = mysql_fetch_array($query)){
				
		?>

            <tr>		
			  <th scope="row"><?=$row['no']?></th>
			  <td><?=$row['title']?></td>
			  <td><?=$row['writer']?></td>
			  <td><?=$row['datetime']?></td>

            </tr>
		<?php
		 }
		?>


          </tbody>

        </table>

      </div>

    </div>
<span class='declaration_show'>★</span>

<div class='declaration' style=''>
	<img src='./img/declaration1.jpg'>
	<img src='./img/declaration2.jpg'>
	<img src='./img/declaration3.jpg'>
	<img src='./img/declaration4.jpg'>
	<img src='./img/declaration5.jpg'>
</div>

