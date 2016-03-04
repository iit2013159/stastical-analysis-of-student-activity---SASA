<?php
include("connection_location.php");
$sql = "select * from building ";
$result = $conn->query($sql);
// echo json_encode($result);

$a = array();

while ($r = mysqli_fetch_assoc($result)) {
    array_push($a, $r);
}

echo json_encode($a);



?>
