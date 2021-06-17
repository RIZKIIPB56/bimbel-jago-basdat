<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

//use Ramsey\Uuid\Uuid;
//use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
    //$uuid = Uuid::uuid4()->toString();
    $id_murid = trim(mysqli_real_escape_string($con, $_POST['id_murid']));
    $nama_murid = trim(mysqli_real_escape_string($con, $_POST['nama_murid']));
    $jenis_kelamin = trim(mysqli_real_escape_string($con, $_POST['jenis_kelamin']));
    $kelas = trim(mysqli_real_escape_string($con, $_POST['kelas']));
    $jurusan = trim(mysqli_real_escape_string($con, $_POST['jurusan']));
    $nomer_hp_murid = trim(mysqli_real_escape_string($con, $_POST['nomer_hp_murid']));
    $alamat_murid = trim(mysqli_real_escape_string($con, $_POST['alamat_murid']));
    $no_paket = trim(mysqli_real_escape_string($con, $_POST['no_paket']));
    $sql_cek_id_murid =  mysqli_query($con, "SELECT * FROM murid WHERE id_murid = '$id_murid'") or die (mysqli_error($con));
    if(mysqli_num_rows($sql_cek_id_murid) > 0) {
        echo "<script>alert('Nomor ID Murid sudah pernah diinput'); window.location='add.php';</script>";
    } else {
        mysqli_query($con, "INSERT INTO murid (id_murid, nama_murid, jenis_kelamin, kelas, jurusan, nomer_hp_murid, alamat_murid, no_paket) 
                            VALUES('$id_murid', '$nama_murid', '$jenis_kelamin', '$kelas', '$jurusan', '$nomer_hp_murid', '$alamat_murid', '$no_paket')") or die (mysqli_error($con));
        echo "<script>window.location='data.php';</script>";
    }
} 

else if(isset($_POST['edit'])) {
    //$id_murid = $_POST['id_murid'];
    $id_murid = trim(mysqli_real_escape_string($con, $_POST['id_murid']));
    $nama_murid = trim(mysqli_real_escape_string($con, $_POST['nama_murid']));
    $jenis_kelamin = trim(mysqli_real_escape_string($con, $_POST['jenis_kelamin']));
    $kelas = trim(mysqli_real_escape_string($con, $_POST['kelas']));
    $jurusan = trim(mysqli_real_escape_string($con, $_POST['jurusan']));
    $nomer_hp_murid = trim(mysqli_real_escape_string($con, $_POST['nomer_hp_murid']));
    $alamat_murid = trim(mysqli_real_escape_string($con, $_POST['alamat_murid']));
    $no_paket = trim(mysqli_real_escape_string($con, $_POST['no_paket']));
    $sql_cek_id_murid =  mysqli_query($con, "SELECT * FROM murid WHERE id_murid = '$id_murid'") or die (mysqli_error($con));
   
    mysqli_query($con, "UPDATE murid SET id_murid = '$id_murid', nama_murid = '$nama_murid', jenis_kelamin = '$jenis_kelamin', kelas = '$kelas', jurusan = '$jurusan', nomer_hp_murid = '$nomer_hp_murid', alamat_murid = '$alamat_murid', no_paket = '$no_paket' WHERE id_murid = '$id_murid'") or die (mysqli_error($con));
        echo "<script>window.location='data.php';</script>";
    
}
?>
