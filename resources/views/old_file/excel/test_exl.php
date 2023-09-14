<?
	include_once "../common.php";





$filename = iconv("UTF-8", "EUC-KR", "테스트엑셀파일");
 
header( "Content-type: application/vnd.ms-excel; charset=utf-8");  
header( "Content-Disposition: attachment; filename = {$filename}.xls" );   
header( "Content-Description: PHP4 Generated Data" );   


include_once "../common.php";

$sql = "select * from supermarket";
$result = mysql_query($sql);



?>

<table border='1'>
	<tr>
		<th>no</th>
		<th>카테고리</th>
		<th>이름</th>
		<th>회사</th>
		<th>가격</th>

	</tr>
		

<? 
	while($row = mysql_fetch_array($result) ){  ?>
	<tr>
		<td style='mso-number-format:"\@";' ><?= $row['Itemno']?></td>
		<td style='mso-number-format:"\@";' ><?= $row['Category']?></td>
		<td><?= $row['FoodName']?></td>
		<td><?= $row['Company']?></td>
		<td><?= $row['Price']?></td>  
	</tr>
<?}?>

</table>