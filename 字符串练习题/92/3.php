<?php 
$price=4000;
$usertype=0;//0��ͨ�û�  1��ͨ��Ա  2VIP��Ա
if($price>5000){
	$price*=0.8;
}else{
	$price*=0.9;
}
switch($usertype){
	case 1:
		$price*=0.98;
		break;
	case 2:
		$price*=0.95;
}
echo $price;
?>