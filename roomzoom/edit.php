<?php include_once('../_header.php'); ?>
<body background="rr.jpg">
<font color = #FFFAFA>
    <div class="box">
        <h1>Room ZOOM</h1>
            <h4>
                <small><font color = #FFFAFA>Edit Room ZOOM</font></small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <?php
                    $id = @$_GET['no_room'];
                    $sql_rz = mysqli_query($con, "SELECT * FROM room_zoom WHERE no_room = '$id'") or die (mysqli_error($con)) ;
                    $data = mysqli_fetch_array($sql_rz);
                    ?>
                    <form action="proses.php" method="post">
                        <div class="form-group">
                            <label for="no_room">Nomor Room</label>
                            <input type="hidden" name="no_room" value="<?=$data['no_room']?>">
                            <input type="text" name="no_room" id="no_room" value="<?=$data['no_room']?>" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="kapasitas">Kapasitas</label>
                            <input type="text" name="kapasitas" id="kapasitas" value="<?=$data['kapasitas']?>" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="kh">Kode Mata Kuliah</label>
                            <select name="kh" id="kh" class="form-control" value="<?=$data['kode_matkul']?>" required>
                                <option value="">- Pilih -</option>
                                <?php
                                $sql_matkul = mysqli_query($con, "SELECT * FROM matkul") or die (mysqli_error($con));
                                while($data_matkul = mysqli_fetch_array($sql_matkul)) {
                                    echo '<option value="'.$data_matkul['kode_matkul'].'">'.$data_matkul['nama_matkul'].'</option>';
                                } ?>
                            </select>
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