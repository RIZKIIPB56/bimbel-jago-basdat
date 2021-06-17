<?php include_once('../_header.php'); ?>
<body background="rr.jpg">
    <div class="box">
    <font color = #FFFAFA >
    <div>
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
            </div>
        <h1>Paket Belajar</h1>
        <h4>
        <div style="margin-bottom: 20px;">
            <small><font color = #FFFAFA >Data Paket Belajar</font></small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Paket</a>
            </div>
            <form class="form-inline" action="" method="post">
                <div class="form-group">
                    <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </div>
            </form>
            </div>
        </h4>
        
</font>
        <div class="table-responsive">
            <table style="background-color:#F0F8FF;" class="table table-striped table-bordered table-hover" id="rekapitulasi_studi">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>No Paket</th>
                        <th>Nama Paket</th>
                        <th>Deskripsi Paket</th>
                        <th>Biaya Paket</th>
                        <th>Kode Mata Kuliah</th>
                        <th><i class="glyphicon glyphicon-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $query = "SELECT * FROM paket_belajar";
                    $sql_cm = mysqli_query($con, $query) or die (mysqli_error($con));
                    while($data = mysqli_fetch_array($sql_cm)) { ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$data['no_paket']?></td>
                            <td><?=$data['nama_paket']?></td>
                            <td><?=$data['deskripsi_paket']?></td>
                            <td><?=$data['biaya_paket']?></td>
                            <td><?=$data['kode_matkul']?></td>
                            <td>
                                <a href="del.php?id=<?=$data['no_paket']?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash" onclick="return confirm('Apakah yakin akan menghapus data?')"></i></a>
                                <a href="edit.php?id=<?=$data['no_paket']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                            </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#paket_belajar').DataTable({
                columnDefs: [
                    {
                        "searchable": false,
                        "orderable": false,
                        "targets": 8
                    }
                ]
            });
        })
        </script>
    </div>
    
</body>
<?php include_once('../_footer.php'); ?>