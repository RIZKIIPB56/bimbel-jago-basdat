<?php include_once('../_header.php'); ?>
<body background="rr.jpg">
<font color = #FFFAFA>
    <div class="box">
        <h1>Rekapitulasi Studi</h1>
            <h4>
                <small><font color = #FFFAFA>Edit Rekapitulasi Studi</font></small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <?php
                    $id = @$_GET['kode_rekap'];
                    $sql_rs = mysqli_query($con, "SELECT * FROM rekapitulasi_studi WHERE kode_rekap = '$id'") or die (mysqli_error($con)) ;
                    $data = mysqli_fetch_array($sql_rs);
                    ?>
                    <form action="proses.php" method="post">
                        <div class="form-group">
                            <label for="kode_rekap">Kode Rekap</label>
                            <input type="hidden" name="kode_rekap" value="<?=$data['kode_rekap']?>">
                            <input type="text" name="kode_rekap" id="kode_rekap" value="<?=$data['kode_rekap']?>" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="idmurid">ID Murid</label>
                            <select name="idmurid" id="idmurid"  value="<?=$data['id_murid']?>" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php
                                $sql_idmurid = mysqli_query($con, "SELECT * FROM murid") or die (mysqli_error($con));
                                while($data_idmurid = mysqli_fetch_array($sql_idmurid)) {
                                    echo '<option value="'.$data_idmurid['id_murid'].'">'.$data_idmurid['id_murid'].'</option>';
                                } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="murid">Nama Murid</label>
                            <select name="murid" id="murid" value="<?=$data['nama_murid']?>" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php
                                $sql_murid = mysqli_query($con, "SELECT * FROM murid") or die (mysqli_error($con));
                                while($data_murid = mysqli_fetch_array($sql_murid)) {
                                    echo '<option value="'.$data_murid['id_murid'].'">'.$data_murid['nama_murid'].'</option>';
                                } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="km">Kode Mata Kuliah</label>
                            <select name="km" id="km" value="<?=$data['kode_matkul']?>" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php
                                $sql_km = mysqli_query($con, "SELECT * FROM matkul") or die (mysqli_error($con));
                                while($data_km = mysqli_fetch_array($sql_km)) {
                                    echo '<option value="'.$data_km['kode_matkul'].'">'.$data_km['kode_matkul'].'</option>';
                                } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="matkul">Mata Kuliah</label>
                            <select name="matkul" id="matkul" value="<?=$data['nama_matkul']?>" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php
                                $sql_matkul = mysqli_query($con, "SELECT * FROM matkul") or die (mysqli_error($con));
                                while($data_matkul = mysqli_fetch_array($sql_matkul)) {
                                    echo '<option value="'.$data_matkul['kode_matkul'].'">'.$data_matkul['nama_matkul'].'</option>';
                                } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nilai">Nilai Mata Kuliah</label>
                            <input type="text" name="nilai" id="nilai" value="<?=$data['nilai_matkul']?>" class="form-control" rows="1" required>
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