<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

//use Ramsey\Uuid\Uuid;
//use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
    //$uuid = Uuid::uuid4()->toString();
    
    $kode_rekap = trim(mysqli_real_escape_string($con, $_POST['kode_rekap']));
    $id_murid = trim(mysqli_real_escape_string($con, $_POST['id_murid']));
    $nama_murid = trim(mysqli_real_escape_string($con, $_POST['nama_murid']));
    $kode_matkul = trim(mysqli_real_escape_string($con, $_POST['kode_matkul']));
    $nama_matkul = trim(mysqli_real_escape_string($con, $_POST['nama_matkul']));
    $nilai_matkul = trim(mysqli_real_escape_string($con, $_POST['nilai_matkul']));
    
    mysqli_query($con, "INSERT INTO rekapitulasi_studi (kode_rekap, id_murid, nama_murid, kode_matkul, nama_matkul, nilai_matkul) VALUE ('$kode_rekap', '$id_murid', '$nama_murid', '$kode_matkul', '$nama_matkul', '$nilai_matkul')") or die (mysqli_error($con));
    
   
    echo "<script>window.location='data.php';</script>";

} else if(isset($_POST['edit'])) {
    $kode_rekap = trim(mysqli_real_escape_string($con, $_POST['kode_rekap']));
    $id_murid = trim(mysqli_real_escape_string($con, $_POST['id_murid']));
    $nama_murid = trim(mysqli_real_escape_string($con, $_POST['nama_murid']));
    $kode_matkul = trim(mysqli_real_escape_string($con, $_POST['kode_matkul']));
    $nama_matkul = trim(mysqli_real_escape_string($con, $_POST['nama_matkul']));
    $nilai_matkul = trim(mysqli_real_escape_string($con, $_POST['nilai_matkul']));
    mysqli_query($con, "UPDATE rekapitulasi_studi SET kode_rekap = '$kode_rekap', id_murid = '$id_murid', nama_murid = '$nama_murid', kode_matkul = '$kode_matkul', nama_matkul = '$nama_matkul', nilai_matkul ='$nilai_matkul' WHERE kode_rekap = '$kode_rekap'") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
}
?>