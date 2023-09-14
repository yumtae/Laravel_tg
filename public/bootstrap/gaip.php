<?php
include_once "../common.php";
include_once "../head.php";

var_dump($_POST);

$user_id = htmlspecialchars(mysql_real_escape_string($_POST['user_id']));
$user_pw = htmlspecialchars(mysql_real_escape_string($_POST['user_pw']));
$user_email = htmlspecialchars(mysql_real_escape_string($_POST['email']));

include_once DIR_WEB . "./common.php";



if($user_id !=="" && $user_pw !== "" && $email !==""){

	$sql = mysql_query("select * from user where user_id ='{$user_id}'");
	$num = mysql_num_rows($sql);


	if($num > 0){
		echo "<script>alert('이미 사용중인 아이디입니다.')</script>";
		exit;
	}else{
		
		$sql = mysql_query("insert into user (user_id,user_pw,email) value ('{$user_id}','{$user_pw}','{$user_email}')");
		echo "<script>alert('회원가입 완료');window.location.href='/bootstrapk'; </script>";
	}

}




?>


<div class="container">

  <form class="form-signin" method='POST'>
	<h2 class="form-signin-heading">Please sign in</h2>
	<label for="user_id" class="sr-only">user_id</label>
	<input type="text" name="user_id" class="form-control" placeholder="user_id" required="" autofocus="">
	<label for="user_pw" class="sr-only">user_pw</label>
	<input type="user_pw" name="user_pw" class="form-control" placeholder="user_pw" required="">

	<label for="email" class="sr-only">email</label>
	<input type="email" name="email" class="form-control" placeholder="email" required="">


	<div class="checkbox">
	  <label>
		<input type="checkbox" value="remember-me"> Remember me
	  </label>
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  </form>

</div>