<?php include_once('../_header.php'); ?>
<body background="rr.jpg">
<div>
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
            </div>
    <div class="box">
    <font size = "2" color = #FFFAFA>
        <h1>Mata Kuliah</h1>
        <h4>
            <small><font size = "2" color = #FFFAFA>Data Mata Kuliah</font></small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Matkul</a>
            </div>
        </h4>
</font>
        <div style="margin-bottom: 20px;">
            <form class="form-inline" action="" method="post">
                <div class="form-group">
                    <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table style="background-color:#F0F8FF;" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Mata Kuliah</th>
                        <th>Nama Mata Kuliah</th>
                        <th>Deskripsi Mata Kuliah</th>
                        <th>Kode Hari</th>
                        <th><i class="glyphicon glyphicon-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $batas = 5;
                $hal = @$_GET['hal'];
                if(empty($hal)) {
                    $posisi = 0;
                    $hal = 1;
                } else {
                    $posisi = ($hal - 1) * $batas;
                }
                $no = 1;
                if($_SERVER['REQUEST_METHOD'] =="POST") {
                    $pencarian = trim(mysqli_real_escape_string($con, $_POST ['pencarian']));
                    if($pencarian != '') {
                        $sql = "SELECT * FROM matkul WHERE nama_matkul LIKE '%$pencarian%'";
                        $query = $sql;
                        $queryJml = $sql;
                    } else {
                        $query = "SELECT * FROM matkul LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM matkul";
                        $no = $posisi + 1;                        
                    }
                } else {
                    $query = "SELECT * FROM matkul LIMIT $posisi, $batas";
                    $queryJml = "SELECT * FROM matkul";
                    $no = $posisi + 1;
                }
               
                $sql_matkul = mysqli_query($con, $query) or die (mysqli_error($con));
                if(mysqli_num_rows($sql_matkul) > 0 ) {
                    while($data = mysqli_fetch_array($sql_matkul)) { ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$data['kode_matkul']?></td>
                            <td><?=$data['nama_matkul']?></td>
                            <td><?=$data['deskripsi_matkul']?></td>
                            <td><?=$data['hari_belajar']?></td>
                            <td class="text-center">
                                <a href ="del.php?id=<?=$data ['kode_matkul']?>" onclick="return confirm('Apakah yakin menghapus data?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                                <a href="edit.php?id=<?=$data['kode_matkul']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    echo "<tr><td colspan=\"4\" align=\"center\">Data tidak ditemukan</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
        <font color = #FFFAFA>
        <?php
        if(@$_POST['pencarian'] == '') { ?>
            <div style="float:left;">
                <?php
                $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                echo "Jumlah Data : <b>$jml</b>";
                ?>
            </div>
            <div style="float:right;">
                <ul class="pagination pagination-sm" style="margin:0">
                    <?php
                    $jml_hal = ceil($jml / $batas);
                    for ($i=1; $i <= $jml_hal; $i++) { 
                        if($i != $hal) {
                            echo "<li><a href=\"?hal=$i\">$i</a></li>";
                        } else {
                            echo "<li class=\"active\"><a>$i</a></li>";
                        }
                    }
                    ?>
                </ul>
            </div>
            <?php
        } else {
            echo "<div style=\"float:left;\">";
            $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
            echo "Data Hasil Pencarian : <b>$jml</b>";
            echo "</div>";
        }
        ?>
        </font>
    </div>
</body>
<?php include_once('../_footer.php'); ?>