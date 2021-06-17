<?php include_once('../_header.php'); ?>
<body background="rr.jpg">
<font color = #FFFAFA>
    <div class="box">
        <h1>Pengajar</h1>
            <h4>
                <small><font color = #FFFAFA>Tambah Data Pengajar</font></small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form action="proses.php" method="post">
                        <div class="form-group">
                            <label for="id_pengajar">ID Pengajar</label>
                            <input type="text" name="id_pengajar" id="id_pengajar" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="nama_pengajar">Nama Pengajar</label>
                            <input type="text" name="nama_pengajar" id="nama_pengajar" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="nomer_hp_pengajar">No. Telp</label>
                            <input type="text" name="nomer_hp_pengajar" id="nomer_hp_pengajar" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat_pengajar">Alamat</label>
                            <textarea name="alamat_pengajar" id="alamat_pengajar" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="kode_matkul">Kode Matakuliah</label>
                            <input type="text" name="kode_matkul" id="kode_matkul" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="hari_belajar">Hari Belajar</label>
                            <input type="text" name="hari_belajar" id="hari_belajar" class="form-control" required>
                        </div>
                        <div class="form-group pull-right">
                            <input type="submit" name="add" value="Simpan" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
    </div>
</font>
</body>
<?php include_once('../_header.php'); ?>