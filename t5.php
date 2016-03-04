<?php
/*include("connection_location.php");
$sql = "select Monday.1 AS bh1, Tuesday.1 AS bh1, Wednesday.1 AS bh1, Thursday.1 AS bh1, Friday.1 AS bh1, Saturday.1 AS bh1, Sunday.1 AS bh1
FROM Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday";
$result = $conn->query($sql);
// echo json_encode($result);

$a = array();

while ($r = mysqli_fetch_assoc($result)) {
    array_push($a, $r);
}
echo json_encode($a);
*/
mysql_connect("localhost","root","acb132")or die("cannot connect");
mysql_query("use project");
//sql_query("use project");
$row = mysql_fetch_array(mysql_query("select Monday.13 AS bh1, Tuesday.13 AS bh1, Wednesday.13 AS bh1, Thursday.13 AS bh1, Friday.13 AS bh1, Saturday.13 AS bh1, Sunday.13 AS bh1 FROM Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday"));;


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