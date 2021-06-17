<?php include_once('../_header.php'); ?>
<body background="rr.jpg">
    <div class="box">
    <font color = #FFFAFA >
        <h1>Murid</h1>
            <h4>
                <small><font color = #FFFAFA >Edit Data Murid </font></small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <?php
                    $id_murid = @$_GET['id_murid'];
                    $sql_murid = mysqli_query($con, "SELECT * FROM murid WHERE id_murid = '$id_murid'") or die (mysqli_error($con));
                    $data = mysqli_fetch_array($sql_murid);
                    ?>
                    <form action="proses.php" method="post">
                        <fieldset>
                            <input type="hidden" name="id_murid" value="<?php echo $data['id_murid']?>">
                        <div class="form-group">
                            <label for="id_murid">ID Murid</label>
                            <input type="text" name="id_murid" id="id_murid" class="form-control" value="<?php echo $data['id_murid']?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="nama_murid">Nama Murid</label>
                            <input type="text" name="nama_murid" id="nama_murid" class="form-control" value="<?=$data['nama_murid']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <div>
                                <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
			                    <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                            </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" name="kelas" id="kelas" class="form-control" value="<?=$data['kelas']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" id="jurusan" class="form-control" value="<?=$data['jurusan']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nomer_hp_murid">No. Telp</label>
                            <input type="text" name="nomer_hp_murid" id="nomer_hp_murid" class="form-control" value="<?=$data['nomer_hp_murid']?>"required>
                        </div>
                        <div class="form-group">
                            <label for="alamat_murid">Alamat</label>
                            <textarea name="alamat_murid" id="alamat_murid" class="form-control" required><?=$data['alamat_murid']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="no_paket">Nomor Paket</label>
                            <div>
                                <label><input type="radio" name="no_paket" value="J01T"> J01T</label>
                                <label><input type="radio" name="no_paket" value="J02T"> J02T</label>
                                <label><input type="radio" name="no_paket" value="J01S"> J03T</label>
                                <label><input type="radio" name="no_paket" value="J02S"> J01S</label>
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