<?php
include("connection_location.php");
$sql = "select * from building where building_id > 5";
$result = $conn->query($sql);
// echo json_encode($result);

$a = array();

while ($r = mysqli_fetch_assoc($result)) {
    array_push($a, $r);
}

echo json_encode($a);



?>
