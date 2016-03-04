<?php
mysql_connect("localhost","root","acb132")or die("cannot connect");
mysql_query("use project");
$max=mysql_fetch_array(mysql_query("select max(day) from error"));
$max=$max[0];
$min=mysql_fetch_array(mysql_query("select min(day) from error"));
$min=$min[0];
while( $max >= $min ){
    $result=mysql_fetch_array(mysql_query("select count(new_txn_id) from error where day=$max"));
    $result=$result[0];
    echo "$max    $result<br>\n";
    $max--;
    }
?>