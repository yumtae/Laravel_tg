<?php

include_once '../common.php';



session_start();



$id = htmlspecialchars(mysql_real_escape_string($_POST['user_id']));

$pw = htmlspecialchars(mysql_real_escape_string($_POST['user_pw']));



$sql = "SELECT * FROM user WHERE user_id = '{$id}' and user_pw = '{$pw}'";


//echo $sql;exit;

$resource = mysql_query( $sql );

$num = mysql_num_rows( $resource );



$row = mysql_fetch_assoc( $resource );



if( $num > 0 ) {

  // 인증에 성공한 경우

  // 중복 체크

  $sql = "SELECT * FROM session WHERE user_id = '{$id}'";

  $resource = mysql_query( $sql );

  $num = mysql_num_rows( $resource );

  if( $num > 0 ) {

    // 이미 로그인한 사용자인 경우

    echo "<script> alert('해당 아이디는 이미 로그인한 상태입니다');;location.href='/bootstrapk/' </script>";



  } else {

    // 아직 로그인하지 않은 경우

    // 1. 세션 테이블에 사용자 정보를 입력(insert)

    $sess_id = session_id();

    $sql = "INSERT INTO session VALUE( $row[no], '$id', '$sess_id' )";

    $res = mysql_query( $sql );



    // 2. 세션 변수에 아이디 추가

    $_SESSION['user_id'] = $id;

    $_SESSION['is_login'] = 1;



    // 3. 로그인 환영 메시지 출력

    echo "<script> alert('로그인 되었습니다');;location.href='/bootstrapk/' </script>";



  }



} else {

  // 인증에 실패한 경우

  echo "<script> alert('아이디 또는 패스워드가 올바르지 않습니다.');location.href='/bootstrapk/'</script>";



}



?>



<meta http-equiv='refresh' content="/bootstrapk/">