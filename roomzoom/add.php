<?php include_once('../_header.php'); ?>
<body background="rr.jpg">
<font color = #FFFAFA>
    <div class="box">
        <h1>Room ZOOM</h1>
            <h4>
                <small><font color = #FFFAFA>Tambah Ruangan</font></small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form action="proses.php" method="post">
                        <div class="form-group">
                            <label for="no_room">Nomor Room</label>
                            <input type="text" name="no_room" id="no_room" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="kapasitas">Kapasitas</label>
                            <input type="text" name="kapasitas" id="kapasitas" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="matkul">Mata Kuliah</label>
                            <select name="matkul" id="matkul" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php
                                $sql_matkul = mysqli_query($con, "SELECT * FROM matkul") or die (mysqli_error($con));
                                while($data_matkul = mysqli_fetch_array($sql_matkul)) {
                                    echo '<option value="'.$data_matkul['kode_matkul'].'">'.$data_matkul['nama_matkul'].'</option>';
                                } ?>
                            </select>
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