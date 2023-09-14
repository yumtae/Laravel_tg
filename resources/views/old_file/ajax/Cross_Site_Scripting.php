<?php
include_once './_common.php';



$result = mysql_query("SELECT * FROM xss WHERE id=1");
?>



 <?=htmlspecialchars(mysql_result($result,0,1))?>
