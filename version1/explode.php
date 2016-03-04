<?php
mysql_connect("localhost","root","acb132")or die("cannot connect");
mysql_query("use project");
$result=mysql_fetch_array(mysql_query("select current_timestamp"));
echo $result[0]."\n";
$result1=explode(" ",$result[0]);
echo $result1[0]."\n";
echo $result1[1]."\n";

$result2=explode("-",$result1[0]);
echo $result2[0]."\n";
echo $result2[1]."\n";
echo $result2[2]."\n";
$date=$result2[2];
$total=mysql_fetch_array(mysql_query("select count(*) from error"));
$total=$total[0];
while($total>0){
	$result3=mysql_query("select count(*) from error where time='$result[0]'");
	
?>