<?php
include_once '../common.php';
include_once  './Snoopy.class.php';//스누피
function read_simple($url, $referer=''){

  $sp = new Snoopy;

  $sp->agent =  isset($_SERVER['HTTP_USER_AGENT'])
               ? strtolower($_SERVER['HTTP_USER_AGENT'])
               : '';




  if (!empty($referer)) $sp->referer = $referer;

  $sp->fetch($url);

  return $sp->results;
}


$table = "test_lotto";

$round ='867';

 $url = 'https://dhlottery.co.kr/gameResult.do?method=byWin&drwNo=' . $round;
$text = read_simple($url);
$pattern ='`ball_645 ([^>]+)>([^<]+)`';

  preg_match_all($pattern, $text, $m);


$num1 = (int)$m[2][0];
$num2 = (int)$m[2][1];
$num3 = (int)$m[2][2];
$num4 = (int)$m[2][3];
$num5 = (int)$m[2][4];
$num6 = (int)$m[2][5];
$bnum = (int)$m[2][6];



  echo $round.'회차 번호 ' .  $num1.' ' .$num2.' ' .$num3.' ' .$num4.' ' .$num5.' ' .$num6.' ' . $bnum;

?>