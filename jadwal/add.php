<?php include_once('../_header.php'); ?>
<body background="rr.jpg">
<font color = #FFFAFA>
<div class="box">
        <h1>Jadwal</h1>
            <h4>
                <small><font color = #FFFAFA>Tambah Jadwal Belajar</font></small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form action="proses.php" method="post">
                        <div class="form-group">
                            <label for="hari_belajar">Kode Hari</label>
                            <input type="text" name="hari_belajar" id="hari_belajar" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="jam_belajar">Jam Belajar</label>
                            <input type="text" name="jam_belajar" id="jam_belajar" class="form-control" required>
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
<?php include_once('../_footer.php'); ?>