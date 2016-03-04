<html>
<head>
<title> Search PAGE </title>
</head>
<?php
mysql_connect("localhost","root","acb132")or die("cannot connect");
mysql_query("use project");
//session_start();
//echo "yes";
$user_name   = $_POST["search"];
//$user_name ='iit2012014';
$count = 0;
$result=mysql_query("select * from log where stu_roll_no = '$user_name'"); 
while($row=mysql_fetch_array($result)){
 	//$row=mysql_fetch_array($result);
 	//$row = mysql_fetch_array($result)
 	echo "$row[0].' '.$row[1].' '.$row[2].' '.$row[3].' '.$row[4].'<br><br>'";
	$count = $count + 1;
}
 /*while($row = $result->fetch_assoc())  {
//echo '<a href="student.php?profile_id='.$row['user_id'].'"style = color: #428989;">'.$row['firstname'].' '.$row['lastname'].'</a><br><br>';
echo "$row['transaction_id'].' '.$row['stu_roll_no'].' '.$row['gate_id'].' '.$row['time'].' '.$row['gate_type']";
$count = $count + 1;
}
*/
if ($count == 0)
echo "no one";
//echo $name[0];
//echo $c;
//$conn->close();
?>
</html>
