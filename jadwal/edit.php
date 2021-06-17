<?php include_once('../_header.php'); ?>
<body background="rr.jpg">
<font color = #FFFAFA>
    <div class="box">
        <h1>Jadwal</h1>
            <h4>
                <small><font color = #FFFAFA>Edit Jadwal</font></small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <?php
                    $id = @$_GET['hari_belajar'];
                    $sql_matkul = mysqli_query($con, "SELECT * FROM matkul WHERE hari_belajar = '$id'") or die (mysqli_error($con)) ;
                    $data = mysqli_fetch_array($sql_matkul);
                    ?>
                    <form action="proses.php" method="post">
                        <div class="form-group">
                            <label for="hari_belajar">Kode Hari</label>
                            <input type="hidden" name="hari_belajar" value="<?=$data['hari_belajar']?>">
                            <input type="text" name="hari_belajar" id="hari_belajar" value="<?=$data['hari_belajar']?>" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="jam_belajar">Jam Belajar</label>
                            <input type="text" name="jam_belajar" id="jam_belajar" value="<?=$data['jam_belajar']?>" class="form-control" required autofocus>
                        </div>
                                <?php
                                $sql_kh = mysqli_query($con, "SELECT * FROM jadwal") or die (mysqli_error($con));
                                while($data_km = mysqli_fetch_array($sql_kh)) {
                                    echo '<option value="'.$data_km['hari_belajar'].'">'.$data_km['hari_belajar'].'</option>';
                                } ?>  
                            </select> -->
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