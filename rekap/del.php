<?php
require_once "../_config/config.php";

mysqli_query($con, "DELETE FROM rekapitulasi_studi WHERE kode_rekap = '$_GET[kode_rekap]'") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
?>