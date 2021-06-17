<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
    //$uuid = Uuid::uuid4()->toString();//
    $id_pengajar = trim(mysqli_real_escape_string($con, $_POST['id_pengajar']));
    $nama_pengajar = trim(mysqli_real_escape_string($con, $_POST['nama_pengajar']));
    $nomer_hp_pengajar = trim(mysqli_real_escape_string($con, $_POST['nomer_hp_pengajar']));
    $alamat_pengajar = trim(mysqli_real_escape_string($con, $_POST['alamat_pengajar']));
    $kode_matkul = trim(mysqli_real_escape_string($con, $_POST['kode_matkul']));
    $hari_belajar = trim(mysqli_real_escape_string($con, $_POST['hari_belajar']));
    mysqli_query($con, "INSERT INTO pengajar (id_pengajar, nama_pengajar, nomer_hp_pengajar, alamat_pengajar, kode_matkul, hari_belajar) 
                        VALUES('$id_pengajar', '$nama_pengajar','$nomer_hp_pengajar', '$alamat_pengajar', '$kode_matkul', '$hari_belajar')") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
} else if(isset($_POST['edit'])) {
   // $id = $_POST['id'];//
   $id_pengajar = trim(mysqli_real_escape_string($con, $_POST['id_pengajar']));
   $nama_pengajar = trim(mysqli_real_escape_string($con, $_POST['nama_pengajar']));
   $nomer_hp_pengajar = trim(mysqli_real_escape_string($con, $_POST['nomer_hp_pengajar']));
   $alamat_pengajar = trim(mysqli_real_escape_string($con, $_POST['alamat_pengajar']));
   $kode_matkul = trim(mysqli_real_escape_string($con, $_POST['kode_matkul']));
   $hari_belajar = trim(mysqli_real_escape_string($con, $_POST['hari_belajar']));
    mysqli_query($con, "UPDATE pengajar SET id_pengajar = '$id_pengajar',
                        nama_pengajar =  '$nama_pengajar', nomer_hp_pengajar = '$nomer_hp_pengajar',
                        alamat_pengajar = '$alamat_pengajar', 
                        kode_matkul = '$kode_matkul', hari_belajar = '$hari_belajar' WHERE id_pengajar = '$id_pengajar'") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";   
}
?>
