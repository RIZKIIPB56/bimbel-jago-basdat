<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

//use Ramsey\Uuid\Uuid;
//use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
    $hari_belajar = trim(mysqli_real_escape_string($con, $_POST['hari_belajar']));
    $jam_belajar = trim(mysqli_real_escape_string($con, $_POST['jam_belajar']));
    mysqli_query($con, "INSERT INTO jadwal (hari_belajar, jam_belajar) 
                        VALUES('$hari_belajar', '$jam_belajar')") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";

} else if(isset($_POST['edit'])) {
    for ($i=0; $i<count($_POST['hari_belajar']); $i++) { 
        $hari_belajar = $_POST['hari_belajar'][$i];
        $jam_belajar = $_POST['jam_belajar'][$i];
        mysqli_query($con, "UPDATE jadwal SET hari_belajar ='$hari_belajar', jam_belajar ='$jam_belajar' WHERE hari_belajar = '$hari_belajar'") or die (mysqli_error($con));
    }
    echo "<script>alert('Data berhasil di update'); window.location='data.php';</script>";
}
?>