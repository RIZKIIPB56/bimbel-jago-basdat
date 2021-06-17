<?php
require_once "../_config/config.php";

mysqli_query($con, "DELETE FROM room_zoom WHERE no_room = '$_GET[no_room]'") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
?>