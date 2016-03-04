<?php
// Status of current building at different time
include("connection_location.php");
$sql = (" select `1` as a,`2` as b,`3` as c,`4` as d, `5` as e,`6` as f,`7` as g,`8` as h,`9` as i,`10` as j,`11` as k, `12` as l, `13` as m, `14` as n,`15` as o,`16` as p, `17` as q,`18` as r,time_slot from today");
$result = $conn->query($sql);

$a = array();

while ($r = mysqli_fetch_assoc($result)) {
    array_push($a, $r);
}
echo json_encode($a);

?>
