<?php include_once('../_header.php'); ?>
<body background="rr.jpg">
    <div class="box">
    <font size = "2" color = #FFFAFA>
            <div>
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
            </div>
        <h1>Rekapitulasi Studi</h1>
        <h4>
            <small><font size = "2" color = #FFFAFA>Hasil Bimbingan Belajar Online</font></small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Rekap</a>
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
            <table style="background-color:#F0F8FF;" class="table table-bordered table-hover" id="kode_rekap">
            <thead>
                    <tr>
                        <th>Kode Rekapitulasi</th>
                        <th>ID Murid</th>
                        <th>Nama Murid</th>
                        <th>Kode Mata Kuliah</th>
                        <th>Nama Mata Kuliah</th>
                        <th>Nilai Mata Kuliah</th>
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
                        $sql = "SELECT * FROM murid WHERE nama_murid LIKE '%$pencarian%'";
                        $query = $sql;
                        $queryJml = $sql;
                    } else {
                        $query = "SELECT * FROM murid LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM murid";
                        $no = $posisi + 1;                        
                    }
                } else {
                    $query = "SELECT * FROM murid LIMIT $posisi, $batas";
                    $queryJml = "SELECT * FROM murid";
                    $no = $posisi + 1;
                }
               
                $no = 1;
                    $query = "SELECT * FROM rekapitulasi_studi";
                    $sql_cm = mysqli_query($con, $query) or die (mysqli_error($con));
                    while($data = mysqli_fetch_array($sql_cm)) { ?>
                        <tr>
                            <td><?=$data['kode_rekap']?></td>
                            <td><?=$data['id_murid']?></td>
                            <td><?=$data['nama_murid']?></td>
                            <td><?=$data['kode_matkul']?></td>
                            <td><?=$data['nama_matkul']?></td>
                            <td><?=$data['nilai_matkul']?></td>

                            <td align="center">
                            <a href ="del.php?id=<?=$data ['kode_rekap']?>" onclick="return confirm('Apakah yakin menghapus data?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                            <a href="edit.php?id=<?=$data['kode_rekap']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                        </td>
                            <?php
                    }
                //  else {
                //     echo "<tr><td colspan=\"4\" align=\"center\">Data tidak ditemukan</td></tr>";
                // }
                ?>
                </tbody>
            </table>
        </div>
        
    </div>
    <font size = "2" color = #FFFAFA>
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
        ?> </font>
    
</body>
<?php include_once('../_footer.php'); ?>