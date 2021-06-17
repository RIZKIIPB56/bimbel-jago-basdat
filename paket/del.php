<?php
require_once "../_config/config.php";

mysqli_query($con, "DELETE FROM paket_belajar WHERE no_paket = '$_GET[no_paket]'") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
?>