<?php
require_once "_config/config.php";
require "_assets/libs/vendor/autoload.php";

if(!isset($_SESSION['user'])) {
    echo "<script>window.location='".base_url('auth/login')."';</script>";
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Aplikasi Bimbel Jago</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('_assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('_assets/css/simple-sidebar.css');?>" rel="stylesheet">
    <link href="<?=base_url('_assets/libs/DataTables/datatables.min.css');?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url('_assets/jago.jpeg')?>">
</head>
<body>
    <script src="<?=base_url('_assets/js/jquery.js')?>"></script>
    <script src="<?=base_url('_assets/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('_assets/libs/DataTables/datatables.min.js')?>"></script>
    <script src="<?=base_url('_assets/libs/vendor/ckeditor/ckeditor/ckeditor.js')?>"></script>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href=""><span class="text-primary"><b>BIMBEL JAGO</b></span></a>
                </li>
                <li>
                    <a href="<?=base_url('dashboard')?>">Dashboard</a>
                </li>
                <li>
                    <a href="<?=base_url('murid/data.php')?>">Data Murid</a>
                </li>
                <li>
                    <a href="<?=base_url('pengajar/data.php')?>">Data Pengajar</a>
                </li>
                <li>
                    <a href="<?=base_url('paket/data.php')?>">Paket Belajar</a>
                </li>
                <li>
                    <a href="<?=base_url('matkul/data.php')?>">Data Mata Kuliah</a>
                </li>
                <li>
                    <a href="<?=base_url('jadwal/data.php')?>">Jadwal Bimbel</a>
                </li>
                <li>
                    <a href="<?=base_url('roomzoom/data.php')?>">Room Zoom</a>
                </li>
                <li>
                    <a href="<?=base_url('rekap/data.php')?>">Rekapitulasi Studi</a>
                </li>
                <li>
                    <a href="<?=base_url('auth/logout.php')?>"><span class="text-danger">Logout</span></a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
