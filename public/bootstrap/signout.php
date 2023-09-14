<?php
include_once '../common.php'; 

session_start();

$user_id = $_SESSION['user_id'];

$sql = "DELETE FROM session WHERE user_id = '{$user_id}'";
$res = mysql_query($sql);






setcookie( session_name(), '', time()-99999999 );

session_destroy();
	 echo "<script> alert('로그아웃 되었습니다.');location.href='/bootstrapk/'</script>";

?>