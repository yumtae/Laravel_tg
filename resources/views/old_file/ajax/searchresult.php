<?php
	include_once './_common.php';


	//$serch = mysql_real_escape_string($_POST['searchword']);

	

    if( $serch ==! null ) {    
            
        $result=mysql_query("SELECT * FROM test1 WHERE NAME LIKE '$serch%' LIMIT 5");
		
	

        while($row=mysql_fetch_array($result)) {
            $NAME=stripslashes($row['NAME']);
            $AGE=stripslashes($row['AGE']);
            $LEVEL=stripslashes($row['LEVEL']);
            $DEPT_ID=stripslashes($row['DEPT_ID']);
           
            
            echo "
                <div class='display_box' onclick='javascript:goDetail($LEVEL);'> 
                    <b>이름 : $NAME</b> 나이 : $AGE 레벨 : $LEVEL ID : $DEPT_ID
                </div>                
            ";
        }
    }



?>