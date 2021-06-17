<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

//use Ramsey\Uuid\Uuid;
//use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['edit'])) {
    //$id_murid = $_POST['id_murid'];
    $no_paket = trim(mysqli_real_escape_string($con, $_POST['no_paket']));
    $nama_paket = trim(mysqli_real_escape_string($con, $_POST['nama_paket']));
    $deskripsi_paket = trim(mysqli_real_escape_string($con, $_POST['deskripsi_paket']));
    $biaya_paket = trim(mysqli_real_escape_string($con, $_POST['biaya_paket']));
    $kode_matkul = trim(mysqli_real_escape_string($con, $_POST['kode_matkul']));
    $sql_cek_id_pkt =  mysqli_query($con, "SELECT * FROM paket_belajar WHERE no_paket = '$no_paket'") or die (mysqli_error($con));
    if(mysqli_num_rows($sql_cek_id_pkt) > 0) {
        echo "<script>alert('Nomor NO Paket sudah pernah diinput'); window.location='add.php';</script>";
    } else {
        mysqli_query($con, "UPDATE paket_belajar SET no_paket = '$no_paket', nama_paket = '$nama_paket', deskripsi_paket = '$deskripsi_paket', biaya_paket = '$biaya_paket', kode_matku = '$kode_matkul' WHERE no_paket = '$no_paket'") or die (mysqli_error($con));
        echo "<script>window.location='data.php';</script>";
    }
}
?>