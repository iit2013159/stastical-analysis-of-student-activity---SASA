<?php
/* Author : abhisekh kumar */
mysql_connect("localhost","root","acb132")or die("cannot connect");
mysql_query("use project");

$row = mysql_fetch_array(mysql_query("select Monday.18 AS bh1, Tuesday.18 AS bh1, Wednesday.18 AS bh1, Thursday.18 AS bh1, Friday.18 AS bh1, Saturday.18 AS bh1, Sunday.18 AS bh1 FROM Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday"));;


$Monday = $row[0];
$Tuesday= $row[1];
$Wednesday= $row[2];
$Thursday= $row[3];
$Friday= $row[4];
$Saturday= $row[5];
$Sunday= $row[6];


$a = array("day" => (string)$Monday, "name" =>"monday");
$b = array("day" => (string)$Tuesday,"name" =>"Tuesday");
$c = array("day"=> (string)$Wednesday,"name" =>"Wednesday");
$d = array("day"=> (string)$Thursday,"name" =>"Thursday");
$e = array("day"=> (string)$Friday,"name" =>"Friday");
$f = array("day"=> (string)$Saturday,"name" =>"Saturday");
$g = array("day"=> (string)$Sunday,"name" =>"Sunday");

//finally push the array to variable bh for generating the bh bar graph
$bh = array();
array_push($bh,$a);
array_push($bh,$b);
array_push($bh,$c);
array_push($bh,$d);
array_push($bh,$e);
array_push($bh,$f);
array_push($bh,$g);

/*echo $hostel."\n";
echo $college ."\n";
echo $outside."\n";
*/
echo json_encode($bh);
?>