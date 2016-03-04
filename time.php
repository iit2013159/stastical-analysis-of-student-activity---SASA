<?php
include("connection_location.php");
$sql = "select count(transaction_id ) as trans,hour(time) as hou from log where date(time) = curdate() group by hour(time)";
$result = $conn->query($sql);
// echo json_encode($result);

$a = array();

while ($r = mysqli_fetch_assoc($result)) {
    array_push($a, $r);
}

echo json_encode($a);



?>
