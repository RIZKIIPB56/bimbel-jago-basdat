<?php
require_once "../_config/config.php";

mysqli_query($con, "DELETE FROM murid WHERE id_murid = 'G24190054'") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
?>