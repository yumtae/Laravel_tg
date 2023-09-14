<?
include_once('../common.php');

$mb_id = $_POST['mb_id'];

function weighted_random($weights) {
  $r = rand(1, array_sum($weights));
  for($i=0; $i<count($weights); $i++) {
    $r -= $weights[$i];
    if($r < 1) return $i;
  }
  return false;
}

$today = date('Y-m-d');

//$chk = check_attend($mb_id,$today);
$chk = true;

if($chk == false)
{
	$data['chk'] = false;
}
else
{
	$coupon_kind = array('voucher','point','point','point','voucher','point','point','point','worldpick','point');
	$coupon_point = array(5000,5,20,1,3000,10,15,3,0,1);	
	$prd= array(' 5000원','포인트 5P','포인트 20P','포인트 1P',' 3000원','포인트 10P','포인트 15P','포인트 3P','상품1','포인트 1P');
	
	$weights = array(3,5,1,33,5,3,2,6,9,33); // 확률


	$index = weighted_random($weights);
	
	$degree = (mt_rand(2,7) * 360) + ($index *36 + mt_rand(1,35));
	
	
	if($coupon_kind[$index] == 'point')
	{
		$yn= 'Y';
		//insert_point($mb_id,$coupon_point[$index],$today." 출석체크");
	}
	else 
	{
		$yn = 'N';
	}
	//setNewCoupon($mb_id,$coupon_kind[$index],$coupon_point[$index],$yn);
	
	
	$data['degree'] = $degree;


	$data['prd'] = $prd[$index];
	$data['chk'] = true;
	
}

echo json_encode($data);

?>