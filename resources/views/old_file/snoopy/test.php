<?php




function getData($url)
{
  # start curl
  $ch = curl_init();
  curl_setopt( $ch, CURLOPT_URL, $url );

	//curl_setopt($ch, CURLOPT_PROXY, '202.195.237.186:80');
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  # set return transfer to false
  //curl_setopt( $ch, CURLOPT_RETURNTRANSFER, false );
  curl_setopt( $ch, CURLOPT_BINARYTRANSFER, true );
  //curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
	curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko"); 

    //SSL Settings 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
	curl_setopt($ch, CURLOPT_SSLVERSION, 3);
	//curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_1);

  # increase timeout to download big file
  curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 10 );
  # execute curl
  $ret = curl_exec( $ch );

	echo curl_errno($ch);
  print_r(curl_getinfo($ch));
	echo curl_error($ch);

  # close curl
  curl_close( $ch );
  # close local file

	return $ret;
}



function getSSLData($url)
{
	$arrContextOptions=array(
				"ssl"=>array(
							"verify_peer"=>false,
							"verify_peer_name"=>false,
					),
			);  
	return file_get_contents($url, false, stream_context_create($arrContextOptions));
}



function getStores()
{
	echo "getStores\n";
	//mysql_query("TRUNCATE TABLE 'covid19_stores'");


		$url = "https://gist.githubusercontent.com/junsuk5/bb7485d5f70974deee920b8f0cd1e2f0/raw/063f64d9b343120c2cb01a6555cf9b38761b1d94/sample.json";
		
		echo "$url<br>\n";

		$d = getSSLData($url);
		//$d = @iconv("EUC-KR","UTF-8",$d);
		$obj = json_decode($d,true);
//배열값
//echo $d;


		foreach($obj['stores'] as $key=>$value)
		{
			$qry = "set `code` = '$value[code]',
							`addr` = '$value[addr]',
							`name` = '$value[name]',
							`lat` = '$value[lat]',
							`lng` = '$value[lng]',
							`type` = '$value[type]'";

			//$row=mysql_fetch_array("select uid from covid19_stores where code='$value[code]'");



			echo "insert into covid19_stores ".$qry.",writeday = now();";

			//if(!$row['uid']) sql_query("insert into covid19_stores ".$qry.",writeday = now();");
			//else sql_query("update covid19_stores ".$qry." where uid=$row[uid]");
		}
	
}








getStores();

?>