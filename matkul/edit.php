<?php include_once('../_header.php'); ?>
<body background="rr.jpg">
<font color = #FFFAFA>
    <div class="box">
        <h1>Mata Kuliah</h1>
            <h4>
                <small><font color = #FFFAFA>Edit Mata Kuliah</font></small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <?php
                    $id = @$_GET['kode_matkul'];
                    $sql_matkul = mysqli_query($con, "SELECT * FROM matkul WHERE kode_matkul = '$id'") or die (mysqli_error($con)) ;
                    $data = mysqli_fetch_array($sql_matkul);
                    ?>
                    <form action="proses.php" method="post">
                        <div class="form-group">
                            <label for="kode_matkul">Kode Matkul</label>
                            <input type="hidden" name="kode_matkul" value="<?=$data['kode_matkul']?>">
                            <input type="text" name="kode_matkul" id="kode_matkul" value="<?=$data['kode_matkul']?>" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="nama_matkul">Nama Mata Kuliah</label>
                            <input type="text" name="nama_matkul" id="nama_matkul" value="<?=$data['nama_matkul']?>" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_matkul">Deskripsi Mata Kuliah</label>
                            <textarea name="deskripsi_matkul" id="deskripsi_matkul" class="form-control" required><?=$data['ket_obat']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="kh">Kode Hari</label>
                            <select name="kh" id="kh" class="form-control" value="<?=$data['hari_belajar']?>" required>
                                <option value="">- Pilih -</option>
                                <?php
                                $sql_kh = mysqli_query($con, "SELECT * FROM jadwal") or die (mysqli_error($con));
                                while($data_km = mysqli_fetch_array($sql_kh)) {
                                    echo '<option value="'.$data_km['hari_belajar'].'">'.$data_km['hari_belajar'].'</option>';
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