<?php include_once('../_header.php'); ?>
<body background="rr.jpg">
    <div class="box">
    <font color = #FFFAFA >
        <h1>Paket belajar</h1>
            <h4>
                <small><font color = #FFFAFA >Edit Paket Belajar </font></small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <?php
                    $id_pkt= @$_GET['no_paket'];
                    $sql_pkt = mysqli_query($con, "SELECT * FROM paket_belajar WHERE no_paket = '$id_pkt'") or die (mysqli_error($con));
                    $data = mysqli_fetch_array($sql_pkt);
                    ?>
                    <form action="prosesedit.php" method="post">
                        <fieldset>
                            <input type="hidden" name="no_paket" value="<?php echo $data['no_paket']?>">
                        <div class="form-group">
                            <label for="no_paket">No Paket</label>
                            <input type="text" name="no_paket" id="no_paket" class="form-control" value="<?php echo $data['no_paket']?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="nama_paket">Nama Paket</label>
                            <input type="text" name="nama_paket" id="nama_paket" class="form-control" value="<?=$data['nama_paket']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_paket">Deskripsi Paket</label>
                            <textarea name="deskripsi_paket" id="deskripsi_paket" class="form-control" required><?=$data['deskripsi_paket']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="biaya_paket">Biaya Paket</label>
                            <input type="text" name="biaya_paket" id="biaya_paket" class="form-control" value="<?=$data['biaya_paket']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="kode_matkul">Kode Mata Kuliaj</label>
                            <textarea name="kode_matkul" id="kode_matkul" class="form-control" required><?=$data['kode_matkul']?></textarea>
                        </div>
                        <div class="form-group pull-right">
                            <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                        </div>
                    </fieldset>
                    </form>
                </div>
            </div>
    </div>
    <font>
</body>
<?php include_once('../_header.php'); ?>