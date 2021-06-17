<?php include_once('../_header.php'); ?>
<body = background="rr.jpg">
<div>
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
            </div>
<font size = "2" color = #FFFAFA>
    <div class="box">
        <h1>Pengajar</h1>
        <h4>
            <small><font size = "2" color = #FFFAFA>Data Pengajar </font></small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah pengajar</a>
            </div>
            <form class="form-inline" action="" method="post">
                <div class="form-group">
                    <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </div>
            </form>
        </h4>
        </font>
        <form method="post" name="proses">
        <div class="table-responsive">   
        <table style="background-color:#F0F8FF;" class="table table-striped table-bordered table-hover" id="Pengajar">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>ID Pengajar</th>
                        <th>Nama Pengajar</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                        <th>Kode Matakuliah</th>
                        <th>Hari Belajar</th>
                        <th><i class="glyphicon glyphicon-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                $sql_poli = mysqli_query($con, "SELECT * FROM pengajar") or die (mysqli_error($con));
                while($data = mysqli_fetch_array($sql_poli)) { ?>
                    <tr>
                        <!-- <td align="center">
                            <input type="checkbox" name="checked[]" class="check" value="<?=$data['id_pengajar'];?>">
                        </td> -->
                        <td><?=$no++?>.</td>
                        <td><?=$data['id_pengajar'];?></td>
                        <td><?=$data['nama_pengajar'];?></td>
                        <td><?=$data['nomer_hp_pengajar'];?></td>
                        <td><?=$data['alamat_pengajar'];?></td>
                        <td><?=$data['kode_matkul'];?></td>
                        <td><?=$data['hari_belajar'];?></td>
                        
                        
                        <td align="center">
                        <a href ="del.php?id=<?=$data ['id_pengajar']?>" onclick="return confirm('Apakah yakin menghapus data?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                            <a href="edit.php?id=<?=$data['id_pengajar']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        </form>
    </div>
    <script>
    $(document).ready(function() {

        $('#pengajar').DataTable({
            columnDefs: [
                {
                    "searchable": false,
                    "orderable": false,
                    "targets": [0, 6]
                }
            ],
            "order": [1, "asc"]
        });

        $('#select_all').on('click', function() {
            if(this.checked) {
                $('.check').each(function() {
                    this.checked = true;
                })
            } else {
                $('.check').each(function() {
                    this.checked = false;
                })
            }
        });

        $('.check').on('click', function() {
            if($('.check:checked').length == $('.check').length) {
                $('#select_all').prop('checked', true)
            } else {
                $('#select_all').prop('checked', false)
            }
        })
    })

    
    </script>

</body>
<?php include_once('../_footer.php'); ?>