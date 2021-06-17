<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

//use Ramsey\Uuid\Uuid;
//use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
    //$uuid = Uuid::uuid4()->toString();
    
    $no_paket = trim(mysqli_real_escape_string($con, $_POST['no_paket']));
    $nama_paket = trim(mysqli_real_escape_string($con, $_POST['nama_paket']));
    $deskripsi_paket = trim(mysqli_real_escape_string($con, $_POST['deskripsi_paket']));
    $biaya_paket = trim(mysqli_real_escape_string($con, $_POST['biaya_paket']));
    $kode_matkul = trim(mysqli_real_escape_string($con, $_POST['kode_matkul']));
    
    mysqli_query($con, "INSERT INTO rekapitulasi_studi (no_paket, nama_mpaket, deskripsi_paket, biaya_paket, kode_matkul) VALUE ('$no_paket', '$nama_paket', '$deskripsi_paket', '$biaya_paket', '$kode_matkul')") or die (mysqli_error($con));
    
    
    echo "<script>window.location='data.php';</script>";
} 
?>