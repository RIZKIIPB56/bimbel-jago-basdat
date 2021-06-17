<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

//use Ramsey\Uuid\Uuid;
//use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
    //$uuid = Uuid::uuid4()->toString();
    
    $no_room = trim(mysqli_real_escape_string($con, $_POST['no_room']));
    $kapasitas = trim(mysqli_real_escape_string($con, $_POST['kapasitas']));
    $kode_matkul = trim(mysqli_real_escape_string($con, $_POST['kode_matkul']));
    
    mysqli_query($con, "INSERT INTO room_zoom (no_room, kapasitas, kode_matkul) VALUE ('$no_room', '$kapasitas', '$kode_matkul')") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";

} else if(isset($_POST['edit'])) {
    $no_room = trim(mysqli_real_escape_string($con, $_POST['no_room']));
    $kapasitas = trim(mysqli_real_escape_string($con, $_POST['kapasitas']));
    $kode_matkul = trim(mysqli_real_escape_string($con, $_POST['kode_matkul']));
    mysqli_query($con, "UPDATE room_zoom SET no_room = '$no_room', kapasitas = '$kapasitas', kode_matkul = '$kode_matkul' WHERE no_room = '$no_room'") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
}
?>