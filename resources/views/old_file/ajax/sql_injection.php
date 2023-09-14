<?php
include_once './_common.php';


# ?type=asdaasd' or 1='1  삽입하면 테이블 공개

//$sql = "SELECT * FROM sql_injection WHERE type='".$_GET['type']."'"; 

#$type = $_GET['type'] ;


#$type = mysql_real_escape_string($_GET['type']) ;
echo  $type.'<br/>';

$sql = "SELECT * FROM sql_injection WHERE type='".$type."'";

echo "SQL : $sql";


?>
<ul>
<?php
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)){
    echo "<li>{$row['description']}</li>";
}
?>
</ul>