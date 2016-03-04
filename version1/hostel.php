<?php
mysql_connect("localhost","root","acb132")or die("cannot connect");
mysql_query("use project");
//mysql_query("use project");

$total = 0;
$sum = 0;
$i = 1;
while($i < 9){

	$sum  = mysql_fetch_array(mysql_query("select b_number_of_students from building where building_id = '$i'"));
	$total += $sum[0];
	$i++;
}
$hostel = $total;
$sum = mysql_fetch_array(mysql_query("select sum(b_number_of_students) from building"));
$sum = $sum[0];
$college = $sum - $hostel;

$final = mysql_fetch_array(mysql_query("select count(*) from Student"));
$final = $final[0];
$outside = $final - $sum;
$a = array("strength" => (string)$hostel, "name" =>"hostel");
$b = array("strength" => (string)$college,"name" =>"campus");
$c = array("strength"=> (string)$outside,"name" =>"outside");
  $bh = array();
array_push($bh,$a);
array_push($bh,$b);
array_push($bh,$c);
//$a=array();
//$result=mysql_fetch_array(mysql_query("select count(*) from current_status where region_id=0"));
//array_push($a,$result[0]);

/*echo $hostel."\n";
echo $college ."\n";
echo $outside."\n";
*/
echo json_encode($bh);
?>
