<?php
// header( "refresh:5	;url = info.php");
mysql_connect("localhost","root","acb132")or die("cannot connect");
mysql_query("use project");
$user_name   = $_GET["search"];
// echo $user_name;
$count = 0;
$i=1;
$a=array();
$out=mysql_query("select * from log where stu_roll_no = '$user_name' order by time desc");
//$max=$result[0];
while($i < 15){
	$b=array();
	$result=mysql_fetch_array($out);
	
	$transaction_id=$result[0];
	$gate_id=$result[2];
	$time = $result[3];
	$gate_type=$result[4];
	
	if($gate_type=="regional_gate"){
		$gate_name=mysql_fetch_array(mysql_query("select gate_name from regional_gate where gate_id=$gate_id"));
		$gate_name=$gate_name[0];
	}
	else{
		$building_id=mysql_fetch_array(mysql_query("select building_id from building_gate where gate_id=$gate_id"));
		$gate_name=mysql_fetch_array(mysql_query("select building_name from building where building_id=$building_id[0]"));
		$gate_name=$gate_name[0];
	}

	array_push($b,$transaction_id);	
	array_push($b,$gate_name);
	array_push($b,$time);
	array_push($b,$gate_type);
	array_push($a,$b);
	$i++;
	}
	echo json_encode($a);
?>
