<?php
include_once "./fixed_menu.php";

$user_id = $_SESSION['user_id'];

$sql = mysql_query("SELECT * FROM session WHERE user_id = '{$user_id}'");
$res = mysql_fetch_assoc( $sql );

if( $res > 0  ) {



?>







    <!-- Main jumbotron for a primary marketing message or call to action -->

    <div class="jumbotron">

      <div class="container">

        <form class="form-horizontal" method='POST' action='write_ok.php'>

          <div class="form-group">

            <label for="inputEmail3" class="col-sm-2 control-label">제목</label>

              <div class="col-sm-10">

                <input type="text" name=title class="form-control" id="inputEmail3">

              </div>

          </div>

        <label for="inputEmail3" class="col-sm-2 control-label">게시글</label>

        <div class="col-sm-offset-2 col-sm-10">

            <textarea name='body' class="form-control" rows="10"></textarea>

        </div>

      </div>

      <div class="form-group">

        <div class="col-sm-offset-2 col-sm-10">

          <button type="submit" class="btn btn-default">작성 완료</button>

            </div>

           </div>

         </form>

      </div>

    </div>




  </body>

</html>







<?php } else {?>


<script> 
	alert('아이디 또는 패스워드가 올바르지 않습니다.');location.href='/bootstrapk/';

</script>

<?php } ?>