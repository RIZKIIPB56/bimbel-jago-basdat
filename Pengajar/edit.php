<?php include_once('../_header.php'); ?>
<body background="rr.jpg">
<font color = #FFFAFA >
    <div class="box">
        <h1>Pengajar</h1>
            <h4>
                <small><font color = #FFFAFA >Edit Data Pengajar<font></small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <?php
                    $id_pengajar = @$_GET['id_pengajar'];
                    $sql_pengajar = mysqli_query($con, "SELECT * FROM pengajar WHERE id_pengajar = '$id_pengajar'") or die (mysqli_error($con));
                    $data = mysqli_fetch_array($sql_pengajar);
                    ?>
                    <form action="proses.php" method="post">
                        <div class="form-group">
                            <label for="id_pengajar">ID pengajar</label>
                            <input type="hidden" name="id" value="<?=$data['id_pengajar']?>">
                            <input type="text" name="id_pengajar" id="id_pengajar" value="<?=$data['id_pengajar']?>" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="nama_pengajar">Nama Pengajar</label>
                            <input type="text" name="nama_pengajar" id="nama_pengajar" value="<?=$data['nama_pengajar']?>" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="nomer_hp_pengajar">No Tlpn</label>
                            <input type="text" name="nomer_hp_pengajar" id="nomer_hp_pengajar" value="<?=$data['nama_pengajar']?>" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="alamat_pengajar">Alamat</label>
                            <input type="text" name="alamat_pengajar" id="alamat_pengajar" value="<?=$data['alamat_pengajar']?>" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="kode_matkul">Kode Matakuliah</label>
                            <input type="text" name="kode_matkul" id="kode_matkul" value="<?=$data['kode_matkul']?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="hari_belajar">Hari Belajar</label>
                            <input type="hari_belajar" name="hari_belajar" id="hari_belajar" class="form-control" value="<?=$data['hari_belajar']?>" required>
                        </div>
                        <div class="form-group pull-right">
                            <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
    </div>
</font>
</body>
<?php include_once('../_header.php'); ?>