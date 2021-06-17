<?php include_once('../_header.php'); ?>
<body background="rr.jpg">
<font color = #FFFAFA >
    <div class="box">
        <h1>Paket Belajar</h1>
            <h4>
                <small><font color = #FFFAFA >Tambah Paket Belajar</font></small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form action="proses.php" method="post">
                        <div class="form-group">
                            <label for="no_paket">No Paket: </label>
			                <input type="text" name="no_paket" id="no_paket" class="form-control" rows="1" required> 
                        </div>   
                        <div class="form-group">
                            <label for="nama_paket">Nama Paket</label>
                            <input type="text" name="nama_paket" id="nama_paket" class="form-control" rows="1" required> 
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_paket">Deskripsi Paket</label>
                            <textarea name="deskripsi_paket" id="deskripsi_paket" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="biaya_paket">Biaya Paket</label>
                            <input type="text" name="biaya_paket" id="biaya_paket" class="form-control" rows="1" required>
                        </div>
                        <div class="form-group">
                            <label for="kode_matkul">Kode Mata Kuliah</label>
                            <textarea name="kode_matkul" id="kode_matkul" class="form-control" required></textarea>
                        </div>
                        <div class="form-group pull-right">
                            <input type="submit" name="add" value="Simpan" class="btn btn-success">
                        </div>
                        
                </div>
            </div>
    </div>
    </font>
</body>
<?php include_once('../_header.php'); ?>