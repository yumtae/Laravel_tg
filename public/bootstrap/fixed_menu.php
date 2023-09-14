<?php
include_once "../common.php";
include_once "../head.php";
session_start();
?>




    <nav class="navbar navbar-inverse navbar-fixed-top">

      <div class="container">

        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

          <a class="navbar-brand" href="#"> 게시판 </a>

        </div>

        <div id="navbar" class="navbar-collapse collapse">

<?php

  if( !isset($_SESSION['is_login']) ) {

?>

          <form class="navbar-form navbar-right" method=POST action='signin.php'>

            <div class="form-group">

              <input type="text" name='user_id' placeholder="USER ID" class="form-control">

            </div>

            <div class="form-group">

              <input type="password" name='user_pw' placeholder="Password" class="form-control">

            </div>

            <button type="submit" class="btn btn-success">로그인</button>
            <a  href='/bootstrapk/gaip.php'><div class="btn btn-success">회원가입</div></a>

          </form>

<?php

  } else {

?>



        <form class="navbar-form navbar-right" method='POST' action='signout.php'>

          <button type="submit" class="btn btn-success">로그아웃</button>

        </form>



<?php

  }

?>



    </form>

        </div><!--/.navbar-collapse -->

      </div>

    </nav>
