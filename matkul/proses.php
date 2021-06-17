<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

//use Ramsey\Uuid\Uuid;
//use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
    //$uuid = Uuid::uuid4()->toString();
    $kode_matkul = trim(mysqli_real_escape_string($con, $_POST['kode_matkul']));
    $nama_matkul = trim(mysqli_real_escape_string($con, $_POST['nama_matkul']));
    $deskripsi_matkul = trim(mysqli_real_escape_string($con, $_POST['deskripsi_matkul']));
    $hari_belajar = trim(mysqli_real_escape_string($con, $_POST['hari_belajar']));
    mysqli_query($con, "INSERT INTO matkul (kode_matkul, nama_matkul, deskripsi_matkul, hari_belajar) VALUES('$kode_matkul', '$nama_matkul', '$deskripsi_matkul', '$hari_belajar')") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";

} else if(isset($_POST['edit'])) {
    $kode_matkul = trim(mysqli_real_escape_string($con, $_POST['kode_matkul']));
    $nama_matkul = trim(mysqli_real_escape_string($con, $_POST['nama_matkul']));
    $deskripsi_matkul = trim(mysqli_real_escape_string($con, $_POST['deskripsi_matkul']));
    $hari_belajar = trim(mysqli_real_escape_string($con, $_POST['hari_belajar']));
    mysqli_query($con, "UPDATE matkul SET kode_matkul = '$kode_matkul', nama_matkul = '$nama_matkul', deskripsi_matkul = '$deskripsi_matkul', hari_belajar = '$hari_belajar' WHERE kode_matkul = '$kode_matkul'") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
}
?>
