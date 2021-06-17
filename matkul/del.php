<?php
require_once "../_config/config.php";

mysqli_query($con, "DELETE FROM matkul WHERE kode_matkul = '$_GET[kode_matkul]'") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
?>