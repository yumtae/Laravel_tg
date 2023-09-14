<?php
include_once '../common.php';
include_once  './Snoopy.class.php';//스누피



function read_simple($url, $referer=''){

  $sp = new Snoopy;

  $sp->agent =  $_SERVER['HTTP_USER_AGENT'];

  if (!empty($referer)) $sp->referer = $referer;

  $sp->fetch($url);

  return iconv( "euckr", "utf8", $sp->results);
}

//$result = preg_replace('/\s+/', ' ', $data); 공백한개로변경

//정규표현식 참조 https://phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_function&wr_id=420270&sca=&sfl=wr_subject%7C%7Cwr_content&stx=%C1%A4%B1%D4%BD%C4+%C0%CC%B9%CC%C1%F6&sop=and



$url = 'http://www.ppomppu.co.kr/zboard/zboard.php?id=ppomppu';

$text =  read_simple($url);
$text = preg_replace('/\r\n\t|\r|\n|\t/','',$text);


//$pattern  = "/<font class=\"[^>]*\">(.*?)<\/font>/si";

$pattern ="/\<font class=\"list_title\"\>(.*)\<\/font\>/";

//$pattern ="/\<font class=\"list_title\"\>(.*?)\<\/font\>/";
//$pattern ='/<font class="list_title">(.*?)</font>/';

preg_match_all($pattern,$text,$m);

var_dump($m);



?>