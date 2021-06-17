<?php include_once('../_header.php'); ?>
<body background="rr.jpg">
<div>
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
            </div>
    <div class="box">
    <center>
     <!-- <table style="background-color:#F0F8FF;"> -->
    <thead>
        <tr>     
         
            <caption><th><font color=#FFFAFA size="7">Jadwal Bimbel</font></th></caption>
            
        </tr>
    </thead>
     </table>
    <!-- <table style="background-color:#F0F8FF;"> -->
    <thead>
        <tr>    
            
        <h4>
         
             <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Jadwal</a>
            </div>
        </h4>
            
        </tr>
    </thead>
    </table>
</center>    
        
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
            <table style="background-color:#F0F8FF;" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Hari</th>
                        <th>Jam Belajar</th>
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
                        $sql = "SELECT * FROM jadwal WHERE hari_belajar LIKE '%$pencarian%'";
                        $query = $sql;
                        $queryJml = $sql;
                    } else {
                        $query = "SELECT * FROM jadwal LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM jadwal";
                        $no = $posisi + 1;                        
                    }
                } else {
                    $query = "SELECT * FROM jadwal LIMIT $posisi, $batas";
                    $queryJml = "SELECT * FROM jadwal";
                    $no = $posisi + 1;
                }
               
                $sql_matkul = mysqli_query($con, $query) or die (mysqli_error($con));
                if(mysqli_num_rows($sql_matkul) > 0 ) {
                    while($data = mysqli_fetch_array($sql_matkul)) { ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$data['hari_belajar']?></td>
                            <td><?=$data['jam_belajar']?></td>
                            <td class="text-center">
                                <a href ="del.php?id=<?=$data ['hari_belajar']?>" onclick="return confirm('Apakah yakin menghapus data?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                                <a href="edit.php?id=<?=$data['hari_belajar']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
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
    </div>
</body>
<?php include_once('../_footer.php'); ?>